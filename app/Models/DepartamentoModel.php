<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DepartamentoModel extends Model
{
    use HasFactory;
   
    protected $fillable = [
        'id','departamento','estado','created_by','updated_by',
    ];

    protected $table = 'departamento';
}
