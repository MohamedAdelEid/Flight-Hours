

@extends('front.master')
@section ('titel','الوظائف')
@section('contentheaderactivelink')
<a href="{{ route('frontindex') }}">البيانات الأساسية </a>
@endsection
@section('contentheaderactive')
الوظائف
@endsection
@section('content')
<div class="col-12">
         <div class="card">
            <div class="card-header">
               <h5 class="text-grey text-center"> قـائـمة الـوظائـف
                  <a href= "{{ route('frontjobs.create') }}" class="btn btn-sm btn-warning">اضافة جديد</a>
               </h5>
            </div>
            <div class="card-body">
             @if(@isset($data) and !@empty($data))
                
               <table id="example2" class="table table-bordered table-hover">
                  <thead class ="custom-thead">
                    <th> رقم التسلسل </th>
                    <th> الوظيفة </th>
                    <th></th>
                  </thead>
                  <tbody>
                  @foreach ($data as $info )
                     <tr>
                        <td> {{ $info->id }} </td>
                         <td>  {{ $info->name }} </td>
                        <td>
                           <a  href="{{ route('frontjobs.edit') }}" class="btn btn-success btn-sm">تعديل</a>
                           <a  href="#" class="btn are_you_shur  btn-danger btn-sm">حذف</a>

                        </td>
                     </tr>
                     @endforeach
                   </tbody>
                    </table>
                    @else
                    <p class="bg-danger text-center"> عفوا لاتوجد بيانات لعرضها</p>
                    @endif
             
            </div>
              

         </div>
</div>
@endsection
