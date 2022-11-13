<?php

namespace App\Models;

use App\Extenders\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Funcionario extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['codigo_sistema', 'escola_id'];

    protected $casts = [
        'deficiencias_altas_habilidades_autismo' => 'array',
        'formacao_continuada' => 'array',
    ];
}
