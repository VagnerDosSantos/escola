<?php

namespace App\Models;

use App\Extenders\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aluno extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['ano_letivo', 'codigo_sistema', 'escola_id'];
    protected $casts = [
        'deficiencia_altas_habilidades_autismo' => 'array',
        'recursos_sala_aula' => 'array',
    ];
}
