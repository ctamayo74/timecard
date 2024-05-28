<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timelog extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'event_time', 'event_type'];

    

    public function is_punched_in()
    {
        $lastTimeLog = $this->timeLogs()->latest()->first();
        return $lastTimeLog && $lastTimeLog->event_type == 'IN';
    }
}
