<?php

namespace App\Models;

use App\Extenders\Model;
use App\Models\Scopes\SchoolScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Funcionario extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];
    protected $casts = [
        'deficiencias_altas_habilidades_autismo' => 'array',
        'formacao_continuada' => 'array',
    ];

    protected static function booted()
    {
        parent::booted();

        static::addGlobalScope(new SchoolScope());
    }
}
