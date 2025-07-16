<?php

namespace App\Traits;
use Illuminate\Support\Str;

trait HasUuid
{
    //
     protected static function bootHasUuid()
    {
        static::creating(function ($model) {
            if (empty($model->uuid)) {
                $model->uuid = (string) Str::uuid();
            }
        });
    }

    /**
     * Make sure the UUID column exists and is fillable.
     */
    public function initializeHasUuid()
    {
        if (!in_array('uuid', $this->fillable)) {
            $this->fillable[] = 'uuid';
        }
    }
}
