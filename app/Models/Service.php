<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'nombre',
        'precio',
        'descripcion',
        'duracion',
        'activo'
    ];

    public function appointments()
    {
        return $this->belongsToMany(Appointment::class);
    }

}