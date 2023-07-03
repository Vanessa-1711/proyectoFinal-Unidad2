<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empresa_receptora extends Model
{
    use HasFactory;

    protected $table = 'empresa_receptora';
    protected $fillable = [
        'nombre',
        'direccion',
        'rfc',
        'contacto',
        'email',
    ];
}
