@extends('layouts.teacher')
@section('head')
		<link href="{{asset('metronic/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />

		<link href="{{asset('metronic/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('metronic/css/styleb.css')}}" rel="stylesheet" type="text/css" />
        {{-- <style>
            .card {
                border: 1px solid #c9c6c6 !important;
                border-radius: 10px !important;
            }
            li{
                list-style: none;
                font-size: 16px;
            }
            label {
                font-size: 20px;
                font-weight: bold;
            }
            .table:not(.table-bordered) tr, .table:not(.table-bordered) th, .table:not(.table-bordered) td {
                font-weight: 100;
                font-size: 15px;
            }
            .fs-8 {
                        font-size: 16px !important;
           }
           .border-gray-300 {
    border-color: #b4b6bf !important;
}
            @media (min-width: 992px){
          [data-kt-app-sidebar-fixed=true] .app-wrapper {

          margin-right: 137px;
        }}
        </style> --}}
@endsection
@section('content')

			<!--begin::Main-->
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">



                <h2 class="mx-2 h1 my-5">أضافة فيديو جديد</h2>



                <!--satrt line of process-->

                <div class="container">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="text-center">
                            <div class="rounded-circle d-flex active-added mt-5 align-items-center justify-content-center" style="height: 35px;width: 35px;background: #eee;">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <p class="m-0 mt-1">الكتاب</p>
                        </div>
                        <div class="bg-gray active-added" style="height: 2px;flex-grow: 1;"></div>
                        <div class="text-center">
                            <div class="rounded-circle active-added d-flex mt-5 align-items-center justify-content-center" style="height: 35px;width: 35px;background: #eee;">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <p class="m-0 mt-1">الابواب</p>
                        </div>
                        <div  class="bg-gray active-added" style="height: 2px;flex-grow: 1;"></div>
                        <div class="text-center">
                            <div class="rounded-circle active-added d-flex mt-5 align-items-center justify-content-center" style="height: 35px;width: 35px;background: #eee;">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <p class="m-0 mt-1">الفصل</p>
                        </div>
                        <div  class="bg-gray active-added" style="height: 2px;flex-grow: 1;"></div>
                        <div class="text-center">
                            <div class="rounded-circle active-added d-flex mt-5 align-items-center justify-content-center" style="height: 35px;width: 35px;background: #eee;">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <p class="m-0 mt-1">الدرس</p>
                        </div>
                        <div  class="bg-gray" style="height: 2px;flex-grow: 1;"></div>
                        <div class="text-center">
                            <div class="rounded-circle d-flex mt-5 align-items-center justify-content-center" style="height: 35px;width: 35px;background: #eee;">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <p class="m-0 mt-1">تحميل</p>
                        </div>
                        <div  class="bg-gray" style="height: 2px;flex-grow: 1;"></div>
                        <div class="text-center">
                            <div class="rounded-circle d-flex mt-5 align-items-center justify-content-center" style="height: 35px;width: 35px;background: #eee;">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <p class="m-0 mt-1">مراجعة</p>
                        </div>
                        <div class="bg-gray" style="height: 2px;flex-grow: 1;"></div>
                        <div class="text-center">
                            <div class="rounded-circle d-flex mt-5 align-items-center justify-content-center" style="height: 35px;width: 35px;background: #eee;">
                                <i class="fa-solid fa-check"></i>
                            </div>
                            <p class="m-0 mt-1">نشر</p>
                        </div>
                    </div>
                </div>

                <!--End line of process-->


                <!--start choose subject-->
                <div class="mt-5">
                    <div class="container">
                        <div class="text-center">
                            <h3 class="h1">اختر الدرس</h3>
                            <p class="m-0 fs-3 text-gray-500">قم باختيار الدرس لتحميل الفيديو عليه</p>
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
                        <div class="col-md-6">
                            <div class="p-5" style="border-bottom: 2px solid #EEE;">
                                <div class="d-flex align-items-center justify-content-between">
                                    <label class="m-0 fs-4" for="input_1">1 درس </label>
                                    <input  name="subjectSelect" value="1 درس " type="checkbox" class="fs-3 video_input_lesson" id="input_1" role="button"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-5" style="border-bottom: 2px solid #EEE;">
                                <div class="d-flex align-items-center justify-content-between">
                                    <label class="m-0 fs-4" for="input_2">2 درس </label>
                                    <input name="subjectSelect" value="2 درس " type="checkbox" class="fs-3 video_input_lesson" id="input_2" role="button"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-5" style="border-bottom: 2px solid #EEE;">
                                <div class="d-flex align-items-center justify-content-between">
                                    <label class="m-0 fs-4" for="input_3">3 درس </label>
                                    <input name="subjectSelect" value="3 درس " type="checkbox" class="fs-3 video_input_lesson" id="input_3" role="button"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-5" style="border-bottom: 2px solid #EEE;">
                                <div class="d-flex align-items-center justify-content-between">
                                    <label class="m-0 fs-4" for="input_4">4 درس </label>
                                    <input name="subjectSelect" value="4 درس " type="checkbox" class="fs-3 video_input_lesson" id="input_4" role="button"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-5" style="border-bottom: 2px solid #EEE;">
                                <div class="d-flex align-items-center justify-content-between">
                                    <label class="m-0 fs-4" for="input_5">5 درس </label>
                                    <input name="subjectSelect" value="5 درس " type="checkbox" class="fs-3 video_input_lesson" id="input_5" role="button"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="p-5" style="border-bottom: 2px solid #EEE;">
                                <div class="d-flex align-items-center justify-content-between">
                                    <label class="m-0 fs-4" for="input_6">6 درس </label>
                                    <input name="subjectSelect" value="6 درس " type="checkbox" class="fs-3 video_input_lesson" id="input_6" role="button"/>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!--End content-->




                <!--start controll button-->
                <div class="container my-5">
                    <div class="mt-5 d-flex align-items-center justify-content-end ">
                        {{-- <a class="regular-black-btn btn mx-2" href="allVideos.html">حفظ كمسودة</a> --}}
                        <a class="solid-black-btn btn mx-2" href="{{route('videos.uploadVideo')}}">التالي</a>
                    </div>
                </div>
                <!--End controll button-->

















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
		<script src="{{asset('metronic/js/custom/utilities/modals/create-account.js')}}"></script>
		<script src="{{asset('metronic/js/widgets.bundle.js')}}"></script>
		<script src="{{asset('metronic/js/custom/widgets.js')}}"></script>
		<script src="{{asset('metronic/js/custom/apps/chat/chat.js')}}"></script>
		<script src="{{asset('metronic/js/custom/utilities/modals/upgrade-plan.js')}}"></script>

		<script src="{{asset('metronic/js/custom/utilities/modals/users-search.js')}}"></script>
		<!--end::Custom Javascript-->
        @if(env('APP_ENV') == 'local')
        <script src="{{asset('helper/js/vue-dev.js')}}"></script>
    @else
        <script src="{{asset('helper/js/vue-prod.min.js')}}"></script>
    @endif
        <script>
