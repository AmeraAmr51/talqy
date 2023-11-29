@extends('layouts.teacher')
@section('head')
		<link href="{{asset('metronic/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />

		<link href="{{asset('metronic/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('metronic/css/styleb.css')}}" rel="stylesheet" type="text/css" />

    <style>
        .btn-check:active+.btn.btn-active-light-primary,
         .btn-check:checked+.btn.btn-active-light-primary,
          .btn.btn-active-light-primary.active,
           .btn.btn-active-light-primary.show,
            .btn.btn-active-light-primary:active:not(.btn-active),
             .btn.btn-active-light-primary:focus:not(.btn-active),
              .btn.btn-active-light-primary:hover:not(.btn-active),

               .show>.btn.btn-active-light-primary {
        color: white;
       background-color:black !important;
       }
       .btn.btn-active-light-primary:hover:not(.btn-active) .h2 {
  color: white !important;
}

.btn.btn-active-light-primary:hover:not(.btn-active) .rounded-circle {
  border-color: white !important; /* Assuming rounded-circle has a border */

}
       .border-white
       {
        border: 1px solid #fff !important;
       }

        .stepper.stepper-item.current .stepper-title {
    color: red !important;
        }
    .current .c,
    .completed .c {
        background-color: black !important;
        color:white !important;
    }
    @media (min-width: 768px){
.col-md-3 {
    flex: 0 0 auto;
    width: 25%;
}}
    </style>


@endsection
@section('content')

