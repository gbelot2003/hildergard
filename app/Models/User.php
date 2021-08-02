<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasRoles, Sluggable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'status'
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'status' => 'boolean',
    ];

    /**
     * Relacion con Grados
     * Solo usuarios tipo maestros
     */
    public function isTeacher()
    {
        return $this->hasOne(Grade::class, 'teacher_id', 'id');
    }

    /**
     * Relacion muchos a muchos grados
     *
     * @return void
     */
    public function grades()
    {
        return $this->belongsToMany(Grade::class);
    }

    public function profile_url()
    {   
        return "admin/profile/$this->slug";
    }

    /**
     * Retornamos ruta de perfil de usuario
     * para menu AdminLte
     *
     * @return void
     */
    public function AdminLte_profile_url()
    {
        return "admin/profile/$this->slug";
    }

    /**
     * function teachers
     * devuelve lista de usuarios con rol de maestros
     * sin test
     * 
     * @return collection
     */
    public static function teachers()
    {
        return self::whereHas('roles', function($q){
            $q->where('name', '=', 'maestro');
        });
    }

    /**
     * function students
     * devuelve lista de usuarios con rol de alumnos
     * sin test
     * 
     * @return collection
     */
    public static function students()
    {
        return self::whereHas('roles', function($q){
            $q->where('name', '=', 'alumno');
        });
    }

}
