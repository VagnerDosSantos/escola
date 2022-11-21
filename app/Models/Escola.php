<?php

namespace App\Models;

use App\Extenders\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Escola extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $casts = [
        'esfera_administrativa_conselho' => 'array',
        'formas_contratacao' => 'array',
        'poder_publico_responsavel_parceria_convenio' => 'array',
        'mantenedora_escola_privada' => 'array',
    ];
}
