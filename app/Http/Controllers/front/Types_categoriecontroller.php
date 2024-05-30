<?php

namespace App\Http\Controllers\front;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class Types_categoriecontroller extends Controller
{
    public function view_types(){
      
        return view('front.types.index');
      }


      
//* ***************************creat page ***********************************//
  public function create (){
    return view('front.types.create');
  }

  public function edit (){
    return view('front.types.edit');
  }
}
