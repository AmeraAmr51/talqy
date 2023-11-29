
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
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif

<div class="container">
    <div class="d-flex align-items-center justify-content-between p-5" >
        <h2 class="h1 mx-3">جميع الكتب</h2>
        <div class="d-flex align-items-center">
            <a class="d-block regular-black-btn btn" style="width: 150px;" href="{{route('library.create')}}">
                <i class="fa-solid fa-plus"></i>
                أضف كتاب جديد
            </a>
        </div>
    </div>
</div>
    <!--begin::Tables Widget 12-->
        <div class="custom-border border-bottom-0 d-flex align-items-center justify-content-between p-4">
            <p class="m-0 fw-bold fs-4">
              المكتبة
            </p>

        </div>
        <div class="card mb-5 mb-xl-8" id="app-1">

            <!--begin::Body-->
            <div class="card-body p-0">
                <!--begin::Table container-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table align-middle gs-0 gy-4">
                        <!--begin::Table head-->
                        <thead>
                            <tr class="fw-bold  text-muted table-header-color">
                                <th class="min-w-125px"> الكتاب</th>
                                <th class="min-w-300px">المعلم</th>
                                <th class="min-w-100px"> </th>
                                <th class="min-w-100px"> </th>
                                <th class="min-w-100px"> </th>
                            </tr>
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody>
                            @foreach($books as $book)
                            @php
                            $teacher = \App\Models\Teacher::find($book->teacher_id);
                            @endphp
                            <tr class="p-5 mx-5">
                                <td>
                                    <span class="d-flex align-items-center">
                                        <div style="width: 40px;height: 40px;" class="rounded-circle d-flex justify-content-center align-items-center border">
                                            <i class="fa-solid fa-book fs-3"></i>
                                        </div>
                                        <span class="m-0 mx-3">{{$book->title}}</span>
                                    </span>
                                </td>
                                <td>
                                    <span>{{$teacher->name}}</span>
                                </td>
                                <td>
                                    <a class="solid-black-btn btn mx-2 publish-btn" style="text-align: center;" @click="getBook('{{$book->id}}')">عرض </a>
                                </td>
                                <td>
                                    <a class="solid-black-btn btn mx-2 publish-btn" style="text-align: center;" href="{{route('library.edit',$book->id)}}" >تعديل </a>
                                </td>
                                <td>
                                    <a class="solid-black-btn btn mx-2 publish-btn" style="text-align: center;" href="{{route('library.delete',$book->id)}}" >حذف </a>
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

            <div class="modal fade" id="pathView" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel"> @{{ book_title }}</h5>
                            <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                                <i class="ki-duotone ki-cross fs-2x"><span class="path1"></span><span class="path2"></span></i>
                            </div>
                        </div>
                        <div class="modal-body" style="height: 300px;">
                            <ul>
                                <li v-for="(part) in books.parts">
                                    <span class="menu-bullet" style="margin-left:10px;">
                                        <i class="fa-solid fa-book-open fs-5"></i>
                                    </span>
                                    @{{ part.title }}
                                    <ul>
                                        <li v-for="chapter in part.chapters">
                                            <span class="menu-icon" style="margin-left:10px;">
                                                <i class="fa-solid fa-file-lines fs-3"></i>
                                            </span>
                                            @{{ chapter.title }}
                                            <ul>
                                                <li v-for="lesson in chapter.lessons">
                                                    <span class="menu-icon" style="margin-left:10px;">
                                                        <i class="fa-solid fa-clipboard-question fs-3"></i>
                                                    </span>
                                                    @{{ lesson.title }}
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!--end::Tables Widget 12-->
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
            getBook: function(book_id){

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': '{{csrf_token()}}',
                    }
                });

                $.ajax ({
                    type: 'POST',
                    url: '{{ route('library.show', '')}}/' + book_id,
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
