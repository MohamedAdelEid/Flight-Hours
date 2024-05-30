




@extends('front.master')
@section ('titel','الوظائف')
@section("css")
<link rel="stylesheet" href="{{ asset('assets-front/plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets-front/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endsection
@section('contentheaderactivelink')
<a href="{{ route('frontEmployee.index') }}"> بحث عن موظف  </a>
@endsection
@section('contentheaderactive')
بيانات الموظفين  
@endsection
@section('content')

<div class="row">
   <div class="col-12">
     <div class="card">
       <div class="card-header">
         <h3 class="card-title card_title_center"> تفاصيل بيانات الموظف   </h3>
       </div>
       <!-- /.card-header -->
       <div class="card-body">
         <div id="">
      
       
       <table id="example2" class="table table-bordered table-hover">
        
           <tr>
               <td class="width30"> الرقم المالي  </td> 
               <td > </td>
           </tr>
     
           <tr>
             <td class="width30">    الأســـم  </td> 
             <td ></td>
            </tr>
           
            <tr>
               <td class="width30">  اسم الأب  </td> 
               <td > </td>
            </tr>
           
            <tr>
               <td class="width30">  اللقب </td> 
               <td ></td>
            </tr>
          
            <tr>
             <td class="width30">      الوظيفة   </td> 
             <td > </td>
            </tr>

            <tr>
              <td class="width30">     الحالة   </td> 
              <td > مفعل </td> 
            </tr>
           
            <tr>
               <td class="width30">  تاريخ  الاضافة</td> 
               <td ></td>
            </tr> 

             <tr>
               <td class="width30">  تاريخ اخر تحديث</td> 
               <td > لايوجد تحديث </td>
            </tr> 
         </table>
   
       </div>


     </div>
    </div>
  </div>
</div>

@endsection


<script>
   //Initialize Select2 Elements</script>


@section('script')
<script src="{{ asset('assets-front/js/suppliers_with_order.js') }}"></script>
<script  src="{{ asset('assets-front/plugins/select2/js/select2.full.min.js') }}"> </script>
@endsection