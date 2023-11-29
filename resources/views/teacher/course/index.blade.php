

@extends('layouts.teacher')


@section('head')
<style>
.min-w-125px {
    min-width: 330px !important;
}
.min-w-300px {
    min-width: 300px !important;
}
.min-w-100px {
    min-width: 100px !important;
}

li{
                list-style: none;
                font-size: 16px;
            }
</style>
@endsection
@section('content')
<div class="container" style="margin-top:20px;">


<div class="container">
    <div class="d-flex align-items-center justify-content-between p-5" >
        <h2 class="h1 mx-3">جميع الدورات الحضورية</h2>
        <div class="d-flex align-items-center">
            <a class="d-block regular-black-btn btn" style="width: 150px;" href="{{route('file.add')}}">
                <i class="fa-solid fa-plus"></i>
                أضف دورة جديد
            </a>
        </div>
    </div>
</div>
@if(Session::has('success'))
<div class="alert alert-success">
    {{ Session::get('success') }}
</div>
@endif
    <!--begin::Tables Widget 12-->


        <div class="card mb-5 mb-xl-8" id="app-1">

            <!--begin::Body-->
            <div class="card-body p-0">
                <!--begin::Table container-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table id="kt_datatable_horizontal_scroll" class="table table-striped table-row-bordered gy-5 gs-7" >
                        <thead>
                            <tr class="fw-semibold fs-6 text-gray-800"  >
                                <th class="min-w-200px" style="text-align: right;">اسم الدورة</th>
                                <th class="min-w-150px" style="text-align: right;"> بداية الدورة</th>
                                <th class="min-w-150px" style="text-align: right;">نهاية الدورة</th>
                                <th class="min-w-200px" style="text-align: right;"> </th>

                            </tr>
                        </thead>
                        <tbody>

                                                @foreach($courses as $course)
                                                    <tr>
                                                        <td>  <span>
                                                            <img src="{{asset('admin/media/teacher dashboard/video icon.jpg')}}" style="width: 40px;height: 40px;"/>
                                                        </span>{{$course->title}}</td>
                                                        <td>{{$course->start}}</td>
                                                        <td>{{$course->end}}</td>

                                                        <td>
                                                            <a href="{{route('course.edit',$course->id)}}"><i role="button" class="fa-solid fa-pen-to-square fs-3 mx-3"></i></a>
                                                            <a href="{{route('course.delete',$course->id)}}"><i role="button" class="fa-solid fa-trash fs-3 want_delete_btn"></i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                           


                        </tbody>
                    </table>

                    <!--end::Table-->
                </div>
                <!--end::Table container-->
            </div>
            <!--begin::Body-->

        </div>

    <!--end::Tables Widget 12-->
    </div>


@endsection

@section('js')
<script>
$("#kt_datatable_horizontal_scroll").DataTable({
    "scrollX": true
});
</script>
@endsection