var KTCreateAccount = function() {
 var el;
 var objectNodeBox;
 var i;
 var o;

 var a;
 var $scope;
 var validators = [];
 var app = new Vue({
                    el: '#app-1',
                    data: {
                        teacher_id: '{{ Auth::guard('teacher')->user()->id }}',
                        book_id: '',
                        book_title: '',
                        part_title: '',
                        chapter_title: '',
                        lesson_title: '',
                        parts: [],
                        part_index: '',
                        chapters: [],
                        chapter_index: '',
                        lessons: [],
                        lesson_index: '',

                    },
                    methods: {
                        store: function(){

                            $.ajaxSetup({
                                headers: {
                                    'X-CSRF-TOKEN': '{{csrf_token()}}',
                                }
                            });
                            console.log(this.$data);
                            $.ajax ({
                                type: 'POST',
                                data: {
                                    teacher_id: app.teacher_id,
                                    title: app.book_title,
                                    parts: app.parts,
                                    chapters: app.chapters,
                                    lessons: app.lessons,
                                },
                                url: '{{ route('library.store')}}',

                            });

                        },
                        removePart: function(part_index){
                            this.parts.splice(part_index, 1);
                        },
                        removeChapter: function(chapter_index){
                            this.chapters.splice(chapter_index, 1);
                        },
                        removeLesson: function(lesson_index){
                            this.lessons.splice(lesson_index, 1);
                        },
                        addPart: function(){
                            if(this.is_empty(this.part_title, 'اسم الباب مطلوب!')){
                                return;
                            }
                            this.parts.push({
                                title: this.part_title,
                                chapters: []
                            });
                            this.part_title = '';



                        },
                        addChapter: function(){
                            if(this.is_empty(this.chapter_title, 'اسم الفصل مطلوب!')){
                                return;
                            }
                            this.parts[this.part_index].chapters.push({
                                title: this.chapter_title,
                                lessons: []
                            });
                            this.chapters = this.parts[this.part_index].chapters;
                            this.chapter_title = '';
                        },

                        addLesson: function(){
                            if(this.is_empty(this.lesson_title, 'اسم الدرس مطلوب!')){
                                return;
                            }
                            this.parts[this.part_index].chapters[this.chapter_index].lessons.push({
                                title: this.lesson_title,
                            });
                            this.lessons = this.parts[this.part_index].chapters[this.chapter_index].lessons;
                            this.lesson_title = '';
                        },

                        is_empty: function(val, err){
    if (Array.isArray(val) && val.length === 0) {
        swal({
            text: "يجب إضافة " + err,
            type: "error",
            buttonsStyling: false,
            confirmButtonText: "حسنًا !",
            confirmButtonClass: "btn font-weight-bold btn-light"
        }).then(function () {
            KTUtil.scrollTop();
        });
        return true;
    } else if(val === '' || val === null){
        swal({
            text: err,
            type: "error",
            buttonsStyling: false,
            confirmButtonText: "حسنًا !",
            confirmButtonClass: "btn font-weight-bold btn-light"
        }).then(function () {
            KTUtil.scrollTop();
        });
        return true;
    }
    return false;
},
                    },
                });

 return {
   init : function init() {
     if (el = document.querySelector("#kt_modal_create_account")) {
       new bootstrap.Modal(el);
     }
     if (objectNodeBox = document.querySelector("#kt_create_account_stepper")) {
       i = objectNodeBox.querySelector("#kt_create_account_form");
       o = objectNodeBox.querySelector('[data-kt-stepper-action="submit"]');
       a = objectNodeBox.querySelector('[data-kt-stepper-action="next"]');
       ($scope = new KTStepper(objectNodeBox)).on("kt.stepper.changed", function(canCreateDiscussions) {
         if (4 === $scope.getCurrentStepIndex()) {
           o.classList.remove("d-none");
           o.classList.add("d-inline-block");
           a.classList.add("d-none");
         } else {
           if (5 === $scope.getCurrentStepIndex()) {
             o.classList.add("d-none");
             a.classList.add("d-none");
           } else {
             o.classList.remove("d-inline-block");
             o.classList.remove("d-none");
             a.classList.remove("d-none");
           }
         }
       });
       $scope.on("kt.stepper.next", function($scope) {
         console.log("stepper.next");
         var validator = validators[$scope.getCurrentStepIndex() - 1];
         if (validator) {
           validator.validate().then(function(canCreateDiscussions) {
             console.log("validated!");
             if ("Valid" == canCreateDiscussions) {
               $scope.goNext();
               KTUtil.scrollTop();
             } else {
               Swal.fire({
                 text : "هناك خطأ !",
                 icon : "error",
                 buttonsStyling : false,
                 confirmButtonText : "حسنا",
                 customClass : {
                   confirmButton : "btn btn-light"
                 }
               }).then(function() {
                 KTUtil.scrollTop();
               });
             }
           });
         } else {
           $scope.goNext();
           KTUtil.scrollTop();
         }
       });
       $scope.on("kt.stepper.previous", function(scope) {
         console.log("stepper.previous");
         scope.goPrevious();
         KTUtil.scrollTop();
       });
       validators.push(FormValidation.formValidation(i, {
         fields : {
           book_title: {
             validators : {
               notEmpty : {
                 message : "الكتاب مطلوب"
               }
             }

         },


          },
         plugins : {
           trigger : new FormValidation.plugins.Trigger,
           bootstrap : new FormValidation.plugins.Bootstrap5({
             rowSelector : ".fv-row",
             eleInvalidClass : "",
             eleValidClass : ""
           })
         }
       }));
       validators.push(FormValidation.formValidation(i, {
         fields : {


        },

         plugins : {
           trigger : new FormValidation.plugins.Trigger,
           bootstrap : new FormValidation.plugins.Bootstrap5({
             rowSelector : ".fv-row",
             eleInvalidClass : "",
             eleValidClass : ""
           })
         }
       }));
       validators.push(FormValidation.formValidation(i, {
         fields : {

         },
         plugins : {
           trigger : new FormValidation.plugins.Trigger,
           bootstrap : new FormValidation.plugins.Bootstrap5({
             rowSelector : ".fv-row",
             eleInvalidClass : "",
             eleValidClass : ""
           })
         }
       }));
       validators.push(FormValidation.formValidation(i, {
         fields : {

             },
         plugins : {
           trigger : new FormValidation.plugins.Trigger,
           bootstrap : new FormValidation.plugins.Bootstrap5({
             rowSelector : ".fv-row",
             eleInvalidClass : "",
             eleValidClass : ""
           })
         }
       }));

    o.addEventListener("click", function(event) {
        if (validators && validators[3] && validators[3].validate) {
        validators[3].validate().then(function(canCreateDiscussions) {
          console.log("validated!");
          if ("Valid" == canCreateDiscussions) {
              // Perform the AJAX request to store the data
              $.ajaxSetup({
                headers: {
                  'X-CSRF-TOKEN': '{{csrf_token()}}',
                }
              });

              $.ajax({
                type: 'POST',
                data: {
                  teacher_id: app.teacher_id,
                  title: app.book_title,
                  parts: app.parts,
                  chapters: app.chapters,
                  lessons: app.lessons,
                },
                url: '{{ route('library.store')}}',
                success: function(response) {
                  // Show success alert
                  new swal({
                    text: "تم إضافة الكتاب بنجاح !",
                    type: "success",
                    icon : "success",
                    buttonsStyling: false,
                    confirmButtonText: "حسنا !",
                    confirmButtonClass: "btn font-weight-bold btn-light"
                  }).then(function () {
                    // Redirect to index page
                    window.location.href = "{{ route('library.index') }}";
                  });
                },
                error: function(xhr, status, error) {
                  // Show error alert
                  new swal({
                    text: "حدث خطأاثناء الإضافة !",
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

              o.disabled = true;
              o.setAttribute("data-kt-indicator", "on");
              setTimeout(function() {
                o.removeAttribute("data-kt-indicator");
                o.disabled = false;
              }, 2e3);
          } else {
            Swal.fire({
              text: "Sorry, looks like there are some errors detected, please try again.",
              icon: "error",
              buttonsStyling: false,
              confirmButtonText: "Ok, got it!",
              customClass: {
                confirmButton: "btn btn-light"
              }
            }).then(function() {
              KTUtil.scrollTop();
            });
          }
        });
    } else {
          // Handle the case when validators or the validate method is not available
          console.error("Validators or validate method not found!");}
      });

      // Your existing code...
    }
  }
}}();

KTUtil.onDOMContentLoaded(function() {
  KTCreateAccount.init();
});
        </script>
@endsection
