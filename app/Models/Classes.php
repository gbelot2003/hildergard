<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;

    protected $fillable = ['teacher_id', 'grade_id', 'name', 'start', 'end'];

    /**
     * Relacion entre Clase y maestro
     *
     * @return void
     */
    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id', 'id');
    }

    /**
     * Relacion con Grados
     *
     * @return void
     */
    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

    /**
     * Relacion con Lecciones
     *
     * @return void
     */
    public function lections()
    {
        return $this->hasMany(lection::class, 'classes_id', 'id');
    }

}
