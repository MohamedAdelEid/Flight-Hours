<?php

namespace App\Http\Controllers\front;

use App\Models\jobs_categories;
use App\Http\Controllers\Controller;


use Illuminate\Support\Facades\DB;

class jobs_categoriecontroller extends Controller
{

  public function view_jobs(){
    $data=jobs_categories::select("*")->Orderby('id','DESC');
    return view('front.Jobs_categories.index',['data'=>$data]);
  }


//* ***************************creat page ***********************************//
  public function create (){
    return view('front.Jobs_categories.create');
  }

  public function store(Jobs_categories $request)
  {
//* ***************************كود الحفظ ***********************************//
  $jobs = new jobs_categories ();
  $jobs->name  = $request->name;
 $jobs->active = $request->active;
 $jobs->added_by = auth()->$jobs()->id;
  echo$jobs->save();
  return redirect('insert')->with('status',"Insert successfully");
}
//* ***************************edit page  ***********************************//
public function edit (){
  return view('front.Jobs_categories.edit');
}
}
