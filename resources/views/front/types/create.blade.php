@extends('front.master')
@section ('titel','إضافة الطراز')
@section('contentheaderactivelink')
<a href="{{ route('frontview_types') }}">  الطراز</a>
@endsection
@section('contentheaderactive')
اضافة
@endsection
@section('content')
<div class="col-12">
   <div class="card">
      <div class="card-header">
         <h3 class="text-grey text-center"> إضافة طراز 
         </h3>
      </div>
      <div class="card-body">
         <form action="#" method="post"> 
            @csrf
            <div class="col-md-12">
               <div class="form-group">
                  <label>   اسم الطراز</label>
                  <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}"  >
                  @error('name')
                  <span class="text-danger">{{ $message }}</span> 
                  @enderror
               </div>
            </div>
            <div class="col-md-12">
               <div class="form-group">
                  <label> رقم الطراز </label>
                  <input type="text" name="code" id="code" class="form-control" value="{{ old('code') }}"  >
                  @error('code')
                  <span class="text-danger">{{ $message }}</span> 
                  @enderror
               </div>
            </div>
            <div class="col-md-12">
               <div class="form-group text-center">
                  <button class="btn btn-sm btn-success" type="submit" name="submit">اضف الطراز </button>
                  <a href="{{ route('frontview_types') }}" class="btn btn-danger btn-sm">الغاء</a>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>
@endsection