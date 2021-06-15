<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'teacher_id', 'year'];

    /** Configuracion de ruta de modelo */
    public function path()
    {
        return "/admin/grados/{$this->id}";
    }

    /**
     * Relacion con User
     * Tipo Profesor
     */
    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id', 'id');
    }

    /**
     * Relacion muchos a muchos para estudientas
     *
     * @return void
     */
    public function studerns()
    {
        return $this->belongsToMany(User::class);
    }

}
