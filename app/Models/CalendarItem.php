<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CalendarItem extends Model
{
    use HasUuids;

    protected $fillable = [
        'calendar_category_id',
        'title',
        'location_id',
        'start',
        'end',
    ];

    public function calendarCategory(): BelongsTo
    {
        return $this->belongsTo(CalendarCategory::class);
    }

    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }
}