<!--begin::Main-->
<div class="app-main flex-column flex-row-fluid" id="kt_app_main">



    <h2 class="mx-2 h1 my-5 container">أضافة اختبار جديد</h2>


    <!--satrt line of process-->

    <div class="container" >
        <div class="card"  id="app-1">
            <!--begin::Card body-->
            <div class="card-body">
                <!--begin::Stepper-->
                <div class="stepper stepper-links d-flex flex-column pt-15" id="kt_create_account_stepper">
                    <!--begin::Nav-->
                    <div class="d-flex align-items-center justify-content-between ">
                        <div class="text-center stepper-item current" data-kt-stepper-element="nav">
                            <div class="c rounded-circle d-flex  mt-5 align-items-center justify-content-center" style=" height: 35px;width: 35px;">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <p class="m-0 mt-1 stepper-title">الكتاب</p>
                        </div>
                        <div class="bg-gray" style="height: 2px;flex-grow: 1;"></div>
                        <div class="text-center stepper-item" data-kt-stepper-element="nav">
                            <div class="c rounded-circle d-flex mt-5 align-items-center justify-content-center" style="background: #eee; height: 35px;width: 35px;">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <p class="m-0 mt-1 stepper-title">الابواب</p>
                        </div>
                        <div class="bg-gray" style="height: 2px;flex-grow: 1;"></div>
                        <div class="text-center stepper-item" data-kt-stepper-element="nav">
                            <div class="c rounded-circle d-flex mt-5 align-items-center justify-content-center" style="background: #eee; height: 35px;width: 35px;">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <p class="m-0 mt-1 stepper-title" >الفصل</p>
                        </div>
                        <div class="bg-gray" style="height: 2px;flex-grow: 1;"></div>
                        <div class="text-center stepper-item" data-kt-stepper-element="nav" >
                            <div class="c rounded-circle d-flex mt-5 align-items-center justify-content-center" style="background: #eee; height: 35px;width: 35px;">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <p class="m-0 mt-1 stepper-title">الدرس</p>
                        </div>
                        <div class="bg-gray" style="height: 2px;flex-grow: 1;"></div>
                        <div class="text-center stepper-item" data-kt-stepper-element="nav">
                            <div class="c rounded-circle d-flex mt-5 align-items-center justify-content-center" style="background: #eee; height: 35px;width: 35px;">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <p class="m-0 mt-1 stepper-title">تحميل</p>
                        </div>
                        <div class="bg-gray" style="height: 2px;flex-grow: 1;"></div>
                        <div class="text-center stepper-item" data-kt-stepper-element="nav">
                            <div class="c rounded-circle d-flex mt-5 align-items-center justify-content-center" style="background: #eee; height: 35px;width: 35px;">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <p class="m-0 mt-1 stepper-title">مراجعة</p>
                        </div>
                        <div class="bg-gray" style="height: 2px;flex-grow: 1;"></div>
                        <div class="text-center stepper-item" data-kt-stepper-element="nav">
                            <div class="c rounded-circle d-flex mt-5 align-items-center justify-content-center" style="background: #eee; height: 35px;width: 35px;">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <p class="m-0 mt-1 stepper-title">نشر</p>
                        </div>
                    </div>
                    <!--end::Nav-->
                    <!--begin::Form-->

                    <form class="pt-15 pb-10" novalidate="novalidate" id="kt_create_account_form"  >
                        <!--begin::Step 1-->
                        <div class="current" data-kt-stepper-element="content">
                            <!--begin::Wrapper-->

                            <div class="w-100">
                                <div class="mt-5">
                                    <div class="container">
                                        <div class="text-center" style="margin-bottom:60px;">
                                            <h3 class="h1">اختر الكتاب</h3>
									        <p class="m-0 fs-3 text-gray-500">اختر الكتاب لأدخال الاختبار عليه</p>
                                        </div>

                                        <div class="row gy-5 mt-5 text-center">

                                            <div class="row">
                                                <!-- Loop through each book -->
                                                @foreach($books as $book)
                                                <!--begin::Col-->
                                                <div class="col-md-3 p-2">
                                                    <!--begin::Option-->
                                                    <input type="radio" class="btn-check" name="book_id" value="{{ $book->id }}" id="book_{{$book->id}}" v-model="book_id" @change="getParts">
                                                    <label class="btn btn-outline btn-active-light-primary"
                                                           :class="{'selected': book_id == {{ $book->id }} }"
                                                           style="width:100%; box-shadow: 0px 0px 5px 0px #aaa !important; border-radius:10px;"
                                                           for="book_{{ $book->id}}">
                                                        <!--begin::Info-->
                                                        <div style="width: 80px; height: 80px;" :class="{'border-black': book_id != {{ $book->id }}, 'border-white': book_id == {{ $book->id }}}" class="rounded-circle  mx-auto d-flex align-items-center justify-content-center">
                                                            <span>{{ $book->id }} </span>
                                                        </div>
                                                        <div>
                                                            <h4 class="h2 mt-3" style="font-size: 15px;" :style="{ color: book_id == {{ $book->id }} ? 'white' : 'black' }">{{ $book->title }}</h4>
                                                        </div>
                                                        <!--end::Info-->
                                                    </label>
                                                    <!--end::Option-->
                                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                                </div>
                                                <!--end::Col-->
                                            @endforeach
                                              </div>

                                            <input type="hidden" name="book_id" v-model="book_id">
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Step 1-->
                        <!--begin::Step 2-->
                        <div data-kt-stepper-element="content">
                            <!--begin::Wrapper-->
                            <div class="w-100">
                                <div class="mt-5">
                                    <div class="container">
                                        <div class="text-center">
                                            <h3 class="h1">اختر الباب</h3>
                                            <p class="m-0 fs-3 text-gray-500">اختر الباب لأدخال الاختبار عليه</p>
                                        </div>
                                        <div class="row gy-5 mt-5 text-center">
                                            <div class="col-md-3 p-2" v-for="i in part_data" :key="i.id">
                                                    <input type="radio" class="btn-check" name="part_id" :value="i.id" :id="'part_' + i.id" v-model="part_id" @change="getChapters">
                                                    <label class="btn btn-outline btn-active-light-primary" :class="{'selected': {{$exam-> part_id}} == i.id}" style="width:100%; box-shadow: 0px 0px 5px 0px #aaa !important; border-radius:10px;" :for="'part_' + i.id">
                                                      <!--begin::Info-->
                                                      <div style="width: 80px; height: 80px;" :class="{'border-black': {{$exam-> part_id}} != i.id, 'border-white': {{$exam-> part_id}} == i.id}" class="rounded-circle  mx-auto d-flex align-items-center justify-content-center">
                                                        <span>@{{ i.id }} </span>
                                                      </div>
                                                      <div>
                                                        <h4 class="h2 mt-3" style="font-size: 15px;" :style="{ color: {{$exam-> part_id}} == i.id ? 'white' : 'black' }">@{{i.title}}</h4>
                                                      </div>
                                                      <!--end::Info-->
                                                    </label>
                                            </div>

                                        </div>

                                    </div>
                                </div>

                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Step 2-->
                        <!--begin::Step 3-->
                        <div data-kt-stepper-element="content">
                            <!--begin::Wrapper-->
                            <div class="w-100">
                                <div class="mt-5">
                                    <div class="container">
                                        <div class="text-center">
                                            <h3 class="h1">اختر الفصل</h3>
                                            <p class="m-0 fs-3 text-gray-500">اختر الفصل لأدخال الاختبار عليه</p>
                                        </div>
                                        <div class="row gy-5 mt-5 text-center">
                                            <div class="col-md-3 p-2" v-for="i in chapter_data" :key="i.id">

                                                    <input type="radio" class="btn-check" name="chapter_id" :value="i.id" :id="'chapter_' + i.id" v-model="chapter_id" @change="getLessons">
                                                    <label class="btn btn-outline btn-active-light-primary" :class="{'selected': {{$exam-> chapter_id}} == i.id}" style="width:100%; box-shadow: 0px 0px 5px 0px #aaa !important; border-radius:10px;" :for="'chapter_' + i.id">
                                                      <!--begin::Info-->
                                                      <div style="width: 80px; height: 80px;" :class="{'border-black': {{$exam-> chapter_id}} != i.id, 'border-white': {{$exam-> chapter_id}} == i.id}" class="rounded-circle  mx-auto d-flex align-items-center justify-content-center">
                                                        <span>@{{ i.id }} </span>
                                                      </div>
                                                      <div>
                                                        <h4 class="h2 mt-3" style="font-size: 15px;" :style="{ color: {{$exam-> chapter_id}} == i.id ? 'white' : 'black' }">@{{ i.title }}</h4>
                                                      </div>
                                                      <!--end::Info-->
                                                    </label>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Step 3-->
                        <!--begin::Step 4-->
                        <div data-kt-stepper-element="content">
                            <!--begin::Wrapper-->
                            <div class="w-100">
                                	<!--start choose subject-->
						<div class="mt-5">
							<div class="container">
								<div class="text-center">
                                    <h3 class="h1">اختر الدرس</h3>
                                    <p class="m-0 fs-3 text-gray-500">اختر الدرس لإدخال الاختبار عليه</p>
                                </div>
							</div>
						</div>
						<!--End choose Subject-->
                        <!--start content-->
                        <div class="container my-5">
                            <div class="d-flex align-items-center justify-content-between">
                                <h3>اسم الفصل</h3>

                            </div>
                            <div class="row">
                                <div class="col-md-6" v-for="i in lesson_data" >
                                    <div class="p-5" style="border-bottom: 2px solid #EEE;">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <p class="m-0 fs-4">@{{i.title}}</p>
                                            <input  type="radio" class="fs-3" id="exampleSelectd4"   :value="i.id" v-model="lesson_id"  name="lesson_id" role="button"/>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--End content-->

                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Step 4-->
                        <!--begin::Step 5-->
                        <div data-kt-stepper-element="content">
                            <!--begin::Wrapper-->
                            <div class="w-100">


                        <div class="container">
                            <div class="text-center" style="margin-bottom:90px;">
                                <h3 class="h1"> الاختبارات</h3>
                                <p class="m-0 fs-3 text-gray-500"></p>
                            </div>
                            <div class="row gy-3 align-items-center" style="margin-bottom:90px;">
                                <div class="col-md-6">
                                    <div>
                                        <p class="m-0 fs-5 fw-bold">اسم الاختبار</p>
                                        <input type="text" placeholder="اسم الاختبار" name="title" id="title"  v-model="title"  class="form-control"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div>
                                        <p class="m-0 fs-5 fw-bold">مدة الاختبار</p>
                                        <input type="text" placeholder="مدة الاختبار" name="duration" id="duration"  v-model="duration"  class="form-control"/>
                                    </div>
                                </div>

                            </div>
                        </div>
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Step 5-->
                         <!--begin::Step 6-->
                         <div data-kt-stepper-element="content">
                            <!--begin::Wrapper-->
                            <div class="w-100">
                                <div class="container mt-5">
                                    <h2 class="h1"> الاختبارات</h2>
                                    <div class="row gy-5">
                                        <div class="col-md-6">
                                            <div class="border rounded d-flex align-items-center justify-content-between ">
                                                <div class="d-flex align-items-center p-5">
                                                    <img src="{{asset('admin/media/teacher dashboard/files.png')}}" alt="" style="width: 35px;height: 35px;" class="rounded">
                                                    <div>
                                                        <h3 class="m-0 fw-bold mx-3 h2"> @{{title}}</h3>
                                                        <p class="m-0 mx-3 text-gray-500" style="font-size: 14px;">
                                                            <i class="fa fa-clock"></i>
                                                            <span class="mx-3">{{$exam->created_at}}</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <p class="m-0 px-5">
                                                    <a href="{{route('exam.delete',$exam->id)}}"> <i role="button" class="fa-solid fa-trash-can fs-3 want_delete_btn"></i></a>
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Step 6-->

                        <!--begin::Actions-->
                        <div class="d-flex flex-stack pt-10">
                            <!--begin::Wrapper-->
                            <div class="mr-2">
                                <button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">السابق</button>
                            </div>
                            <!--end::Wrapper-->
                            <!--begin::Wrapper-->
                            <div>
                                <button type="button" class="btn btn-lg btn-primary me-3" data-kt-stepper-action="submit" @click.prevent="update" >
                                    <span class="indicator-label">تعديل</span>
                                    <span class="indicator-progress">انتظر من فضلك...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <a type="button" class="regular-black-btn btn mx-2" href="{{route('exam.show')}}" >حفظ كمسودة </a>
                                <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">التالي </button>
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Stepper-->
            </div>
            <!--end::Card body-->
        </div>
    </div>




