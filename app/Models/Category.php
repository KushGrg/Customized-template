<?php

namespace App\Models;

use App\Traits\HasUuid;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    use HasUuid;

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'is_active',
        'uuid',
        'created_by',
        'updated_by',
    ];

   
}
