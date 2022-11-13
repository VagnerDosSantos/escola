<?php

namespace App\Models;

use App\Extenders\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Funcionario extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $casts = [
        'deficiencias_altas_habilidades_autismo' => 'array',
        'formacao_continuada' => 'array',
    ];
}