</div>
<!--end:::Main-->

@endsection
@section('js')
<!--begin::Javascript-->
<script>var hostUrl = "assets/";</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="{{asset('metronic/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('metronic/js/scripts.bundle.js')}}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<script src="{{asset('metronic/plugins/custom/datatables/datatables.bundle.js')}}"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
{{-- <script src="{{asset('metronic/js/custom/utilities/modals/create-account.js')}}"></script> --}}
<script src="{{asset('metronic/js/widgets.bundle.js')}}"></script>
<script src="{{asset('metronic/js/custom/widgets.js')}}"></script>
<script src="{{asset('metronic/js/custom/apps/chat/chat.js')}}"></script>
<script src="{{asset('metronic/js/custom/utilities/modals/upgrade-plan.js')}}"></script>

<script src="{{asset('metronic/js/custom/utilities/modals/users-search.js')}}"></script>
{{-- <script src="{{asset('admin/js/dashboard/chooseBook.js')}}"></script> --}}
<!--end::Custom Javascript-->

@if(env('APP_ENV') == 'local')
<script src="{{asset('helper/js/vue-dev.js')}}"></script>
@else
<script src="{{asset('helper/js/vue-prod.min.js')}}"></script>
@endif

<script>
    var KTCreateAccount = function() {
	var e, t, i, o, a, r, s = [];
    var app = new Vue({
        el: '#app-1',
        data: {
            part_data: [],
            chapter_data: [],
            lesson_data: [],
            book_id:'{{$exam->book_id}}',
            part_id:'{{$exam->part_id}}',
            chapter_id:'{{$exam->chapter_id}}',
            lesson_id:'{{$exam->lesson_id}}',
            title:'{{$exam->title}}',
            duration:'{{$exam->duration}}',

    },
mounted:function() {
    this.getParts();
    this.getChapters();
    this.getLessons();
},
    methods:{



    update: function() {
    var formData = new FormData();
    formData.append('title', this.title);
    formData.append('duration', this.duration);
    formData.append('book_id', this.book_id);
    formData.append('part_id', this.part_id);
    formData.append('chapter_id', this.chapter_id);
    formData.append('lesson_id', this.lesson_id);


    $.ajax({
      type: 'POST',
      processData: false,
      contentType: false,
      data: formData,
      url: '{{ route('exam.update', ['id' => $exam->id]) }}',
      success: function(response) {
                  // Show success alert
                  new swal({
                    text: "تم تعديل الاختبار بنجاح !",
                    type: "success",
                    icon : "success",
                    buttonsStyling: false,
                    confirmButtonText: "حسنا !",
                    confirmButtonClass: "btn font-weight-bold btn-light"
                  }).then(function () {
                    // Redirect to index page
                    window.location.href = "{{ route('exam.show') }}";
                  });
                },
                error: function(xhr, status, error) {
                  // Show error alert
                  new swal({
                    text: "حدث خطأ اثناء التعديل !",
                    type: "error",
                    icon : "error",
                    buttonsStyling: false,
                    confirmButtonText: "حسنا !",
                    confirmButtonClass: "btn font-weight-bold btn-light"
                  }).then(function () {
                    KTUtil.scrollTop();
                  });
                }
    });
  },


        getParts: async function() {
             this.part_data = await this.fetchLibrary(this.book_id, 'part');
             console.log('Part Data:', this.part_data);
            $("#exampleSelectd3").removeAttr("disabled");
        },
        getChapters:async function(){
            this.chapter_data = await this.fetchLibrary(this.part_id, 'chapter');
            console.log('Chapter Data:', this.chapter_data);
            $("#exampleSelectd4").removeAttr("disabled");
        },
        getLessons:async function(){
            this.lesson_data = await this.fetchLibrary(this.chapter_id, 'lesson');
            $("#exampleSelectd5").removeAttr("disabled");
        },

        fetchLibrary: function(parent_topic_id, topic_required){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': '{{csrf_token()}}'
                }
            });
            return $.ajax ({
                type: 'POST',
                url: '{{route('library.library')}}',
                data: {
                    parent_topic_id,
                    topic_required,
                },
            });
        }
    },
});
	return {
		init: function() {
			(e = document.querySelector("#kt_modal_create_account")) && new bootstrap.Modal(e),
            (t = document.querySelector("#kt_create_account_stepper")) && (i = t.querySelector("#kt_create_account_form"),
            o = t.querySelector('[data-kt-stepper-action="submit"]'),
            a = t.querySelector('[data-kt-stepper-action="next"]'),
             (r = new KTStepper(t)).on("kt.stepper.changed", (function(e) {
				6 === r.getCurrentStepIndex() ? (o.classList.remove("d-none"),
                 o.classList.add("d-inline-block"),
                  a.classList.add("d-none")) : 7 === r.getCurrentStepIndex() ? (o.classList.add("d-none"),
                  a.classList.add("d-none")) : (o.classList.remove("d-inline-block"),
                  o.classList.remove("d-none"), a.classList.remove("d-none"))
			})), r.on("kt.stepper.next", (function(e) {
				console.log("stepper.next");
				var t = s[e.getCurrentStepIndex() - 1];
				t ? t.validate().then((function(t) {
					console.log("validated!"), "Valid" == t ? (e.goNext(), KTUtil.scrollTop()) : Swal.fire({
						text: "Sorry, looks like there are some errors detected, please try again.",
						icon: "error",
						buttonsStyling: !1,
						confirmButtonText: "Ok, got it!",
						customClass: {
							confirmButton: "btn btn-light"
						}
					}).then((function() {
						KTUtil.scrollTop()
					}))
				})) : (e.goNext(), KTUtil.scrollTop())
			})), r.on("kt.stepper.previous", (function(e) {
				console.log("stepper.previous"), e.goPrevious(), KTUtil.scrollTop()
			})), s.push(FormValidation.formValidation(i, {
				fields: {
 book_id: {
             validators : {
               notEmpty : {
                 message : "الكتاب مطلوب"
               }
             }

         },
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger,
					bootstrap: new FormValidation.plugins.Bootstrap5({
						rowSelector: ".fv-row",
						eleInvalidClass: "",
						eleValidClass: ""
					})
				}
            })), s.push(FormValidation.formValidation(i, {
				fields: {

				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger,
					bootstrap: new FormValidation.plugins.Bootstrap5({
						rowSelector: ".fv-row",
						eleInvalidClass: "",
						eleValidClass: ""
					})
				}
            })), s.push(FormValidation.formValidation(i, {
				fields: {

				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger,
					bootstrap: new FormValidation.plugins.Bootstrap5({
						rowSelector: ".fv-row",
						eleInvalidClass: "",
						eleValidClass: ""
					})
				}
			})), s.push(FormValidation.formValidation(i, {
				fields: {

				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger,
					bootstrap: new FormValidation.plugins.Bootstrap5({
						rowSelector: ".fv-row",
						eleInvalidClass: "",
						eleValidClass: ""
					})
				}
			})), s.push(FormValidation.formValidation(i, {
				fields: {

				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger,
					bootstrap: new FormValidation.plugins.Bootstrap5({
						rowSelector: ".fv-row",
						eleInvalidClass: "",
						eleValidClass: ""
					})
				}
			})), s.push(FormValidation.formValidation(i, {
				fields: {

				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger,
					bootstrap: new FormValidation.plugins.Bootstrap5({
						rowSelector: ".fv-row",
						eleInvalidClass: "",
						eleValidClass: ""
					})
				}

            })), o.addEventListener("click", (function(e) {
				s[3].validate().then((function(t) {
					console.log("validated!"), "Valid" == t ? (e.preventDefault(), o.disabled = !0, o.setAttribute("data-kt-indicator", "on"), setTimeout((function() {
						o.removeAttribute("data-kt-indicator"), o.disabled = !1, r.goNext()
					}), 2e3)) : Swal.fire({
						text: "Sorry, looks like there are some errors detected, please try again.",
						icon: "error",
						buttonsStyling: !1,
						confirmButtonText: "Ok, got it!",
						customClass: {
							confirmButton: "btn btn-light"
						}
					}).then((function() {
						KTUtil.scrollTop()
					}))
				}))
			})), $(i.querySelector('[name="card_expiry_month"]')).on("change", (function() {
				s[3].revalidateField("card_expiry_month")
			})), $(i.querySelector('[name="card_expiry_year"]')).on("change", (function() {
				s[3].revalidateField("card_expiry_year")
			})), $(i.querySelector('[name="business_type"]')).on("change", (function() {
				s[2].revalidateField("business_type")
			})))
		}
	}
}();
KTUtil.onDOMContentLoaded((function() {
	KTCreateAccount.init()
}));

    </script>


   @endsection
