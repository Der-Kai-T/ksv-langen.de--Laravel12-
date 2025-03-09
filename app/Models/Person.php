<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasUuids;
    protected $fillable = [
        'name_first',
        'name_last',
    ];
}
