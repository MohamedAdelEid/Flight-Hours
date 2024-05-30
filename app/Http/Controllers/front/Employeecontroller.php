<?php

namespace App\Http\Controllers\front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Employeecontroller extends Controller
{
    public function Employee_index (){
        return view('front.Employee.index');
      }

      public function Employee_search (){
        return view('front.Employee.view_search');
      }
}
