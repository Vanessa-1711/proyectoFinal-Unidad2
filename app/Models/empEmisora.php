<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Factura;
class empEmisora extends Model
{
    use HasFactory;
    protected $table = 'empresa_emisora';
    protected $fillable = [
        'razon',
        'correo',
        'rfc',
    ];

    //Se hacen las conexiones entre las tablas de facturas
    public function facturas(){
        $this->hasMany(Factura::class,'emisora_id');
    }
}
