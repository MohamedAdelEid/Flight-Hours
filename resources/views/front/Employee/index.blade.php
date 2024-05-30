

@extends('front.master')
@section ('titel','الوظائف')
@section('contentheaderactivelink')
<a href="{{ route('frontindex') }}">البيانات الأساسية </a>
@endsection
@section('contentheaderactive')
بيانات الموظفين 
@endsection

@section('content')
<div class="card">
   <div class="card-header">
      <h3 class="card-title card_title_center">بيانات الموظفين      </h3>
      <input type="hidden" id="token_search" value="">
      <input type="hidden" id="ajax_search_url" value="">
      <a href="#" class="btn btn-sm btn-success" >اضافة جديد</a>
   </div>
   <!-- /.card-header -->
   <div class="card-body">
      <div class="row">
         <div class="col-md-6">
            <input  type="radio" checked name="searchbyradio" id="searchbyradio" value="account_number"> برقم الموظف
            <input  type="radio" name="searchbyradio" id="searchbyradio" value="name"> بالاسم
            <input style="margin-top: 6px !important;" type="text" id="search_by_text" placeholder=" اسم  - رقم الحساب" class="form-control"> <br>
         </div>

        
      </div>
      <div class="clearfix"></div>
      <div id="ajax_responce_serarchDiv" class="col-md-12">
        
         <table id="example2" class="table table-bordered table-hover">
            <thead class="custom_thead">
               <th>الرقم  </th>
               <th>  الأسم  </th>
               <th>  أسم الأب    </th>
               <th>  اللقب   </th>
               <th>  الوظيفة  </th>
               <th> الحالة </th>
               <th></th>
            </thead>
            <tbody>
           
               <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td> </td>
                  <td> </td>
             
                  <td>
                  
                     <a href="{{ route('frontEmployee_search') }}" class="btn btn-sm  btn-primary">عرض </a> 
                     <a href="#" class="btn btn-success btn-sm">تعديل</a> 
                     <a href="#" class="btn are_you_shur  btn-danger btn-sm">حذف </a>    
                   
                  </td>

                <!--  <td> </td>-->
               </tr>
             
            </tbody>
         </table>
         <br>
   
         <div class="alert alert-danger">
            عفوا لاتوجد بيانات لعرضها !!
         </div>
      
      </div>
   </div>
</div>
</div>
@endsection
@section('script')
<script src="{{ asset('assets-front/js/accounts.js') }}"></script>
@endsection
