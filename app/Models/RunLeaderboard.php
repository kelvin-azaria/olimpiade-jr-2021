<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RunLeaderboard extends Model
{
    protected $fillable = [
        'position',
        'participant_name',
        'participant_gender',
        'participant_work_unit',
        'activity_date',
        'activity_length',
        'activity_duration',
        'strava_activity_url',
    ];
}
