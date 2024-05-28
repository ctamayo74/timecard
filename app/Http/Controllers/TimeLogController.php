<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TimeLog;

class TimeLogController extends Controller
{
    public function punchIn(Request $request)
    {
        $timeLog = new TimeLog;
        $timeLog->user_id = $request->user()->id;
        $timeLog->event_time = now();
        $timeLog->event_type = 'IN';
        $timeLog->save();

        // Redirige al usuario a donde quieras que vaya después de fichar
        return redirect('/dashboard');
    }

    public function punchOut(Request $request)
    {
        $timeLog = new TimeLog;
        $timeLog->user_id = $request->user()->id;
        $timeLog->event_time = now();
        $timeLog->event_type = 'OUT';
        $timeLog->save();

        // Redirige al usuario a donde quieras que vaya después de fichar
        return redirect('/dashboard');
    }

}
