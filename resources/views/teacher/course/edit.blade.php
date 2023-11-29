@extends('layouts.teacher')
@section('head')
		<link href="{{asset('metronic/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />

		<link href="{{asset('metronic/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('metronic/css/styleb.css')}}" rel="stylesheet" type="text/css" />



    <style>
        .btn-check:active+.btn.btn-active-light-primary, .btn-check:checked+.btn.btn-active-light-primary, .btn.btn-active-light-primary.active, .btn.btn-active-light-primary.show, .btn.btn-active-light-primary:active:not(.btn-active), .btn.btn-active-light-primary:focus:not(.btn-active), .btn.btn-active-light-primary:hover:not(.btn-active), .show>.btn.btn-active-light-primary {
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



    <h2 class="mx-2 h1 my-5 container">أضافة ملف جديد</h2>


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
									        <p class="m-0 fs-3 text-gray-500">اختر الكتاب لأدخال الدورة فيه</p>
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
                                                            <h4 class="h2 mt-3" :style="{ color: book_id == {{ $book->id }} ? 'white' : 'black' }">{{ $book->title }}</h4>
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
                                            <p class="m-0 fs-3 text-gray-500">اختر الباب لأدخال الدورة فيه</p>
                                        </div>
                                        <div class="row gy-5 mt-5 text-center">

                                            <div class="col-md-3 p-2" v-for="i in part_data" :key="i.id">

                                                    <input type="radio" class="btn-check" name="part_id" :value="i.id" :id="'part_' + i.id" v-model="part_id" @change="getChapters">
                                                    <label class="btn btn-outline btn-active-light-primary" :class="{'selected': {{$courses-> part_id}} == i.id}" style="width:100%; box-shadow: 0px 0px 5px 0px #aaa !important; border-radius:10px;" :for="'part_' + i.id">
                                                      <!--begin::Info-->
                                                      <div style="width: 80px; height: 80px;" :class="{'border-black': {{$courses-> part_id}} != i.id, 'border-white': {{$courses-> part_id}} == i.id}" class="rounded-circle  mx-auto d-flex align-items-center justify-content-center">
                                                        <span>@{{ i.id }} </span>
                                                      </div>
                                                      <div>
                                                        <h4 class="h2 mt-3" style="font-size: 15px;" :style="{ color: {{$courses-> part_id}} == i.id ? 'white' : 'black' }">@{{i.title}}</h4>
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
                                            <p class="m-0 fs-3 text-gray-500">اختر الفصل لأدخال الدورة فيه</p>
                                        </div>
                                        <div class="row gy-5 mt-5 text-center">
                                            <div class="col-md-3 p-2" v-for="i in chapter_data" :key="i.id">

                                                    <input type="radio" class="btn-check" name="chapter_id" :value="i.id" :id="'chapter_' + i.id" v-model="chapter_id" @change="getLessons">
                                                    <label class="btn btn-outline btn-active-light-primary" :class="{'selected': {{$courses-> chapter_id}} == i.id}" style="width:100%; box-shadow: 0px 0px 5px 0px #aaa !important; border-radius:10px;" :for="'chapter_' + i.id">
                                                      <!--begin::Info-->
                                                      <div style="width: 80px; height: 80px;" :class="{'border-black': {{$courses-> chapter_id}} != i.id, 'border-white': {{$courses-> chapter_id}} == i.id}" class="rounded-circle  mx-auto d-flex align-items-center justify-content-center">
                                                        <span>@{{ i.id }} </span>
                                                      </div>
                                                      <div>
                                                        <h4 class="h2 mt-3" style="font-size: 15px;" :style="{ color: {{$courses-> chapter_id}} == i.id ? 'white' : 'black' }">@{{ i.title }}</h4>
                                                      </div>
                                                      <!--end::Info-->
                                                    </label>

                                                {{-- <select class="form-control " id="exampleSelectd4"  v-on:change="getLessons" v-model="chapter_id"  name="chapter_id" disabled>
                                                    <option disabled value="">Choose one </option>
                                                    <option v-for="i in chapter_data" :value="i.id">@{{i.title}}</option>
                                                </select> --}}
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
                                    <p class="m-0 fs-3 text-gray-500">اختر الدرس لإدخال الدورة فيه</p>
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
                                    <div class="text-center">
                                        <h5 class="h1">اضافة تفاصيل الدورة الحضورية</h5>
                                        <p class="m-0 fs-3 text-gray-500">قم  باضافة تفاصيل الدورة الحضورية</p>
                                    </div>
                                    <div class="my-3">
                                        <h5>اسم الدورة الحضورية</h5>
                                        <input class="form-control" type="text" placeholder="اسم الدورة الحضورية" name="title" id="title"  v-model="title" />
                                    </div>

                                    <div class="my-3">
                                        <h5>إجمالي وقت محاضرات الدورة الحضورية</h5>
                                        <input class="form-control" type="number" placeholder="إجمالي وقت محاضرات الدورة الحضورية" name="total_time" id="total_time"  v-model="total_time" />
                                    </div>
                                    <div class="my-3">
                                        <h5>عدد محاضرات الدورة الحضورية الإجمالي</h5>
                                        <input class="form-control" type="number" name="lectures" id="lectures"  v-model="lectures" placeholder="عدد محاضرات الدورة الحضورية الإجمالي"/>
                                    </div>
                                    <div class="my-4">
                                        <div class="row gy-5">

                                            <div class="col-md-6">
                                                <div>
                                                    <h5>تاريخ بدأ الدوره</h5>
                                                    <input type="date" class="form-control" name="start" id="start"  v-model="start" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div>
                                                  <h5>تاريخ انتهاء الدوره</h5>
                                                  <input type="date" class="form-control" name="end" id="end" v-model="end">
                                                </div>
                                              </div>
                                        </div>
                                    </div>

                                    <div class="my-3">
                                        <h5>تحميل صورة الدورة الحضورية</h5>
                                        <div class="global-input position-relative " style="height: 50px;border: 1px solid #eee">
                                            <p class="m-0 pargraph-gray px-3" style="line-height: 45px;"> تحميل صورة </p>
                                            <i class="fa-solid fa-cloud-arrow-up position-absolute fs-4" style="top: 12px;left: 18px;"></i>
                                            <input  class="opacity-0 position-absolute top-0 start-0 end-0 bottom-0" style="z-index: 9;" role="button" type="file" name="img" @change="handleImgChange"/>
                                            <div style =" margin-top:10px; "><a  class="rounded w-150px " target="_blank" href="{{asset('courses/imgs/' . $courses->img)}}">{{$courses->img}}</a></div>
                                        </div>
                                    </div>
                                    <div style =" margin-top:40px;">
                                        <div class="my-4">
                                            <h4 class="m-0 my-4">وصف الدورة الحضورية</h4>
                                            <textarea  name="description" id="description"  v-html="description" class="tox-target kt_docs_tinymce_hidden" style="height: 200px;"></textarea>
                                        </div>
                                        <div>
                                            <h4 class="m-0 my-4">ماذا ستتعلم ؟</h4>
                                            <textarea  name="what_you_learn" id="what_you_learn"  v-html="what_you_learn" class="tox-target kt_docs_tinymce_hidden"></textarea>
                                        </div>
                                        <div>
                                            <h4 class="m-0 my-4">متطلبات</h4>
                                            <textarea  name="requirments" id="requirments"  v-html="requirments" class="tox-target kt_docs_tinymce_hidden"></textarea>
                                        </div>
                                        <div>
                                            <h4 class="m-0 my-4">لمن هذه الدورة ؟</h4>
                                            <textarea  name="who_package_for" id="who_package_for"  v-html="who_package_for" class="tox-target kt_docs_tinymce_hidden"></textarea>
                                        </div>
                                        <div>
                                            <h4 class="m-0 my-4">رسالة التسجيل</h4>
                                            <textarea  name="enroll_message" id="enroll_message"  v-html="enroll_message" class="tox-target kt_docs_tinymce_hidden"></textarea>
                                        </div>
                                    </div>
                                    <div class="my-4">
                                        <h4>رابط whatapp</h4>
                                        <input type="text" class="form-control" name="whatsapp" id="whatsapp"  v-model="whatsapp" placeholder="رابط whatapp"/>
                                    </div>
                                    <div class="my-4">
                                        <h4>العنوان </h4>
                                        <input type="text" class="form-control" name="address" id="address"  v-model="address" placeholder="العنوان"/>
                                    </div>
                                    <div class="my-4">
                                        <h4>الشهادة</h4>
                                        <select class="form-select" v-model="certification" id="certification" name="certification">
                                            <option value="1">True</option>
                                            <option value="0">False</option>
                                        </select>
                                    </div>
                                    <div class="my-4">
                                        <h4>عنوان الشهادة</h4>
                                        <input type="text" class="form-control" name="certification_title" id="certification_title"  v-model="certification_title"  placeholder=" عنوان الشهادة"/>
                                    </div>
                                    <div class="my-4">
                                        <h4>أيام الدورة الحضورية</h4>

                                        <div class="row align-items-center">
                                            <div class="col-md-3">
                                                <div>
                                                    <h4>اليوم</h4>
                                                    <input type="date" class="form-control" id="day-input" v-model="dayInput" />
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div>
                                                    <h4>من</h4>
                                                    <input type="time" class="form-control" id="from-input" v-model="fromInput" />
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div>
                                                    <h4>الي</h4>
                                                    <input type="time" class="form-control" id="to-input" v-model="toInput" />
                                                </div>
                                            </div>
                                            <div class="col-md-3 mt-8" role="button">
                                                <div style="width: 40px;height: 40px;border: 1px solid #e6e6e6;" class="rounded d-flex align-items-center justify-content-center" id="add-day-btn" @click="addDay">
                                                    <i class="fa-solid fa-plus fs-1"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Add the following hidden input field -->
                                        <input type="hidden" name="courseDays" v-model="JSON.stringify(courseDays)">

                                        <!-- Display the added course days -->
                                        <div id="days-container" style="margin-top:20px;">
                                            {{-- <div class="day-item" v-for="(day, index) in courseDays" :key="index">
                                                <span>@{{ day.date }}</span>
                                                <span>@{{ day.from }}</span>
                                                <span>@{{ day.to }}</span>
                                                <div class="remove-day-btn" @click="removeDay(index)"><i class="fa-solid fa-trash fs-1"></i></div>
                                            </div> --}}
                                            <table class="table" style="width:50%; border:1px solid #e4e6ef; border-radius: 10px !important; ">

                                                <thead>

                                                </thead>
                                                <tbody>

                                                    <!-- Display previous course days -->
<tr v-for="(day, index) in previouscourseDays" >
    <td>@{{ day.day }}</td>
    <td>@{{ day.from }}</td>
    <td>@{{ day.to }}</td>
    <td class="remove-day-btn" @click="removeDayFromPrevious(index)">
      <i class="fa-solid fa-trash fs-1"></i>
    </td>
  </tr>

  <!-- Display new course days -->
  <tr v-for="(day, index) in courseDays" >
    <td>@{{ day.day }}</td>
    <td>@{{ day.from }}</td>
    <td>@{{ day.to }}</td>
    <td class="remove-day-btn" @click="removeDayFromNew(index)">
      <i class="fa-solid fa-trash fs-1"></i>
    </td>
  </tr>
                                                </tbody>
                                              </table>
                                        </div>
                                    </div>





                                    <div class="my-4">
                                        <div class="row gy-5">
                                            <h3>الاسعار</h3>
                                            <div class="col-md-4">
                                                <div>
                                                    <h5>السعر</h5>
                                                    <input type="number" class="form-control" name="price" id="price"  v-model="price" >
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div>
                                                    <h5>الخصم (%)</h5>
                                                    <input type="number" class="form-control" name="discount" id="discount"  v-model="discount" >
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div>
                                                  <h5>السعر بعد الخصم</h5>
                                                  <input type="number" class="form-control" name="price_after_discount" id="price_after_discount" v-model="price_after_discount">
                                                </div>
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
                                    <h2 class="h1"> الدورات</h2>
                                    <div class="row gy-5">
                                        <div class="col-md-6">
                                            <div class="border rounded d-flex align-items-center justify-content-between ">
                                                <div class="d-flex align-items-center p-5">
                                                    <img src="{{asset('admin/media/teacher dashboard/video icon.jpg')}}" alt="" style="width: 35px;height: 35px;" class="rounded">
                                                    <div>
                                                        <h3 class="m-0 fw-bold mx-3 h2"> @{{title}}</h3>
                                                        <p class="m-0 mx-3 text-gray-500" style="font-size: 14px;">
                                                            <i class="fa fa-clock"></i>
                                                            <span class="mx-3">{{$courses->created_at}}</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <p class="m-0 px-5">
                                                    <a href="{{route('course.delete',$courses->id)}}"> <i role="button" class="fa-solid fa-trash-can fs-3 want_delete_btn"></i></a>
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
                                <a type="button" class="regular-black-btn btn mx-2" href="{{route('course.show')}}" >حفظ كمسودة </a>
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
            book_id:'{{$courses->book_id}}',
            part_id:'{{$courses->part_id}}',
            chapter_id:'{{$courses->chapter_id}}',
            lesson_id:'{{$courses->lesson_id}}',
            title:'{{$courses->title}}',
            start:'{{$courses->start}}',
            end:'{{$courses->end}}',
            img : null,
            total_time:'{{$courses->total_time}}',
            lectures:'{{$courses->lectures}}',
            description:'',
            what_you_learn:'',
            requirments:'',
            who_package_for:'',
            enroll_message:'',
            whatsapp:'{{$courses->whatsapp}}',
            address:'{{$courses->address}}',
            certification:'{{$courses->certification}}',
            certification_title:'{{$courses->certification_title}}',
            price:'{{$courses->price}}',
            discount:'{{$courses->discount}}',
            price_after_discount:'{{$courses->price_after_discount}}',
            dayInput: '',
        fromInput: '',
        toInput: '',
        courseDays: [],
        previouscourseDays: [
                        @foreach(\App\Models\InSiteCourseDay::where('course_id', $courses->id)->get() as $day)
                    {
                        'day': '{{$day->day}}',
                        'from': '{{$day->from}}',
                        'to': '{{$day->to}}',
                    },
                    @endforeach
                ],

    },
    computed: {
    calculatePriceAfterDiscount: function() {
      if (this.price && this.discount) {
        return this.price - (this.price * this.discount / 100);
      }
      return null;
    }
  },
  watch: {
    calculatePriceAfterDiscount: function(newPriceAfterDiscount) {
      this.price_after_discount = newPriceAfterDiscount;
    }
  },
  mounted:function() {

  this.description = '{{$courses->description}}';
  this.what_you_learn = '{{$courses->what_you_learn}}';
  this.requirments = '{{$courses->requirments}}';
  this.who_package_for = '{{$courses->who_package_for}}';
  this.enroll_message = '{{$courses->enroll_message}}';
  this.getParts();
  this.getChapters();
  this.getLessons();


},
    methods:{

        update: function () {
    var descriptionContent = tinymce.get('description').getContent();
    var whatYouLearnContent = tinymce.get('what_you_learn').getContent();
    var requirmentContent = tinymce.get('requirments').getContent();
    var whoPackageForContent = tinymce.get('who_package_for').getContent();
    var enrollMessageContent = tinymce.get('enroll_message').getContent();

    var formData = new FormData();
    formData.append('title', this.title);
    formData.append('book_id', this.book_id);
    formData.append('part_id', this.part_id);
    formData.append('chapter_id', this.chapter_id);
    formData.append('lesson_id', this.lesson_id);
    formData.append('total_time', this.total_time);
    formData.append('lectures', this.lectures);
    formData.append('start', this.start);
    formData.append('end', this.end);
    formData.append('description', descriptionContent);
    formData.append('what_you_learn', whatYouLearnContent);
    formData.append('requirments', requirmentContent);
    formData.append('who_package_for', whoPackageForContent);
    formData.append('enroll_message', enrollMessageContent);
    formData.append('whatsapp', this.whatsapp);
    formData.append('address', this.address);
    formData.append('certification', this.certification);
    formData.append('certification_title', this.certification_title);
    formData.append('price', this.price);
    formData.append('discount', this.discount);
    formData.append('price_after_discount', this.price_after_discount);
    formData.append('courseDays', JSON.stringify(this.courseDays));

    // Check if cover input is not empty
    if (this.img) {
      formData.append('img', this.img);
    }


    $.ajax({
      type: 'POST',
      processData: false,
      contentType: false,
      data: formData,
      url: '{{ route('course.update', $courses->id) }}',
      success: function(response) {
                  // Show success alert
                  new swal({
                    text: "تم تعديل الدورة بنجاح !",
                    type: "success",
                    icon : "success",
                    buttonsStyling: false,
                    confirmButtonText: "حسنا !",
                    confirmButtonClass: "btn font-weight-bold btn-light"
                  }).then(function () {
                    // Redirect to index page
                    window.location.href = "{{ route('course.show') }}";
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

    handleImgChange: function (course) {
      this.img = course.target.files[0];
    },

    addDay: function() {
  var day = this.dayInput;
  var from = this.fromInput;
  var to = this.toInput;

  // Create an object to represent the day
  var dayObj = {
    day: day,
    from: from,
    to: to
  };

  // Add the day object to the courseDays array
  this.courseDays.push(dayObj);

  // Clear the input fields
  this.dayInput = '';
  this.fromInput = '';
  this.toInput = '';
},
removeDayFromPrevious: function(index) {
  // Remove the day at the specified index from the previouscourseDays array
  this.previouscourseDays.splice(index, 1);
},

removeDayFromNew: function(index) {
  // Remove the day at the specified index from the newcourseDays array
  this.courseDays.splice(index, 1);
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
