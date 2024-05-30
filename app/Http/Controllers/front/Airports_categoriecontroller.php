<?php

namespace App\Http\Controllers\front;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Airports_categoriecontroller extends Controller
{
    public function view_Airports(){
     
        return view('front.Airports.index');
      }

      //* ***************************creat page ***********************************//
  public function create (){
    return view('front.Airports.create');
  }

  //* ***************************edit page  ***********************************//
public function edit (){
    return view('front.Airports.edit');
  }
}
