<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    //
    public function save(Request $request)
    {
        // dd($request->all());
        $patient = new appointment(
        [
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'timing' => $request->get('timing'),
        ]);
        $patient->save();
        return redirect()->back();
    }
}
