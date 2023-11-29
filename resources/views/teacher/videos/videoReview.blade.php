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
            <div  class="bg-gray active-added" style="height: 2px;flex-grow: 1;"></div>
            <div class="text-center">
                <div class="rounded-circle active-added d-flex mt-5 align-items-center justify-content-center" style="height: 35px;width: 35px;background: #eee;">
                    <i class="fa-solid fa-check"></i>
                </div>
                <p class="m-0 mt-1">تحميل</p>
            </div>
            <div  class="bg-gray active-added" style="height: 2px;flex-grow: 1;"></div>
            <div class="text-center">
                <div class="rounded-circle active-added d-flex mt-5 align-items-center justify-content-center" style="height: 35px;width: 35px;background: #eee;">
                    <i class="fa-solid fa-check"></i>
                </div>
                <p class="m-0 mt-1">مراجعة</p>
            </div>
            <div class="bg-gray publish-line" style="height: 2px;flex-grow: 1;"></div>
            <div class="text-center">
                <div class="rounded-circle  publish-line d-flex mt-5 align-items-center justify-content-center" style="height: 35px;width: 35px;background: #eee;">
                    <i class="fa-solid fa-check"></i>
                </div>
                <p class="m-0 mt-1">نشر</p>
            </div>
        </div>
    </div>

    <!--End line of process-->


    <!--start video review-->

    <div class="container mt-5">
        <div >
            <div class="text-center">
                <h2 class="h1">مراجعة الفيديو</h2>
                <p class="text-gray-600 fs-2">قم بمراجعة الفيديو قبل نشره للطلاب </p>
            </div>
            <div class="w-75 mx-auto">
                <iframe width="100%" height="400"
                 src="https://www.youtube.com/embed/tgbNymZ7vqY">
                 </iframe>
            </div>
        </div>
    </div>

    <!--End video review-->



    <!--start all files-->


    <div class="container mt-5">
        <h2 class="h1">جميع الملفات</h2>
        <div class="row gy-5">
            <div class="col-md-6">
                <div class="border rounded d-flex align-items-center justify-content-between ">
                    <div class="d-flex align-items-center p-5">
                        <img src="../assets/media/teacher dashboard/files.png" alt="" style="width: 35px;height: 35px;" class="rounded">
                        <div>
                            <h3 class="m-0 fw-bold mx-3 h2">اسم الملف</h3>
                            <p class="m-0 mx-3 text-gray-500" style="font-size: 14px;">
                                <i class="fa fa-clock"></i>
                                <span class="mx-3">2022-02-05</span>
                            </p>
                        </div>
                    </div>
                    <p class="m-0 px-5">
                        <i role="button" class="fa-solid fa-trash-can fs-3 want_delete_btn"></i>
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="border rounded d-flex align-items-center justify-content-between ">
                    <div class="d-flex align-items-center p-5">
                        <img src="../assets/media/teacher dashboard/files.png" alt="" style="width: 35px;height: 35px;" class="rounded">
                        <div>
                            <h3 class="m-0 fw-bold mx-3 h2">اسم الملف</h3>
                            <p class="m-0 mx-3 text-gray-500" style="font-size: 14px;">
                                <i class="fa fa-clock"></i>
                                <span class="mx-3">2022-02-05</span>
                            </p>
                        </div>
                    </div>
                    <p class="m-0 px-5">
                        <i role="button" class="fa-solid fa-trash-can fs-3 want_delete_btn"></i>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!--End all files-->




    <!--start are you want delete-->

    <div class="w-100 h-100 position-fixed top-0 start-0 end-0 bottom-0
        d-flex align-items-center justify-content-center
        want-delete-container d-none
    "
    style="background-color:rgba(0, 0, 0, .3);z-index:99999;">
        <div class="pop-up-meddile bg-white p-5 rounded  want-delete-content"  style="width: 90%;">
            <div class="d-flex align-items-center justify-content-end">
                <p class="m-0">
                    <i class="fa-solid fa-xmark fs-4 want-delete-Xmark" role="button"></i>
                </p>
            </div>
            <div class="text-center">
                <i class="fa-solid fa-triangle-exclamation"  style="font-size: 100px;color: #973030;"></i>
                <div class="d-flex align-align-items-center justify-content-center mt-5">
                    <button class="btn regular-black-btn mx-3 want_delete_Cancel">الغاء</button>
                    <button class="btn solid-black-btn mx-3 want_delete_verify_btn">حذف</button>
                </div>
            </div>
        </div>
    </div>

    <!--End are you want delete-->



    <!--start verify deleted-->

    <div class="w-100 h-100 position-fixed top-0 start-0 end-0 bottom-0
        d-flex align-items-center justify-content-center
        verify-deleted-container d-none
    "
    style="background-color:rgba(0, 0, 0, .3);z-index:99999;">
        <div class="pop-up-meddile bg-white p-5 rounded verify-deleted-content"  style="width: 90%;">
            <div class="d-flex align-items-center justify-content-end">
                <p class="m-0">
                    <i class="fa-solid fa-xmark fs-4 verify-deleted-Xmark" role="button"></i>
                </p>
            </div>
            <div class="text-center">
                <i class="fa-regular fa-circle-check" style="font-size: 80px;color: #46Ca5B;"></i>
                <p class="fs-2 fw-bold my-3">تم حذف الملف بنجاح</p>
            </div>
        </div>
    </div>

    <!--End verify deleted->








    <!--start publishing video verification true-->

    <div class="w-100 h-100 position-fixed top-0 start-0 end-0 bottom-0
        d-flex align-items-center justify-content-center d-none
        publish-video-Container
    "
    style="background-color:rgba(0, 0, 0, .3);z-index:99999;"

    >
        <div class="pop-up-meddile bg-white p-5 rounded publish-video-content"  style="width: 90%;height: 200px;">
            <div class="d-flex align-items-center justify-content-end">
                <p class="m-0">
                    <i class="fa-solid fa-xmark fs-4 publish-video-Xmark-verification" role="button"></i>
                </p>
            </div>
            <div class="text-center">
                <i class="fa-regular fa-circle-check" style="font-size: 80px;color: #46Ca5B;"></i>
                <p class="fs-2 fw-bold my-3">تم نشر الفيديو بنجاح</p>
            </div>
        </div>
    </div>

<!--End  publishing video verification true-->






    <!--start controll button-->
    <div class="container my-5">
        <div class="mt-5 d-flex align-items-center justify-content-end ">
            {{-- <a class="regular-black-btn btn mx-2" href="allVideos.html">حفظ كمسودة</a> --}}
            <button class="solid-black-btn btn mx-2 publish-btn" >نشر</button>
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
