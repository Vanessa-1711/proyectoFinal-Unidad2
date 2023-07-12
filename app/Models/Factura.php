<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\empEmisora;
use App\Models\empresa_receptora;
class Factura extends Model
{
    use HasFactory;
    protected $fillable = [
        'folio',
        'pdf',
        'xml',
        'empresa_emisora_id',
        'empresa_receptora_id'
    ];

    //relacion de id con empresa emisora
    public function emisora(){
        return $this->belongsTo(empEmisora::class,'empresa_emisora_id');
    }
    //relacion de id con empresa receptora
    public function receptora(){
        return $this->belongsTo(empresa_receptora::class,'empresa_receptora_id');
    }
}
