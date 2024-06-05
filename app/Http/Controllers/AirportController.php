<?php

namespace App\Http\Controllers;

use App\Models\Airport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AirportController extends Controller
{
    public function index()
    {
        $airports = Airport::all()->sortByDesc('created_at');
        return view('user.airport.index', ['airports' => $airports]);
    }

    public function create()
    {
        return view('user.airport.add');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'airport_name' => ['required', 'string', 'max:255'],
            'airport_code' => ['required', 'string', 'max:10'],
        ], [
            'airport_name.required' => 'The airport name field is required.',
            'airport_name.string' => 'The airport name must be a string.',
            'airport_name.max' => 'The airport name may not be greater than 255 characters.',
            'airport_code.required' => 'The airport code field is required.',
            'airport_code.string' => 'The airport code must be a string.',
            'airport_code.max' => 'The airport code may not be greater than 10 characters.',
        ]);

        Airport::create([
            'airport_name' => $validatedData['airport_name'],
            'airport_code' => $validatedData['airport_code'],
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('airport.create')->with('success', 'Airport Created Successfully');
    }

    public function show(Airport $airport)
    {
        return view('user.airport.show', ['airport' => $airport]);
    }

    public function edit(Airport $airport)
    {
        return view('user.airport.edit', ['airport' => $airport]);
    }

    public function update(Request $request, Airport $airport)
    {
        $validatedData = $request->validate([
            'airport_name' => ['required', 'string', 'max:255'],
            'airport_code' => ['required', 'string', 'max:10'],
        ], [
            'airport_name.required' => 'The airport name field is required.',
            'airport_name.string' => 'The airport name must be a string.',
            'airport_name.max' => 'The airport name may not be greater than 255 characters.',
            'airport_code.required' => 'The airport code field is required.',
            'airport_code.string' => 'The airport code must be a string.',
            'airport_code.max' => 'The airport code may not be greater than 10 characters.',
        ]);

        $airport->update([
            'airport_name' => $validatedData['airport_name'],
            'airport_code' => $validatedData['airport_code'],
        ]);

        return redirect()->route('airport.index')->with('success', 'Airport Updated Successfully');
    }

    public function destroy(Airport $airport)
    {
        $airport->delete();
        return redirect()->route('airport.index')->with('success', 'Airport Deleted Successfully');
    }
}
