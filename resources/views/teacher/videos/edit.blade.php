@extends('layouts.teacher')
@section('head')
		<link href="{{asset('metronic/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />

		<link href="{{asset('metronic/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('metronic/css/styleb.css')}}" rel="stylesheet" type="text/css" />
        <style>
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
            div:where(.swal2-container) button:where(.swal2-styled).swal2-confirm {
                background-color: #272727;
            }
            .border-gray-300 {
    border-color: #b4b6bf !important;
}
            .fs-8 {
                        font-size: 16px !important;
           }
            @media (min-width: 992px){
          [data-kt-app-sidebar-fixed=true] .app-wrapper {

                margin-right: 137px;
            }}
        </style>
@endsection
@section('content')
		<!--begin::App-->

		<div class="d-flex flex-column flex-root app-root" id="app-1" dir="rtl">
			<!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">

				<!--begin::Wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">

					<!--begin::Main-->

						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Toolbar-->
							<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
									<!--begin::Page title-->
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<!--begin::Title-->
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">إضافة كتاب</h1>
										<!--end::Title-->

									</div>
									<!--end::Page title-->
									<!--begin::Actions-->
									<div class="d-flex align-items-center gap-2 gap-lg-3">

										<!--begin::Secondary button-->
										<!--end::Secondary button-->
										<!--begin::Primary button-->
										{{-- <a href="#" class="solid-black-btn btn mx-2" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Create</a> --}}
										<!--end::Primary button-->
									</div>
									<!--end::Actions-->
								</div>
								<!--end::Toolbar container-->
							</div>
							<!--end::Toolbar-->
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content flex-column-fluid">
								<!--begin::Content container-->
								<div id="kt_app_content_container" class="app-container container-xxl">
									<!--begin::Stepper-->
									<div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid gap-10" id="kt_create_account_stepper">
										<!--begin::Aside-->
										<div class="card d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px w-xxl-400px">
											<!--begin::Wrapper-->
											<div class="card-body px-6 px-lg-10 px-xxl-15 py-20">
												<!--begin::Nav-->
												<div class="stepper-nav">
													<!--begin::Step 1-->
													<div class="stepper-item current" data-kt-stepper-element="nav">
														<!--begin::Wrapper-->
														<div class="stepper-wrapper">
															<!--begin::Icon-->
															<div class="stepper-icon w-40px h-40px">
																<i class="stepper-check fas fa-check"></i>
																<span class="stepper-number">1</span>
															</div>
															<!--end::Icon-->
															<!--begin::Label-->
															<div class="stepper-label">
																<h3 class="stepper-title">الكتاب</h3>
																<div class="stepper-desc fw-semibold">اضف بيانات الكتاب</div>
															</div>
															<!--end::Label-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Line-->
														<div class="stepper-line h-40px"></div>
														<!--end::Line-->
													</div>
													<!--end::Step 1-->
													<!--begin::Step 2-->
													<div class="stepper-item" data-kt-stepper-element="nav">
														<!--begin::Wrapper-->
														<div class="stepper-wrapper">
															<!--begin::Icon-->
															<div class="stepper-icon w-40px h-40px">
																<i class="stepper-check fas fa-check"></i>
																<span class="stepper-number">2</span>
															</div>
															<!--end::Icon-->
															<!--begin::Label-->
															<div class="stepper-label">
																<h3 class="stepper-title">الباب</h3>
																<div class="stepper-desc fw-semibold">أضف بيانات الباب</div>
															</div>
															<!--end::Label-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Line-->
														<div class="stepper-line h-40px"></div>
														<!--end::Line-->
													</div>
													<!--end::Step 2-->
													<!--begin::Step 3-->
													<div class="stepper-item" data-kt-stepper-element="nav">
														<!--begin::Wrapper-->
														<div class="stepper-wrapper">
															<!--begin::Icon-->
															<div class="stepper-icon w-40px h-40px">
																<i class="stepper-check fas fa-check"></i>
																<span class="stepper-number">3</span>
															</div>
															<!--end::Icon-->
															<!--begin::Label-->
															<div class="stepper-label">
																<h3 class="stepper-title">الفصل</h3>
																<div class="stepper-desc fw-semibold">اضف بيانات الفصل</div>
															</div>
															<!--end::Label-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Line-->
														<div class="stepper-line h-40px"></div>
														<!--end::Line-->
													</div>
													<!--end::Step 3-->
													<!--begin::Step 4-->
													<div class="stepper-item" data-kt-stepper-element="nav">
														<!--begin::Wrapper-->
														<div class="stepper-wrapper">
															<!--begin::Icon-->
															<div class="stepper-icon w-40px h-40px">
																<i class="stepper-check fas fa-check"></i>
																<span class="stepper-number">4</span>
															</div>
															<!--end::Icon-->
															<!--begin::Label-->
															<div class="stepper-label">
																<h3 class="stepper-title">الدرس</h3>
																<div class="stepper-desc fw-semibold">اضف بيانات الدرس</div>
															</div>
															<!--end::Label-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Line-->
														<div class="stepper-line h-40px"></div>
														<!--end::Line-->
													</div>
													<!--end::Step 4-->
													<!--begin::Step 5-->
													<div class="stepper-item mark-completed" data-kt-stepper-element="nav">
														<!--begin::Wrapper-->
														<div class="stepper-wrapper">
															<!--begin::Icon-->
															<div class="stepper-icon w-40px h-40px">
																<i class="stepper-check fas fa-check"></i>
																<span class="stepper-number">5</span>
															</div>
															<!--end::Icon-->
															<!--begin::Label-->
															<div class="stepper-label">
																<h3 class="stepper-title">عرض المحتوي</h3>
																<div class="stepper-desc fw-semibold">محتويات الكتاب</div>
															</div>
															<!--end::Label-->
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Step 5-->
												</div>
												<!--end::Nav-->
											</div>
											<!--end::Wrapper-->
										</div>
										<!--begin::Aside-->
										<!--begin::Content-->
										<div class="card d-flex flex-row-fluid flex-center">
											<!--begin::Form-->
											<form class="card-body py-20 w-100 mw-xl-700px px-9" novalidate="novalidate" id="kt_create_account_form">
												<!--begin::Step 1-->
												<div class="current" data-kt-stepper-element="content">
													<!--begin::Wrapper-->
													<div class="w-100">
														<!--begin::Heading-->
														<div class="pb-10 pb-lg-15">
															<!--begin::Title-->
															<h2 class="fw-bold d-flex align-items-center text-dark">إضافة الكتاب
															<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Billing is issued based on your selected account type"></i></h2>
															<!--end::Title-->

														</div>
														<!--end::Heading-->
														<!--begin::Input group-->
														<div class="fv-row">
															<!--begin::Row-->
															<div class="row">
                                                                <div class="form-group fv-plugins-icon-container">

                                                                    <label>الكتاب</label>

                                                                    <input type="text" class="form-control form-control-solid form-control-lg" id="book_title" name="book_title" v-model="book_title" placeholder="الاسم" >
                                                                    <span class="form-text text-muted">اضف اسم الكتاب </span>
                                                                    <div class="fv-plugins-message-container"></div>
                                                                </div>

															</div>
															<!--end::Row-->
														</div>
														<!--end::Input group-->
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Step 1-->
												<!--begin::Step 2-->
												<div data-kt-stepper-element="content">
													<!--begin::Wrapper-->
													<div class="w-100">
														<!--begin::Heading-->
														<div class="pb-10 pb-lg-15">
															<!--begin::Title-->
															<h2 class="fw-bold d-flex align-items-center text-dark">إضافة الباب
															<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Billing is issued based on your selected account type"></i></h2>
															<!--end::Title-->

														</div>
														<!--end::Heading-->
														<!--begin::Input group-->
                                                        <div class="fv-row">
															<!--begin::Row-->
															<div class="row">
                                                                <div class="form-group fv-plugins-icon-container">

                                                                    <label>الباب</label>

                                                                    <input type="text" class="form-control form-control-solid form-control-lg" name="part_title" v-model="part_title" placeholder="الاسم" value="">
                                                                    <span class="form-text text-muted">اضف اسم الباب </span>
                                                                    <div style="margin-bottom:80px;">
                                                                        <button @click.prevent="addPart" class="solid-black-btn btn mx-2" style="float:left;">ربط</button>
                                                                    </div>


                                                                    <div class="fv-plugins-message-container"></div>
                                                                </div>


                                                                <div class=" mb-5 mb-xl-8">
                                                                    <!--begin::Header-->
                                                                    <div class="card-header border-0 pt-5">
                                                                        <h3 class="card-title align-items-start flex-column">

                                                                            <span class="card-label fw-bold text-gray-900"> <i class="fa-solid fa-book fs-3" style="margin-left: 17px;"></i>  @{{ book_title }}</span>
                                                                        </h3>
                                                                    </div>
                                                                    <div class="card-body pt-5">
                                                                                    <!--begin::Item-->
                                                                                    <div v-for="(i, index) in parts" class="d-flex flex-stack align-items-center border border-dashed border-gray-300 rounded   mb-2">
                                                                                        <!--begin::Symbol-->
                                                                                        <div class="symbol symbol-40px me-5">
                                                                                          <i class="fa-solid fa-book-open fs-5"></i>
                                                                                        </div>
                                                                                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                                                                          <div class="flex-grow-1 me-2">
                                                                                            <span class="text-gray-800 text-hover-primary fs-6 fw-bold" @dblclick="edit('part', i.id)">@{{ i.title }}</span>
                                                                                          </div>
                                                                                          <a href="#" style="margin: 10px;" class="btn btn-sm btn-light fs-8 fw-bold" @click.prevent="edit('part', i.id)">تعديل</a>
                                                                                          <a href="#" style="margin: 10px;" class="btn btn-sm btn-light fs-8 fw-bold" @click.prevent="deleteItem('part', i.id)">حذف</a>
                                                                                          <!--end:Action-->

                                                                                        </div>

                                                                                        <!--end::Section-->
                                                                                      </div>

                                                                    </div>
                                                                    <!--end::Body-->
                                                                </div>
															</div>
															<!--end::Row-->
														</div>

														<!--end::Input group-->

													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Step 2-->
												<!--begin::Step 3-->
												<div data-kt-stepper-element="content">
													<!--begin::Wrapper-->
													<div class="w-100">
														<!--begin::Heading-->
														<div class="pb-10 pb-lg-15">
															<!--begin::Title-->
															<h2 class="fw-bold d-flex align-items-center text-dark"> إضافة الفصل
															<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Billing is issued based on your selected account type"></i></h2>
															<!--end::Title-->

														</div>
														<!--end::Heading-->
														<!--begin::Input group-->
                                                        <div class="fv-row">
															<!--begin::Row-->
															<div class="row">
                                                                <div class="form-group fv-plugins-icon-container">


                                                                    <div class="col-xl-12">
                                                                        <div class="form-group fv-plugins-icon-container">
                                                                            <label>الباب</label>
                                                                            <select class="form-control form-control-solid form-control-lg" v-model="part_index">
                                                                                <option v-for="(i,index) in parts" :value="index">@{{ i.title }}</option>
                                                                            </select>
                                                                            <span class="form-text text-muted">اختر الباب</span>
                                                                            <div class="fv-plugins-message-container"></div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-xl-12">
                                                                        <!--begin::Input-->
                                                                        <div class="form-group fv-plugins-icon-container">
                                                                            <label>الفصل</label>

                                                                            <input type="text" class="form-control form-control-solid form-control-lg" name="chapter_title" v-model="chapter_title" placeholder="الاسم" value="">
                                                                            <span class="form-text text-muted">اضف اسم الفصل</span>

                                                                            <div class="fv-plugins-message-container"></div>

                                                                            <div style="margin-bottom:80px;">
                                                                                <button @click.prevent="addChapter" class="solid-black-btn btn mx-2" style="float:left;">ربط</button>
                                                                            </div>
                                                                        </div>
                                                                        <!--end::Input-->
                                                                        <div dir="rtl" style="text-align: right;" >
                                                                            <div class="menu-icon" style="font-size:16px; margin-left:10px; margin-bottom:10px;">
                                                                                <i class="fa-solid fa-book fs-3"></i>
                                                                                @{{ book_title }}
                                                                            </div>

                                                                            <ul>
                                                                                <li v-for="part in parts">

                                                                                   <div style="margin-bottom:10px;">   <i class="fa-solid fa-book-open fs-5"></i> @{{ part.title }}  </div>
                                                                                    <ul v-for=" chapter in part.chapters">
                                                                                        <li class="d-flex flex-stack align-items-center border border-dashed border-gray-300 rounded mb-2 mr-2 ml-2 " >
                                                                                            <i class="fa-solid fa-file-lines fs-3" style="margin-right:10px  !important;"></i>
                                                                                            <div class="flex-grow-1 me-2" style="margin-right:10px  !important;">
                                                                                                <span class="text-gray-800 text-hover-primary fs-6 fw-bold" @dblclick="edit('chapter', chapter.id)">@{{ chapter.title }}</span>
                                                                                              </div>
                                                                                            <a href="#" style="margin: 10px;" class="btn btn-sm btn-light fs-8 fw-bold" @click.prevent="edit('chapter', chapter.id)">تعديل</a>
                                                                                          <a href="#" style="margin: 10px;" class="btn btn-sm btn-light fs-8 fw-bold" @click.prevent="deleteItem('chapter', chapter.id)">حذف</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
															    </div>
															<!--end::Row-->
														    </div>
														   <!--end::Input group-->
													    </div>
                                                    </div>
													<!--end::Wrapper-->
												</div>
                                                <div data-kt-stepper-element="content">
													<!--begin::Wrapper-->
                                                 <div class="w-100">
														<!--begin::Heading-->
														<div class="pb-10 pb-lg-15">
															<!--begin::Title-->
															<h2 class="fw-bold d-flex align-items-center text-dark">إضافة الدرس
															<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Billing is issued based on your selected account type"></i></h2>
															<!--end::Title-->
														</div>
														<!--end::Heading-->
														<!--begin::Input group-->
                                                    <div class="fv-row">
															<!--begin::Row-->
														<div class="row">
                                                            <div class="form-group fv-plugins-icon-container">
                                                                    <div class="col-xl-12">
                                                                        <div class="form-group fv-plugins-icon-container">
                                                                            <label>الباب</label>
                                                                            <select class="form-control form-control-solid form-control-lg" v-model="part_index">
                                                                                <option v-for="(i,index) in parts" :value="index">@{{ i.title }}</option>
                                                                            </select>
                                                                            <span class="form-text text-muted">اختر الباب</span>
                                                                            <div class="fv-plugins-message-container"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-12">
                                                                        <div class="form-group fv-plugins-icon-container">
                                                                            <label>الفصل</label>
                                                                            <select class="form-control form-control-solid form-control-lg" v-model="chapter_index">
                                                                                {{-- <option v-for="(i,index) in chapters" :value="index">@{{ i.title }}</option> --}}
                                                                                <optgroup v-if="part_index == part_idx" v-for="(part, part_idx) in parts" :label="part.title">
                                                                                    <option v-for="(chapter, chapter_idx) in part.chapters" :value="chapter_idx">@{{ chapter.title }}</option>
                                                                                </optgroup>
                                                                            </select>
                                                                            <span class="form-text text-muted">اختر الفصل</span>
                                                                            <div class="fv-plugins-message-container"></div>
                                                                        </div>
                                                                    </div>
                                                                <div class="col-xl-12">
                                                                        <!--begin::Input-->
                                                                         <div class="form-group fv-plugins-icon-container">
                                                                            <label>الدرس</label>

                                                                    <input type="text" class="form-control form-control-solid form-control-lg" name="lesson_title" v-model="lesson_title" placeholder="الاسم" value="">
                                                                    <span class="form-text text-muted">اضف اسم الدرس </span>

                                                                    <div class="fv-plugins-message-container"></div>
                                                                      </div>

                                                                      <div style="margin-bottom:80px;">
                                                                        <button @click.prevent="addLesson" class="solid-black-btn btn mx-2" style="float:left;">ربط</button>
                                                                    </div>

                                                                        <!--end::Input-->
                                                                        <div dir="rtl" style="text-align: right; margin-left:10px;">
                                                                            <span class="menu-icon" style="font-size:16px;">
                                                                                <i class="fa-solid fa-book fs-3"></i>
                                                                                @{{ book_title }}
                                                                            </span>

                                                                            <ul>
                                                                                <li v-for="part in parts">
                                                                                    {{-- <div class="stepper-line h-40px"></div> --}}
                                                                                    <div style="margin-bottom:10px;">
                                                                                        <i class="fa-solid fa-book-open fs-5" style="margin-left:10px;"></i> @{{ part.title }}
                                                                                    </div>

                                                                                    <ul>
                                                                                        <li v-for="chapter in part.chapters">
                                                                                            {{-- <div class="stepper-line h-40px"></div> --}}
                                                                                   <div style="margin-bottom:10px;">   <i class="fa-solid fa-file-lines fs-3"></i> @{{ chapter.title }}  </div>
                                                                                    <ul v-for=" lesson in chapter.lessons">
                                                                                        <li class="d-flex flex-stack align-items-center border border-dashed border-gray-300 rounded mb-2 mr-2 ml-2 " >
                                                                                            <i class="fa-solid fa-clipboard-question fs-3" style="margin-right:10px  !important;"></i>
                                                                                            <div class="flex-grow-1 me-2" style="margin-right:10px  !important;">
                                                                                                <span class="text-gray-800 text-hover-primary fs-6 fw-bold" @dblclick="edit('lesson', lesson.id)">@{{ lesson.title }}</span>
                                                                                              </div>
                                                                                            <a href="#" style="margin: 10px;" class="btn btn-sm btn-light fs-8 fw-bold" @click.prevent="edit('lesson', lesson.id)">تعديل</a>
                                                                                          <a href="#" style="margin: 10px;" class="btn btn-sm btn-light fs-8 fw-bold" @click.prevent="deleteItem('lesson', lesson.id)">حذف</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </li>
                                                                                    </ul>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                   </div>
															</div>
															<!--end::Row-->
														</div>
														<!--end::Input group-->
													</div>
													<!--end::Wrapper-->
												 </div>
                                                </div>
												<!--end::Step 3-->
												<!--begin::Step 4-->
												<div data-kt-stepper-element="content">
													<!--begin::Wrapper-->
													<div class="w-100">
														<!--begin::Heading-->
														<div class="pb-10 pb-lg-15">
															<!--begin::Title-->
															<h2 class="fw-bold d-flex align-items-center text-dark"> محتوي الكتاب
															<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Billing is issued based on your selected account type"></i></h2>
															<!--end::Title-->
														</div>
														<!--end::Heading-->
														<!--begin::Input group-->
                                                        <div class="fv-row">
															<!--begin::Row-->
															<div class="row">
                                                                <div class="form-group fv-plugins-icon-container">
                                                                    <div dir="rtl" style="text-align: right;">
                                                                        <span class="menu-icon" style=" font-size: 16px; margin-left:10px;">
                                                                            <i class="fa-solid fa-book fs-3"></i>
                                                                        </span>
                                                                         @{{ book_title }}
                                                                        <ul>
                                                                            <li v-for="part in parts">
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
                                                                </div>

															</div>
															<!--end::Row-->
														</div>

														<!--end::Input group-->

													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Step 4-->

												<!--begin::Actions-->
												<div class="d-flex flex-stack pt-10">
													<!--begin::Wrapper-->
													<div class="mr-2">
														<button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg')}}-->
														<span class="svg-icon svg-icon-4 ms-1 me-0">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="currentColor" />
																<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->السابق</button>
													</div>
													<!--end::Wrapper-->
													<!--begin::Wrapper-->
													<div>
														<button type="button" class="btn btn-lg btn-primary me-3" data-kt-stepper-action="submit" @click.prevent="update">
															<span class="indicator-label">تحديث
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg')}}-->
															<span class="svg-icon svg-icon-4 me-1">
                                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="currentColor" />
                                                                    <path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="currentColor" />
                                                                </svg>
                                                            </span>
															<!--end::Svg Icon--></span>
															<span class="indicator-progress">انتظر من فضلك...
															<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
														</button>
														<button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">التالي
														<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg')}}-->
														<span class="svg-icon svg-icon-4 me-1">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.5" x="6" y="11" width="13" height="2" rx="1" fill="currentColor" />
																<path d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon--></button>
													</div>
													<!--end::Wrapper-->
												</div>
												<!--end::Actions-->
											</form>
											<!--end::Form-->
										</div>
										<!--end::Content-->
									</div>
									<!--end::Stepper-->
								</div>
								<!--end::Content container-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->


					<!--end:::Main-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
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
                        book_id: '{{$book_id}}',
                        book_title: '{{$book->title}}',
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
                    mounted(){
                        this.loader('{{$book_id}}');
                    },
                    methods: {
                    deleteItem: async function(topic_type, topic_id){

                        Swal.fire({
                            icon: 'warning',
                            title: 'هل انت متأكد!',
                            showCancelButton: true,
                            confirmButtonText: `نعم `,
                        }).then(async (result) => {
                            console.log(result);
                            /* Read more about isConfirmed, isDenied below */
                            if (result.value) {
                                Swal.fire({
                                    title: 'متأكد !',
                                    text: 'بالضغط علي حذف سوف يتم حذفه وكل ما يتعلق به من محتوي',
                                    showCancelButton: true,
                                    confirmButtonText: `انا متاكد`,
                                }).then(async (result) =>  {
                                    /* Read more about isConfirmed, isDenied below */
                                    if (result.value) {
                                        await app.deleteRequest(topic_type, topic_id).then(res => {
                                            app.loader(app.book_id);
                                        });
                                    }
                                });
                            }
                        });

                    },
                    deleteRequest: async function(topic_type, topic_id){
                        return fetch('{{route('library.single.delete', '')}}/' + topic_type, {
                            method: 'POST',
                            headers: {
                                "Content-Type": "application/json",
                                'X-CSRF-TOKEN': '{{csrf_token()}}',
                            },
                            body: JSON.stringify({
                                topic_id,
                            }),
                        })
                            .then(response => {
                                if (!response.ok) {
                                    // make the promise be rejected if we didn't get a 2xx response
                                    console.log(response);
                                    throw new Error(`${response.statusText}`)
                                } else {

                                    return response.json();
                                }
                            })
                            .catch(error => {
                                Swal.showValidationMessage(
                                    `Request failed: ${error}`
                                )
                            });
                    },

                    loader: function(path_id) {
                        $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': '{{csrf_token()}}',
    }
  });
  $.ajax({
    type: 'POST',
    url: '{{route('library.loader', '')}}/' + path_id,
    success: (res) => {
      this.book_title = res.title;
      this.parts = res.parts;
      this.chapters = res.chapters;
      this.lessons = res.lessons;


      console.log(this.parts);
    },
  });
},
edit: function(topic_type, topic_id) {
  Swal.fire({
    title: ' Title',
    input: 'text',
    inputAttributes: {
      autocapitalize: 'off'
    },
    showCancelButton: true,
    confirmButtonText: 'تحديث',
    showLoaderOnConfirm: true,
    preConfirm: (value) => {
      return fetch('{{route('library.single.update', '')}}/' + topic_type, {
        method: 'POST',
        headers: {
          "Content-Type": "application/json",
          'X-CSRF-TOKEN': '{{csrf_token()}}',
        },
        body: JSON.stringify({
          topic_id,
          value,
        }),
      }).then(response => {
        if (!response.ok) {
          // make the promise be rejected if we didn't get a 2xx response
          console.log(response);
          throw new Error(`${response.statusText}`)
        } else {
          return response.json();
        }
      })
      .catch(error => {
        Swal.showValidationMessage(
          `Request failed: ${error}`
        )
      });
    },
    allowOutsideClick: () => !Swal.isLoading()
  }).then((result) => {
    if (result.dismiss == 'cancel') {
        Swal.fire({
        text: "تراجع",
        type: "success",
        buttonsStyling: false,
        confirmButtonText: "حسنا!",
        confirmButtonClass: "btn font-weight-bold btn-light"
      });
    } else {
        Swal.fire({
        text: "تحديث",
        type: "success",
        buttonsStyling: false,
        confirmButtonText: "حسنا!",
        confirmButtonClass: "btn font-weight-bold btn-light"
      }).then(() => {
        app.loader(app.book_id);

      });
    }
  });
},


