@extends('layouts.admin')
@section('content')

<div class="container" style="padding:40px;">
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif
<div class="card shadow-sm">
    <div class="card-header">
        <h3 class="card-title">المعلمين</h3>
        <div class="card-toolbar">

        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="kt_datatable_horizontal_scroll" class="table table-striped table-row-bordered gy-5 gs-7" >
                <thead>
                    <tr class="fw-semibold fs-6 text-gray-800"  >
                        <th class="min-w-200px" style="text-align: right;">الاسم</th>
                        <th class="min-w-150px" style="text-align: right;">البريد الالكتروني</th>
                        <th class="min-w-150px" style="text-align: right;">الجوال</th>
                        <th class="min-w-100px" style="text-align: right;">نسبة الربح</th>
                        <th class="min-w-200px" style="text-align: right;"> </th>

                    </tr>
                </thead>
                <tbody>
                    @if(count(\App\Models\Teacher::all()) > 0)
                                        @foreach($teachers as $teacher)
                                            <tr>
                                                <td>{{$teacher->name}}</td>
                                                <td>{{$teacher->email}}</td>
                                                <td>{{$teacher->phone}}</td>
                                                <td>{{$teacher->profit_percentage}} %</td>
                                                <td>
                                                    <a class="solid-black-btn btn mx-2 publish-btn" href="{{route('edit.teacher',$teacher->id)}}">تعديل </a>
                                                    <a class="solid-black-btn btn mx-2 publish-btn" href="{{route('delete.teacher',$teacher->id)}}">حذف </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <p>No Content !</p>
                                    @endif


                </tbody>
            </table>
        </div>
    </div>

</div>



</div>

















@endsection
@section('js')
<script>
$("#kt_datatable_horizontal_scroll").DataTable({
    "scrollX": true
});
</script>
@endsection
