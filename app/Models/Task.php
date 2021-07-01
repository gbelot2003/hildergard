<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['classes_id', 'name', 'start', 'end', 'description'];

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