<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;

    protected $with = ['columns'];

    protected $fillable = [
        'name',
    ];

    public function columns(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Column::class);
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
