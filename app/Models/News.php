<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasUuids;

    protected $fillable = [
        'headline',
        'subheadline',
        'content',
        'excerpt',
        'author',
        'date',
        'publish_date',
        'unpublish_date',
    ];

    protected function casts(): array
    {
        return [
            'date' => 'datetime',
            'publish_date' => 'datetime',
            'unpublish_date' => 'datetime',
        ];
    }
}
