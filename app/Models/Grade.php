<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    /** Configuracion de ruta de modelo */
    public function path()
    {
        return "/admin/grados/{$this->id}";
    }
}
