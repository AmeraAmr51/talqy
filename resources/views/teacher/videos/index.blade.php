@extends('layouts.teacher')

@section('head')
{{-- <style>
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
            } --}}
</style>
@endsection
@section('content')
<div class="container" style="margin-top:20px;">
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif
		<!--start head-->
        <div class="container">
            <div class="d-flex align-items-center justify-content-between p-5" >
                <h2 class="h1 mx-3">جميع الفيديوهات</h2>
                <div class="d-flex align-items-center">
                    <select role="button" style="width: 150px;border: 1px solid #1e1e1e;" class="form-select" aria-label="Default select example">

                        <option selected hidden>الفصل الدراسي</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <select role="button" style="width: 150px;border: 1px solid #1e1e1e;" class="form-select mx-5" aria-label="Default select example">
                        <option selected hidden>المادة</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                    <a class="d-block regular-black-btn btn" style="width: 150px;" href="{{route('videos.create')}}">
                        <i class="fa-solid fa-plus"></i>
                        أضف فيديو جديد
                    </a>
                </div>
            </div>
        </div>
        <!--End head-->

	<!--begin::Tables Widget 12-->
    <div class="card mb-5 mb-xl-8">

        <!--begin::Body-->
        <div class="card-body p-0">
            <!--begin::Table container-->
            <div class="table-responsive">
                <!--begin::Table-->
                <table class="table align-middle gs-0 gy-4">
                    <!--begin::Table head-->
                    <thead>
                        <tr class="fw-bold  text-muted table-header-color">

                            <th class="min-w-125px">اسم الفيديو</th>
                            <th class="min-w-125px">اسم الكتاب</th>
                            <th class="min-w-125px">اسم الباب</th>
                            <th class="min-w-125px">اسم الفصل</th>
                            <th class="min-w-125px">اسم الدرس</th>
                            <th class="min-w-125px">الحاله</th>
                            <th class="min-w-125px">تاريخ النشر</th>
                            <th class="min-w-125px"></th>
                        </tr>
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody>

                        @foreach ($videos as $video )
                        <tr class="p-5 mx-5">
                            <td>
                                <span class="d-flex align-items-center">
                                    <img style="width: 35px;height: 35px;" class="rounded" src="{{asset('/teacher/video icon.jpg')}}"/>
                                    <span class="m-0 mx-3">{{$video->title}}</span>
                                </span>
                            </td>
                            <td>
                                <span>{{$video->lesson->chapters->parts->books->title}} </span>
                            </td>
                            <td>
                                <span>{{$video->lesson->chapters->parts->title}} </span>
                            </td>
                            <td>
                                <span> {{$video->lesson->chapters->title}}</span>
                            </td>
                            <td>
                                <span>
                                    {{$video->lesson->title}}
                                </span>
                            </td>
                            <td>
                                <span>
                                    {{$video->status->name}}
                                </span>
                            </td>
                            <td>
                                <span>
                                    {{$video->date_of_publication}}
                                </span>
                            </td>
                            <td>
                                <span class="d-flex align-items-center">

                                    {{-- <a class="solid-black-btn btn mx-2 publish-btn" style="text-align: center;" @click="getVideo('{{$video->id}}')">عرض </a> --}}

                                    {{-- <a class="publish-btn" @click="getVideo('{{$video->id}}') ><i role="button" class="fa-solid fa-eye fs-3"></i></a> --}}

                                    <a href="{{route('videos.edit',$video->id)}}"><i role="button" class="fa-solid fa-pen-to-square fs-3 mx-3"></i></a>
                                    <a href="{{route('videos.delete',$video->id)}}">
                                        <i role="button" class="fa-solid fa-trash fs-3 want_delete_btn"></i>
                                    </a>
                                </span>
                            </td>

                        </tr>
                        @endforeach

                    </tbody>
                    <!--end::Table body-->
                </table>
                <!--end::Table-->
            </div>
            <!--end::Table container-->
        </div>
        <!--begin::Body-->
    </div>

<!--end::Tables Widget 12-->
	<!--start pagination-->

    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <p class="fw-bold fs-3">
                عرض عناصر من
                <span>1</span>
                الي
                <span>10</span>
                من اجمالي
                <span>160</span>
                عنصر
            </p>
            <div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                        <a class="page-link"  href="#" aria-label="Previous"
                        style="background: #000;"
                        >
                            <span class="">
                                <i class="fa-solid fa-chevron-right text-white fs-3"></i>
                            </span>
                        </a>
                        </li>
                        <li class="page-item"><a style="background: #eee;" class="page-link fs-3" href="#">1</a></li>
                        <li class="page-item"><a style="background: #eee;" class="page-link fs-3" href="#">2</a></li>
                        <li class="page-item"><a style="background: #eee;" class="page-link active-pagination fs-3" href="#">3</a></li>
                        <li class="page-item"><a style="background: #eee;" class="page-link fs-3" href="#">4</a></li>
                        <li class="page-item"><a style="background: #eee;" class="page-link fs-3" href="#">5</a></li>
                        <li class="page-item">
                        <a class="page-link" style="background: #000;"  href="#" aria-label="Next">
                            <span  class="d-flex align-items-center justify-content-center rounded-circle">
                                <i class="fa-solid fa-chevron-left fs-3 text-white"></i>
                            </span>
                        </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <!--End pagination-->
</div>


@endsection
@section('js')
@if(env('APP_ENV') == 'local')
        <script src="{{asset('helper/js/vue-dev.js')}}"></script>
    @else
        <script src="{{asset('helper/js/vue-prod.min.js')}}"></script>
    @endif
<script>
    app = new Vue({
        el: '#app-1',
        data: {
            book_title: '',
            books: [],
        },

        methods: {
            getVideo: function(video_id){

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': '{{csrf_token()}}',
                    }
                });

                $.ajax ({
                    type: 'POST',
                    url: '{{ route('videos.show', '')}}/' + video_id,
                    success: function (res) {
                        app.books = res;
                        app.book_title = res.title;
                        $('#pathView').modal('show');
                        console.log(res);

                    },
                    error: function(err){console.log('Error:', err);}
                });

            },


        }
    });
</script>

    <script>
  $(document).ready(function() {
    $('#pathView').modal();
  });
</script>
@endsection

