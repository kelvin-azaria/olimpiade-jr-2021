<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bridge extends Model
{
    protected $fillable = [
        'user_id',
        'name',
        'phone',
        'bbo_username',
        'score',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}