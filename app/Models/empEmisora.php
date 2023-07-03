<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empEmisora extends Model
{
    use HasFactory;
    protected $table = 'empresa_emisora';
    protected $fillable = [
        'razon',
        'correo',
        'rfc',
    ];
}
