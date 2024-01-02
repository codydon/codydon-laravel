<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function carable(): MorphTo
    {
        return $this->morphTo();
    }
}
