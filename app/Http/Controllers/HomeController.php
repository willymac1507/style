<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $events = [];

        $appointments = Appointment::with(['client', 'student'])->get();

        foreach ($appointments as $appointment) {
            $events[] = [
                'title' => $appointment->client->name . ' ('.$appointment->student->last_name.')',
                'start' => $appointment->start_time,
                'end' => $appointment->finish_time,
            ];
        }

        return view('dashboard', compact('events'));
    }
}
