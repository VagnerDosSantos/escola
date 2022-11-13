<?php

namespace App\Extenders;

use Illuminate\Database\Eloquent\Model as EloquentModel;
use OwenIt\Auditing\Contracts\Auditable;

abstract class Model extends EloquentModel implements Auditable
{
    use \OwenIt\Auditing\Auditable;

    protected static function booted()
    {
        static::creating(function ($model) {
            $model->created_by = 'Laravel';
        });

        static::updating(function ($model) {
            $model->updated_by = 'Laravel';
        });

        static::deleting(function ($model) {
            $model->deleted_by = 'Laravel';
        });
    }

    public function scopeBySchool($query)
    {
        $query->where('escola_id', '=', 2);
    }
}
