<?php

namespace App\Models;

use App\Extenders\Model;
use App\Models\Traits\SchoolScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Funcionario extends Model
{
    use HasFactory;
    use SoftDeletes;
    // use SchoolScope;

    protected $guarded = [];

    protected $casts = [
        'deficiencias_altas_habilidades_autismo' => 'array',
        'formacao_continuada' => 'array',
    ];
}
