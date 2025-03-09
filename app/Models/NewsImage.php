<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NewsImage extends Model
{
    use HasUuids;

    protected $fillable = [
        'news_id',
        'is_header',
        'alt',
        'cop',
    ];

    public function news(): BelongsTo
    {
        return $this->belongsTo(News::class);
    }

    protected function casts(): array
    {
        return [
            'is_header' => 'boolean',
        ];
    }
}
