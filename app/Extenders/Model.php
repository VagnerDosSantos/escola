<?php

namespace App\Extenders;

use Illuminate\Database\Eloquent\Model as EloquentModel;

abstract class Model extends EloquentModel
{
    protected static function booted()
    {
        static::creating(function ($model) {
            $model->created_by = 'Laravel';
        });

        static::updating(function ($model) {
            $model->updated_by = 'Laravel';
        });
    }
}
