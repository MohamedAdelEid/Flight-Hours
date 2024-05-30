<?php

namespace App\Http\Controllers\Captin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CaptinHomecontroller extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
    return view ('Captin.home');
    }
}
