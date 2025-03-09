<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Trainer extends Model
{
    use HasUuids;

    protected $fillable = [
        'licence',
        'function',
        'working_time',
        'training_offers_id',
        'person_id',
    ];

    public function trainingOffers(): BelongsTo
    {
        return $this->belongsTo(TrainingOffers::class);
    }

    public function person(): BelongsTo
    {
        return $this->belongsTo(Person::class);
    }
}
