<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    /** @use HasFactory<\Database\Factories\ClienteFactory> */
    use HasFactory;
    protected $fillable = [
        'tipo_documento',
        'numero_documento',
        'razon_social',
    ];


    public function tipo_Documento()
    {
        return $this->belongsTo(TipoDocumento::class, 'tipo_documento');
    }
}
