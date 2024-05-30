@extends('front.master')
@section ('titel','المطارات ')
@section('contentheaderactivelink')
<a href="{{ route('frontview_Airports') }}"> المطارات </a>
@endsection
@section('contentheaderactive')
تعديل 
@endsection

@section('content')
<div class="col-12">
   <div class="card">
      <div class="card-header">
         <h3 class="card-title card_title_center">  تعديل بيانات المطار
         </h3>
      </div>
      <div class="card-body">
         <form action="#" method="post">
            @csrf
            <div class="col-md-12">
               <div class="form-group">
                  <label>     اسم المطار</label>
                  <input type="text" name="name_airport" id="name_airport" class="form-control" value="{{ old('name_airport') }}"  >
                  @error('name_airport')
                  <span class="text-danger">{{ $message }}</span> 
                  @enderror
               </div>
            </div>

            
            <div class="col-md-12">
               <div class="form-group">
                  <label>  رمز المطار</label>
                  <input type="text" name="code_airport" id="code_airport" class="form-control" value="{{ old('code_airport') }}"  >
                  @error('code_airport')
                  <span class="text-danger">{{ $message }}</span> 
                  @enderror
               </div>
            </div>
            <div class="col-md-12">
               <div class="form-group text-center">
                  <button class="btn btn-sm btn-success" type="submit" name="submit">تعديل الطراز </button>
                  <a href="{{ route('frontview_Airports') }}" class="btn btn-danger btn-sm">الغاء</a>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>
@endsection