<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lection extends Model
{
    use HasFactory;

    protected $fillable = ['classes_id', 'name'];

    /**
     * Relacion con Modelo de Clases
     *
     * @return void
     */
    public function clases()
    {
        return $this->belongsTo(Classes::class, 'classes_id', 'id');
    }
}
