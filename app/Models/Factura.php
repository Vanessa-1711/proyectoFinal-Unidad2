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
        'emisora_id',
        'receptora_id'
    ];

    //relacion de id con empresa emisora
    public function emisora(){
        return $this->belongsTo(empEmisora::class,'emisora_id');
    }
    //relacion de id con empresa receptora
    public function receptora(){
        return $this->belongsTo(empresa_receptora::class,'receptora_id');
    }
}
