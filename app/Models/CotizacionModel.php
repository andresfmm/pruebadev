<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CotizacionModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','modelo','nombre','email','celular','departamento','ciudad',
    ];

    protected $table = 'cotizacion';
}