update: function() {
  var self = this; // Store the reference to the Vue instance

  // Perform the AJAX request to update the data
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': '{{csrf_token()}}',
    }
  });

  $.ajax({
    type: 'POST',
    data: {
      book_title: self.book_title,
    },
    url: '{{ route('library.update', $book_id)}}',
    success: function(response) {
      // Show success alert using the `swal` library
      Swal.fire({
        text: "تم تعديل الكتاب بنجاح!",
        type: "success",
        icon: "success",
        buttonsStyling: false,
        confirmButtonText: "حسنا !",
        confirmButtonClass: "btn font-weight-bold btn-light"
      }).then(function() {
        // Redirect to the index page
        window.location.href = "{{ route('library.index') }}";
      });
    },
    error: function(xhr, status, error) {
      // Show error alert using the `swal` library
      Swal.fire({
        text: "حدث خطأ أثناء التعديل!",
        type: "error",
        icon: "error",
        buttonsStyling: false,
        confirmButtonText: "حسنا !",
        confirmButtonClass: "btn font-weight-bold btn-light"
      }).then(function() {
        KTUtil.scrollTop();
      });
    }
  });
},
                    addPart: function(){
                            if(this.is_empty(this.part_title, 'اسم الباب مطلوب!')){
                                return;
                            }
                            this.add('part', {title: this.part_title} , this.book_id).then(() => {
                            app.loader(app.book_id);
                        });

                        this.part_title = '';




                        },
                        addChapter: function(){
                            if(this.is_empty(this.chapter_title, 'اسم الفصل مطلوب!')){
                                return;
                            }
                            this.add('chapter', {title: this.chapter_title}, this.parts[this.part_index].id).then(() => {
                            app.loader(app.book_id);
                        });

                        this.chapter_title = '';

                        },

                        addLesson: function() {
  if (this.is_empty(this.lesson_title, 'اسم الدرس مطلوب!')) {
    return;
  }

  this.add('lesson', {title: this.lesson_title}, this.parts[this.part_index].chapters[this.chapter_index].id).then(() => {
                            app.loader(app.book_id);
                        });

                        this.lesson_title = '';

},
                        add: function(topic_type, data, parent_id){
                        return fetch('{{route('library.single.store', '')}}/' + topic_type, {
                            method: 'POST',
                            headers: {
                                "Content-Type": "application/json",
                                'X-CSRF-TOKEN': '{{csrf_token()}}',
                            },
                            body: JSON.stringify({
                                title: data.title,
                                parent_id,
                            }),
                            })
                            .then(response => response.json())
                            .then(response => {
                                console.log(response);
                            })
                            .catch(error => {
                                console.log(error);
                            });
                        },
                        is_empty: function(val, err){
                         if(val === '' || val === null){
                            Swal.fire({
                                text: err,
                                type: "error",
                                buttonsStyling: false,
                                confirmButtonText: "حسنا !",
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


       o.addEventListener("click", function(event) {
  var bookTitleValidator = validators.find(function(validator) {
    return validator.field === 'book_title';
  });

  if (bookTitleValidator) {
    bookTitleValidator.validate().then(function(canCreateDiscussions) {
      console.log("validated!");
      if ("Valid" == canCreateDiscussions) {
          // Perform the AJAX request to store the data
          $.ajaxSetup({
            headers: {
              'X-CSRF-TOKEN': '{{csrf_token()}}',
            }
          });

          $.ajax({
            type: 'PUT',
            data: {
              teacher_id: app.teacher_id,
              title: app.book_title,
              parts: app.parts,
              chapters: app.chapters,
              lessons: app.lessons,
            },
            url: '{{ route('library.update',$book_id)}}',
            success: function(response) {
              // Show success alert
              new  swal({
                text: "تم تعديل الكتاب بنجاح!",
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
                text: "حدث خطأاثناء التعديل !",
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
          text: "هناك خطأ! حاول مرةاخري.",
          icon: "error",
          buttonsStyling: false,
          confirmButtonText: "حسنا!",
          customClass: {
            confirmButton: "btn btn-light"
          }
        }).then(function() {
          KTUtil.scrollTop();
        });
      }
    });
  }
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
