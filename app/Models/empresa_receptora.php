<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Factura;
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
    //Se hacen las conexiones entre las tablas de facturas
    public function facturas(){
        return $this->hasMany(Factura::class,'empresa_receptora_id');
    }
}
