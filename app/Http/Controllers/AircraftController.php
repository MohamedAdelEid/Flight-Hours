<?php

namespace App\Http\Controllers;

use App\Models\Aircraft;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AircraftController extends Controller
{
    public function index()
    {
        $aircrafts = Aircraft::all()->sortByDesc('created_at');
        return view('user.aircraft.index', ['aircrafts' => $aircrafts]);
    }

    public function create()
    {
        return view('user.aircraft.add');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'aircraft_name' => ['required', 'string', 'max:255'],
            'aircraft_code' => ['required', 'string', 'max:255'],
        ], [
            'aircraft_name.required' => 'حقل اسم الطائرة مطلوب.',
            'aircraft_name.string' => 'يجب أن يكون اسم الطائرة نصًا.',
            'aircraft_name.max' => 'قد لا يكون اسم الطائرة أكبر من 255 حرفًا.',
            'aircraft_code.required' => 'حقل رمز الطائرة مطلوب.',
            'aircraft_code.string' => 'يجب أن يكون رمز الطائرة نصًا.',
            'aircraft_code.max' => 'قد لا يكون رمز الطائرة أكبر من 255 حرفًا.',
        ]);


        Aircraft::create([
            'aircraft_name' => $validatedData['aircraft_name'],
            'aircraft_code' => $validatedData['aircraft_code'],
            'user_id' => Auth::guard('web')->id(),
        ]);

        return redirect()->route('aircraft.create')->with('success', 'Aircraft Created Successfully');
    }

    public function show(Aircraft $aircraft)
    {
        return view('user.aircraft.show', ['aircraft' => $aircraft]);
    }

    public function edit(Aircraft $aircraft)
    {
        return view('user.aircraft.edit', ['aircraft' => $aircraft]);
    }

    public function update(Request $request, Aircraft $aircraft)
    {
        $validatedData = $request->validate([
            'aircraft_name' => ['required', 'string', 'max:255'],
            'aircraft_code' => ['required', 'string', 'max:255'],
        ], [
            'aircraft_name.required' => 'The aircraft name field is required.',
            'aircraft_name.string' => 'The aircraft name must be a string.',
            'aircraft_name.max' => 'The aircraft name may not be greater than 255 characters.',
            'aircraft_code.required' => 'The aircraft code field is required.',
            'aircraft_code.string' => 'The aircraft code must be a string.',
            'aircraft_code.max' => 'The aircraft code may not be greater than 255 characters.',
        ]);

        $aircraft->update([
            'aircraft_name' => $validatedData['aircraft_name'] ? $validatedData['aircraft_name'] : $aircraft->aircraft_name ,
            'aircraft_code' => $validatedData['aircraft_code'] ? $validatedData['aircraft_code'] : $aircraft->aircraft_code
        ]);

        return redirect()->route('aircraft.index')->with('success', 'Aircraft Updated Successfully');
    }

    public function destroy(Aircraft $aircraft)
    {
        $aircraft->delete();
        return redirect()->route('aircraft.index')->with('success', 'Aircraft Deleted Successfully');
    }
}
