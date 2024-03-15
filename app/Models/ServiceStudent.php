<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ServiceStudent extends Model
{
    use HasFactory;

    public function students(): BelongsTo
    {
        return $this->belongsTo(Student::class);
    }

    public function services(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }
}
