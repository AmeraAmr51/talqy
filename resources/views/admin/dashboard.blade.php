@extends('layouts.admin')
@section('content')


					<!--start select class part-->

						<div class="d-flex justify-content-between p-5">
							<p class="m-0 fw-bold fs-2">
								{{Auth::guard('admin')->user()->name}}
							</p>
							<div>
								<select class="form-select" aria-label="Default select example">
								<option selected hidden>المرحلة التعليمية</option>
								<optgroup label="المرحلة الاعدادية" style="border-bottom:1px solid #EEEEEE">
									<option>الصف الأول الاعدادي</option>
									<option>الصف الثاني الاعدادي</option>
									<option>الصف الثالث الاعدادي</option>
								</optgroup>
								<optgroup label="المرحلة الثانوية" style="border-bottom:1px solid #EEEEEE">
									<option>الصف الأول الثانوي</option>
									<option>الصف الثاني الثانوي</option>
									<option>الصف الثالث الثانوي</option>
								</optgroup>
								</select>
							</div>
						</div>

					<!--End select class part-->



					<!--start wrapper-->

					<div>
						<div class="container">
							<div class="row">
								<div class="col-md-7">
									<!--start basic links-->
									<div class="row gy-5">
										<div class="col-sm-4 col-6">
											<div class="border text-center py-5" style="box-shadow:1px 1px 6px 2px #EEEEEE">
												<div style="width:90px;height:80px;" class="mx-auto border"></div>
												<p class="m-0 fw-bold">عدد المواد</p>
												<p class="m-0 fw-bold">0</p>
											</div>
										</div>
										<div class="col-sm-4 col-6">
											<div class="border text-center py-5" style="box-shadow:1px 1px 6px 2px #EEEEEE">
												<div style="width:90px;height:80px;" class="mx-auto border"></div>
												<p class="m-0 fw-bold">إجمالي الطلاب</p>
												<p class="m-0 fw-bold">0</p>
											</div>
										</div>
										<div class="col-sm-4 col-6">
											<div class="border text-center py-5" style="box-shadow:1px 1px 6px 2px #EEEEEE">
												<div style="width:90px;height:80px;" class="mx-auto border"></div>
												<p class="m-0 fw-bold">الباقات</p>
												<p class="m-0 fw-bold">0</p>
											</div>
										</div>
										<div class="col-sm-4 col-6">
											<div class="border text-center py-5" style="box-shadow:1px 1px 6px 2px #EEEEEE">
												<div style="width:90px;height:80px;" class="mx-auto border"></div>
												<p class="m-0 fw-bold">إجمالي الإيرادات</p>
												<p class="m-0 fw-bold">0</p>
											</div>
										</div>
										<div class="col-sm-4 col-6">
											<div class="border text-center py-5" style="box-shadow:1px 1px 6px 2px #EEEEEE">
												<div style="width:90px;height:80px;" class="mx-auto border"></div>
												<p class="m-0 fw-bold">الاختبارات</p>
												<p class="m-0 fw-bold">0</p>
											</div>
										</div>
										<div class="col-sm-4 col-6">
											<div class="border text-center bg-white py-5" style="box-shadow:1px 1px 6px 2px #EEEEEE">
												<div style="width:90px;height:80px;" class="mx-auto border"></div>
												<p class="m-0 fw-bold">تقييم</p>
												<p class="m-0 fw-bold">0</p>
											</div>
										</div>
									</div>
									<!--End basic links-->
									<!--begin::Charts Widget 1-->
									<div class="card mb-5 card-xl-stretch mt-5 mb-xl-8">
										<!--begin::Header-->
										<div class="card-header border-0 pt-5">
											<!--begin::Title-->
											<h3 class="card-title align-items-start flex-column fw-bold">
												الايرادات
											</h3>
											<!--end::Title-->
											<!--begin::Toolbar-->
											<div class="card-toolbar">
												<!--begin::Menu-->
												<select class="form-select" aria-label="Default select example">
													<option selected hidden>اخر 12 شهرا</option>
													<option value="1">One</option>
													<option value="2">Two</option>
													<option value="3">Three</option>
												</select>
												<!--begin::Menu 1-->
												<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64b776342d3a4">
													<!--begin::Header-->
													<div class="px-7 py-5">
														<div class="fs-5 text-dark fw-bold">Filter Options</div>
													</div>
													<!--end::Header-->
													<!--begin::Menu separator-->
													<div class="separator border-gray-200"></div>
													<!--end::Menu separator-->
													<!--begin::Form-->
													<div class="px-7 py-5">
														<!--begin::Input group-->
														<div class="mb-10">
															<!--begin::Label-->
															<label class="form-label fw-semibold">Status:</label>
															<!--end::Label-->
															<!--begin::Input-->
															<div>
																<select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_64b776342d3a4" data-allow-clear="true">
																	<option></option>
																	<option value="1">Approved</option>
																	<option value="2">Pending</option>
																	<option value="2">In Process</option>
																	<option value="2">Rejected</option>
																</select>
															</div>
															<!--end::Input-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="mb-10">
															<!--begin::Label-->
															<label class="form-label fw-semibold">Member Type:</label>
															<!--end::Label-->
															<!--begin::Options-->
															<div class="d-flex">
																<!--begin::Options-->
																<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
																	<input class="form-check-input" type="checkbox" value="1" />
																	<span class="form-check-label">Author</span>
																</label>
																<!--end::Options-->
																<!--begin::Options-->
																<label class="form-check form-check-sm form-check-custom form-check-solid">
																	<input class="form-check-input" type="checkbox" value="2" checked="checked" />
																	<span class="form-check-label">Customer</span>
																</label>
																<!--end::Options-->
															</div>
															<!--end::Options-->
														</div>
														<!--end::Input group-->
														<!--begin::Input group-->
														<div class="mb-10">
															<!--begin::Label-->
															<label class="form-label fw-semibold">Notifications:</label>
															<!--end::Label-->
															<!--begin::Switch-->
															<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
																<input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
																<label class="form-check-label">Enabled</label>
															</div>
															<!--end::Switch-->
														</div>
														<!--end::Input group-->
														<!--begin::Actions-->
														<div class="d-flex justify-content-end">
															<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
															<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
														</div>
														<!--end::Actions-->
													</div>
													<!--end::Form-->
												</div>
												<!--end::Menu 1-->
												<!--end::Menu-->
											</div>
											<!--end::Toolbar-->
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body">
											<!--begin::Chart-->
											<div id="kt_charts_widget_1_chart" style="height: 350px"></div>
											<!--end::Chart-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Charts Widget 1-->
								</div>
								<div class="col-md-5">
									<!--start calender-->
									<div>
										<div id="calender-item" class="my-0 w-100"></div>
									</div>
									<!--End calender-->
									<!--start add Dates-->
									<div style="box-shadow:1px 1px 6px 1px #EEEEEE;" class="add-date-box p-3 mt-5">
										<div class="d-flex align-items-center justify-content-between py-5 px-3 fw-bold">
											<p class="m-0 fw-bold fs-4" >مواعيد اليوم</p>
											<p class="m-0 d-flex align-items-center px-4 py-2 regular-black-btn" id="add-new-date-button" role="button">
												<i class="fa-solid fa-plus fs-4" ></i>
												<span class="mx-2 ">أضف موعد جديد</span>
											</p>
										</div>
										<div class="my-3 d-flex border rounded align-items-center justify-content-between p-3">
											<div class="d-flex align-items-center">
												<div style="width: 40px;height: 40px;" class="rounded-circle d-flex justify-content-center align-items-center border">
													<i class="fa-solid fa-calculator"></i>
												</div>
												<div class="mx-3">
													<p class="m-0 fw-bold fs-6">
														اختبار ايجاد الجذر التربيعي
													</p>
													<p class="m-0" style="color: #A0ADBB;">
														01:00pm - 02:00pm
													</p>
												</div>
											</div>
											<div class="d-flex align-items-center">
												<i onclick="openupdateDate()" class="fa-regular fa-pen-to-square mx-3" role="button"></i>
												<i onclick="openVerifingDelete()" class="fa-regular fa-trash-can" role="button"></i>
											</div>
										</div>
										<div class="my-3 d-flex border rounded align-items-center justify-content-between p-3">
											<div class="d-flex align-items-center">
												<div style="width: 40px;height: 40px;" class="rounded-circle d-flex justify-content-center align-items-center border">
													<i class="fa-solid fa-calculator"></i>
												</div>
												<div class="mx-3">
													<p class="m-0 fw-bold fs-6">
														اختبار ايجاد الجذر التربيعي
													</p>
													<p class="m-0" style="color: #A0ADBB;">
														01:00pm - 02:00pm
													</p>
												</div>
											</div>
											<div class="d-flex align-items-center">
												<i class="fa-regular fa-pen-to-square mx-3" role="button"></i>
												<i onclick="openVerifingDelete()" class="fa-regular fa-trash-can" role="button"></i>
											</div>
										</div>
										<div class="my-3 d-flex border rounded align-items-center justify-content-between p-3">
											<div class="d-flex align-items-center">
												<div style="width: 40px;height: 40px;" class="rounded-circle d-flex justify-content-center align-items-center border">
													<i class="fa-solid fa-calculator"></i>
												</div>
												<div class="mx-3">
													<p class="m-0 fw-bold fs-6">
														اختبار ايجاد الجذر التربيعي
													</p>
													<p class="m-0" style="color: #A0ADBB;">
														01:00pm - 02:00pm
													</p>
												</div>
											</div>
											<div class="d-flex align-items-center">
												<i class="fa-regular fa-pen-to-square mx-3" role="button"></i>
												<i onclick="openVerifingDelete()" class="fa-regular fa-trash-can" role="button"></i>
											</div>
										</div>
										<div class="my-3 d-flex border rounded align-items-center justify-content-between p-3">
											<div class="d-flex align-items-center">
												<div style="width: 40px;height: 40px;" class="rounded-circle d-flex justify-content-center align-items-center border">
													<i class="fa-solid fa-calculator"></i>
												</div>
												<div class="mx-3">
													<p class="m-0 fw-bold fs-6">
														اختبار ايجاد الجذر التربيعي
													</p>
													<p class="m-0" style="color: #A0ADBB;">
														01:00pm - 02:00pm
													</p>
												</div>
											</div>
											<div class="d-flex align-items-center">
												<i class="fa-regular fa-pen-to-square mx-3" role="button"></i>
												<i onclick="openVerifingDelete()" class="fa-regular fa-trash-can" role="button"></i>
											</div>
										</div>
										<div class="my-3 d-flex border rounded align-items-center justify-content-between p-3">
											<div class="d-flex align-items-center">
												<div style="width: 40px;height: 40px;" class="rounded-circle d-flex justify-content-center align-items-center border">
													<i class="fa-solid fa-calculator"></i>
												</div>
												<div class="mx-3">
													<p class="m-0 fw-bold fs-6">
														اختبار ايجاد الجذر التربيعي
													</p>
													<p class="m-0" style="color: #A0ADBB;">
														01:00pm - 02:00pm
													</p>
												</div>
											</div>
											<div class="d-flex align-items-center">
												<i onclick="openupdateDate()" class="fa-regular fa-pen-to-square mx-3" role="button"></i>
												<i onclick="openVerifingDelete()" class="fa-regular fa-trash-can" role="button"></i>
											</div>
										</div>
									</div>
									<!--End add Dates-->
								</div>
							</div>
						</div>
					</div>

					<!--End wrapper-->


					<!--start progress bar container-->

					<div class="mb-5">
						<div class="container">
							<div class="row">
								<div class="col-md-6">
									<!--start add Dates-->
									<div class="recent-discuss mt-5 mt-md-0 rounded p-3 custom-border" >
										<div class="d-flex align-items-center justify-content-between py-5 px-3 fw-bold">
											<p class="m-0 fw-bold fs-4">أحدث النقاشات</p>
											<p class="m-0 regular-black-btn px-4 show-more-discuss py-2"  role="button">
												<span class="mx-2 fs-5">عرض المزيد</span>
											</p>
										</div>
										<div class="my-3 d-flex border rounded align-items-center justify-content-between p-3">
											<div class="d-flex align-items-center">
												<div style="width: 40px;height: 40px;" class="rounded-circle d-flex justify-content-center align-items-center border">
													<i class="fa-solid fa-calculator"></i>
												</div>
												<div class="mx-3">
													<p class="m-0 fw-bold fs-6">
														التطابق - الرياضيات
													</p>
													<p class="m-0" style="color: #A0ADBB;">
														تم التحديث منذ 1 دقيقة
													</p>
												</div>
											</div>
											<div class="d-flex align-items-center">
												<a href="comments/comments.html" class="m-0 rounded regular-black-btn px-3 py-1" role="button">
													<span>3</span> تعليقات جديدة
												</a>
											</div>
										</div>
										<div class="my-3 d-flex border rounded align-items-center justify-content-between p-3">
											<div class="d-flex align-items-center">
												<div style="width: 40px;height: 40px;" class="rounded-circle d-flex justify-content-center align-items-center border">
													<i class="fa-solid fa-calculator"></i>
												</div>
												<div class="mx-3">
													<p class="m-0 fw-bold fs-6">
														التطابق - الرياضيات
													</p>
													<p class="m-0" style="color: #A0ADBB;">
														تم التحديث منذ 1 دقيقة
													</p>
												</div>
											</div>
											<div class="d-flex align-items-center">
												<a href="comments/comments.html" class="m-0 rounded regular-black-btn px-3 py-1" role="button">
													<span>3</span> تعليقات جديدة
												</a>
											</div>
										</div>
										<div class="my-3 d-flex border rounded align-items-center justify-content-between p-3">
											<div class="d-flex align-items-center">
												<div style="width: 40px;height: 40px;" class="rounded-circle d-flex justify-content-center align-items-center border">
													<i class="fa-solid fa-calculator"></i>
												</div>
												<div class="mx-3">
													<p class="m-0 fw-bold fs-6">
														التطابق - الرياضيات
													</p>
													<p class="m-0" style="color: #A0ADBB;">
														تم التحديث منذ 1 دقيقة
													</p>
												</div>
											</div>
											<div class="d-flex align-items-center">
												<a href="comments/comments.html" class="m-0 rounded regular-black-btn px-3 py-1" role="button">
													<span>3</span> تعليقات جديدة
												</a>
											</div>
										</div>
										<div class="my-3 d-flex border rounded align-items-center justify-content-between p-3">
											<div class="d-flex align-items-center">
												<div style="width: 40px;height: 40px;" class="rounded-circle d-flex justify-content-center align-items-center border">
													<i class="fa-solid fa-calculator"></i>
												</div>
												<div class="mx-3">
													<p class="m-0 fw-bold fs-6">
														التطابق - الرياضيات
													</p>
													<p class="m-0" style="color: #A0ADBB;">
														تم التحديث منذ 1 دقيقة
													</p>
												</div>
											</div>
											<div class="d-flex align-items-center">
												<a href="comments/comments.html" class="m-0 rounded regular-black-btn px-3 py-1" role="button">
													<span>3</span> تعليقات جديدة
												</a>
											</div>
										</div>
										<div class="my-3 d-flex border rounded align-items-center justify-content-between p-3">
											<div class="d-flex align-items-center">
												<div style="width: 40px;height: 40px;" class="rounded-circle d-flex justify-content-center align-items-center border">
													<i class="fa-solid fa-calculator"></i>
												</div>
												<div class="mx-3">
													<p class="m-0 fw-bold fs-6">
														التطابق - الرياضيات
													</p>
													<p class="m-0" style="color: #A0ADBB;">
														تم التحديث منذ 1 دقيقة
													</p>
												</div>
											</div>
											<div class="d-flex align-items-center">
												<a href="comments/comments.html" class="m-0 rounded regular-black-btn px-3 py-1" role="button">
													<span>3</span> تعليقات جديدة
												</a>
											</div>
										</div>
										<div class="my-3 d-flex border rounded align-items-center justify-content-between p-3">
											<div class="d-flex align-items-center">
												<div style="width: 40px;height: 40px;" class="rounded-circle d-flex justify-content-center align-items-center border">
													<i class="fa-solid fa-calculator"></i>
												</div>
												<div class="mx-3">
													<p class="m-0 fw-bold fs-6">
														التطابق - الرياضيات
													</p>
													<p class="m-0" style="color: #A0ADBB;">
														تم التحديث منذ 1 دقيقة
													</p>
												</div>
											</div>
											<div class="d-flex align-items-center">
												<a href="comments/comments.html" class="m-0 rounded regular-black-btn px-3 py-1" role="button">
													<span>3</span> تعليقات جديدة
												</a>
											</div>
										</div>

									</div>
									<!--End add Dates-->
								</div>
								<div class="col-md-6">
									<div class="custom-border mt-5 mt-lg-0 p-5 rounded" style="height: 300px;">
										<div class="d-flex justify-content-between align-items-center p-3">
											<p class="m-0 fw-bold fs-3">ساعات العمل</p>
											<select style="width: 120px;" class="form-select" aria-label="Default select example">
													<option selected hidden>اسبوعيا</option>
													<option value="1">One</option>
													<option value="2">Two</option>
													<option value="3">Three</option>
											</select>
										</div>
										<div class="progress-bar">
											<progress value="75" min="0" max="100" style="visibility:hidden;height:0;width:0;">75%</progress>
										</div>
										<p class="m-0 text-center fs-6 mt-3 fw-bold"> <span>70</span> ساعة</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!--End progress bar container-->





					<!--start table-->
					<div class="container">
					<!--begin::Tables Widget 12-->
						<div class="custom-border border-bottom-0 d-flex align-items-center justify-content-between p-4">
							<p class="m-0 fw-bold fs-4">
								نتائج الاختبارات
							</p>
							<p class="m-0 regular-black-btn py-2 px-3" role="button">
								عرض المزيد
							</p>
						</div>
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
												<th class="min-w-125px">اسم الدرس</th>
												<th class="min-w-125px">المادة</th>
												<th class="min-w-125px">عدد الأسئلة</th>
												<th class="min-w-125px">عدد الطلاب</th>
												<th class="min-w-125px"></th>
											</tr>
										</thead>
										<!--end::Table head-->
										<!--begin::Table body-->
										<tbody>
											<tr class="p-5 mx-5">
												<td>
													<span class="d-flex align-items-center">
														<div style="width: 40px;height: 40px;" class="rounded-circle d-flex justify-content-center align-items-center border">
															<i class="fa-solid fa-calculator"></i>
														</div>
														<span class="m-0 mx-3">التطابق</span>
													</span>
												</td>
												<td>
													<span>رياضيات</span>
												</td>
												<td>
													<span><span>20</span> سؤال</span>
												</td>
												<td>
													<span><span>20</span> طالب</span>
												</td>
												<td>
													<span>
														<div class="progress">
															<div class="progress-done" data-done="90">
																90%
															</div>
														</div>
													</span>
												</td>
											</tr>
											<tr class="p-5 mx-5">
												<td>
													<span class="d-flex align-items-center">
														<div style="width: 40px;height: 40px;" class="rounded-circle d-flex justify-content-center align-items-center border">
															<i class="fa-solid fa-calculator"></i>
														</div>
														<span class="m-0 mx-3">التطابق</span>
													</span>
												</td>
												<td>
													<span>رياضيات</span>
												</td>
												<td>
													<span><span>20</span> سؤال</span>
												</td>
												<td>
													<span><span>20</span> طالب</span>
												</td>
												<td>
													<span>
														<div class="progress">
															<div class="progress-done" data-done="49">
																49%
															</div>
														</div>
													</span>
												</td>
											</tr>
											<tr class="p-5 mx-5">
												<td>
													<span class="d-flex align-items-center">
														<div style="width: 40px;height: 40px;" class="rounded-circle d-flex justify-content-center align-items-center border">
															<i class="fa-solid fa-calculator"></i>
														</div>
														<span class="m-0 mx-3">التطابق</span>
													</span>
												</td>
												<td>
													<span>رياضيات</span>
												</td>
												<td>
													<span><span>20</span> سؤال</span>
												</td>
												<td>
													<span><span>20</span> طالب</span>
												</td>
												<td>
													<span>
														<div class="progress">
															<div class="progress-done" data-done="90">
																90%
															</div>
														</div>
													</span>
												</td>
											</tr>
											<tr class="p-5 mx-5">
												<td>
													<span class="d-flex align-items-center">
														<div style="width: 40px;height: 40px;" class="rounded-circle d-flex justify-content-center align-items-center border">
															<i class="fa-solid fa-calculator"></i>
														</div>
														<span class="m-0 mx-3">التطابق</span>
													</span>
												</td>
												<td>
													<span>رياضيات</span>
												</td>
												<td>
													<span><span>20</span> سؤال</span>
												</td>
												<td>
													<span><span>20</span> طالب</span>
												</td>
												<td>
													<span>
														<div class="progress">
															<div class="progress-done" data-done="50">
																50%
															</div>
														</div>
													</span>
												</td>
											</tr>
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
					</div>

					<!--End tables-->



					<!--start add new dates content-->

					<div class="w-100 h-100 position-fixed top-0 start-0 end-0 bottom-0
						d-flex align-items-center justify-content-center d-none
					"
					 style="background-color:rgba(0, 0, 0, .3);z-index:9999;"
					 id="add-new-date-container"
					 >
					 	<div class="pop-up-meddile bg-white p-5 rounded"
						 id="add-new-date-content"
						style="width: 90%;">
							<div class="d-flex align-items-center justify-content-between">
								<p class="m-0"></p>
								<p class="m-0 fs-3 fw-bold">إضافة موعد جديد</p>
								<p class="m-0">
									<i id="add-new-date-Xmark" class="fa-solid fa-xmark fs-4" role="button"></i>
								</p>
							</div>
							<div>
								<label class="fs-3">اسم الموعد</label>
								<input type="text" class="form-control p-2" placeholder="اسم الموعد"/>
							</div>
							<div class="my-3">
								<label class="fs-3"> المادة الدراسية</label>
								<select class="form-select"  aria-label="multiple select example">
									<option selected hidden>المادة الدراسية</option>
									<option value="1">One</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
								</select>
							</div>
							<div class="my-3">
								<label class="fs-3">تاريخ الموعد</label>
								<div class="input-group mb-3">
									<input type="text" class="form-control" placeholder="تاريخ الموعد" aria-label="Username" aria-describedby="basic-addon1">
									<span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-calendar-days"></i></span>
								</div>
							</div>
							<div class="my-3">
								<label class="fs-3">وقت الموعد</label>
								<div class="input-group mb-3">
									<input type="text" class="form-control" placeholder="وقت الموعد" aria-label="Username" aria-describedby="basic-addon1">
									<span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-clock"></i></span>
								</div>
							</div>
							<div class="d-flex justify-content-center mt-5">
								<button class="regular-black-btn btn mx-2" id="add-new-date-cancel" >إلغاء</button>
								<button class="solid-black-btn btn mx-2" id="add-new-date-verify">تأكيد</button>
							</div>
						</div>
					</div>

					<!--End add new dates content-->

					<!--start update dates content-->

					<div class="w-100 h-100 position-fixed top-0 start-0 end-0 bottom-0
						d-flex align-items-center justify-content-center d-none
					"
					 style="background-color:rgba(0, 0, 0, .3);z-index:9999;"
					 id="update-date-container"
					 >
					 	<div class="pop-up-meddile bg-white p-5 rounded"
						 id="update-date-content"
						style="width: 90%;">
							<div class="d-flex align-items-center justify-content-between">
								<p class="m-0"></p>
								<p class="m-0 fs-3 fw-bold">تعديل موعد</p>
								<p class="m-0">
									<i id="update-date-Xmark" class="fa-solid fa-xmark fs-4" role="button"></i>
								</p>
							</div>
							<div>
								<label class="fs-3">اسم الموعد</label>
								<input type="text" class="form-control p-2" placeholder="اسم الموعد"/>
							</div>
							<div class="my-3">
								<label class="fs-3"> المادة الدراسية</label>
								<select class="form-select"  aria-label="multiple select example">
									<option selected hidden>المادة الدراسية</option>
									<option value="1">One</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
								</select>
							</div>
							<div class="my-3">
								<label class="fs-3">تاريخ الموعد</label>
								<div class="input-group mb-3">
									<input type="text" class="form-control" placeholder="تاريخ الموعد" aria-label="Username" aria-describedby="basic-addon1">
									<span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-calendar-days"></i></span>
								</div>
							</div>
							<div class="my-3">
								<label class="fs-3">وقت الموعد</label>
								<div class="input-group mb-3">
									<input type="text" class="form-control" placeholder="وقت الموعد" aria-label="Username" aria-describedby="basic-addon1">
									<span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-clock"></i></span>
								</div>
							</div>
							<div class="d-flex justify-content-center mt-5">
								<button class="btn regular-black-btn mx-2" id="update-date-cancel">إلغاء</button>
								<button class="btn solid-black-btn mx-2" id="update-date-verify">تأكيد</button>
							</div>
						</div>
					</div>

					<!--End update dates content-->


					<!--start add new dates verification true-->

					<div class="w-100 h-100 position-fixed top-0 start-0 end-0 bottom-0
						d-flex align-items-center justify-content-center d-none
					"
					id="add-new-date-container-verification"
					 style="background-color:rgba(0, 0, 0, .3);z-index:99999;"

					 >
					 	<div class="pop-up-meddile bg-white p-5 rounded" id="add-new-date-content-verification" style="width: 90%;height: 200px;">
							<div class="d-flex align-items-center justify-content-end">
								<p class="m-0">
									<i class="fa-solid fa-xmark fs-4" id="add-new-date-Xmark-verification" role="button"></i>
								</p>
							</div>
							<div class="text-center">
								<i class="fa-regular fa-circle-check" style="font-size: 80px;color: #46Ca5B;"></i>
								<p class="fs-4 fw-bold my-3">تم اضافة الموعد بنجاح</p>
							</div>
						</div>
					</div>

					<!--End add new dates verification true-->

					<!--start update dates verification true-->

					<div class="w-100 h-100 position-fixed top-0 start-0 end-0 bottom-0
						d-flex align-items-center justify-content-center d-none
					"
					 id="update-date-container-verification"
					 style="background-color:rgba(0, 0, 0, .3);z-index:99999;"
					 >
					 	<div class="pop-up-meddile bg-white p-5 rounded" id="update-date-content-verification" style="width: 90%;height: 200px;">
							<div class="d-flex align-items-center justify-content-end">
								<p class="m-0">
									<i class="fa-solid fa-xmark fs-4" id="update-date-Xmark-verification" role="button"></i>
								</p>
							</div>
							<div class="text-center">
								<i class="fa-regular fa-circle-check" style="font-size: 80px;color: #46Ca5B;"></i>
								<p class="fs-4 fw-bold my-3">تم تعديل الموعد بنجاح</p>
							</div>
						</div>
					</div>

					<!--End  update dates verification true-->





					<!--start delete date -->

					<div class="w-100 h-100 position-fixed top-0 start-0 end-0 bottom-0
						d-flex align-items-center justify-content-center d-none
					"
					id="delete-date-container"
					 style="background-color:rgba(0, 0, 0, .3);z-index:99999;"

					 >
					 	<div class="pop-up-meddile bg-white p-5 rounded" id="delete-date-content" style="width: 90%;">
							<div class="d-flex align-items-center justify-content-end">
								<p class="m-0">
									<i class="fa-solid fa-xmark fs-4" id="delete-date-Xmark" role="button"></i>
								</p>
							</div>
							<div class="text-center">
								<i class="fa-solid fa-triangle-exclamation" style="font-size: 80px;color: rgb(137, 3, 3);"></i>
								<p class="fs-4 fw-bold my-3">هل تريد حذف الميعاد ؟</p>
							</div>
							<div class="d-flex align-items-center justify-content-center">
								<button id="delete-date-cancel" class="btn regular-black-btn border mx-3">لا</button>
								<button id="delete-date-verify" class="btn solid-black-btn border mx-3">نعم</button>
							</div>
						</div>
					</div>

					<!--End delete date -->




					<!--start delte dates verification true-->

					<div class="w-100 h-100 position-fixed top-0 start-0 end-0 bottom-0
						d-flex align-items-center justify-content-center d-none
					"
					id="delete-date-container-verification"
					 style="background-color:rgba(0, 0, 0, .3);z-index:99999;"

					 >
					 	<div class="pop-up-meddile bg-white p-5 rounded" id="delete-date-content-verification" style="width: 90%;height: 200px;">
							<div class="d-flex align-items-center justify-content-end">
								<p class="m-0">
									<i class="fa-solid fa-xmark fs-4" id="delete-date-Xmark-verification" role="button"></i>
								</p>
							</div>
							<div class="text-center">
								<i class="fa-regular fa-circle-check" style="font-size: 80px;color: #46Ca5B;"></i>
								<p class="fs-4 fw-bold my-3">تم حذف الموعد بنجاح</p>
							</div>
						</div>
					</div>

					<!--End delte dates verification true-->


					<!--satrt discuss sidebar-->

					<div class="discuss-sidebar-container position-fixed w-100 h-100 top-0 start-0 d-none" style="background: rgba(0, 0, 0, .3);z-index: 999999;">
						<div class="discuss-sidebar-content p-5 position-absolute top-0 h-100 bg-white" style="width: 300px;">
							<div class="rounded-circle text-center position-absolute"style="width: 35px;height: 35px;background: #5f5D5D;line-height: 38px;right: -38px;top:13px">
								<i class="discuss-sidebar-Xmark fa fa-xmark fs-3 text-white" role="button"></i>
							</div>
							<h3 class="fs-2">النقاشات</h3>


							<div class="accordion accordion-flush" id="accordionFlushExample">
								<div class="accordion-item">
									<h2 class="accordion-header" id="flush-headingOne">
										<button class="accordion-button collapsed" style="border: 1px solid #AAAAAA;border-top-left-radius: 5px;border-top-right-radius: 5px;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
											<span style="padding-right: 40px;font-size: 16px;" class="fw-bold">الرياضيات</span>
											<i class="fa-solid fa-calculator fs-1 position-absolute" style="top: 17px;right: 28px;"></i>
										</button>
									</h2>
									<div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
										<div class="accordion-body" style="border: 1px solid #AAAAAA;border-top: none;border-bottom-left-radius: 5px;border-bottom-right-radius: 5px;">
											<ul class="m-0 p-0">
												<a href="comments/comments.html" style="color: #1e1e1e;" class="p-4 d-flex discuss-comment align-items-center justify-content-between" role="button">
													<span>التفاضل</span>
													<span>(13)</span>
												</a>
												<a href="comments/comments.html" style="color: #1e1e1e;" class="p-4 d-flex discuss-comment align-items-center justify-content-between" role="button">
													<span>التفاضل</span>
													<span>(13)</span>
												</a>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="accordion accordion-flush mt-5" id="accordionFlushExample">
								<div class="accordion-item">
									<h2 class="accordion-header" id="flush-headingTwo">
										<button class="accordion-button collapsed" style="border: 1px solid #AAAAAA;border-top-left-radius: 5px;border-top-right-radius: 5px;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
											<span style="padding-right: 40px;font-size: 16px;" class="fw-bold">علوم</span>
											<i class="fa-solid  fa-microscope fs-1 position-absolute" style="top: 17px;right: 28px;"></i>

										</button>
									</h2>
									<div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
										<div class="accordion-body" style="border: 1px solid #AAAAAA;border-top: none;border-bottom-left-radius: 5px;border-bottom-right-radius: 5px;">
											<ul class="m-0 p-0">
												<a href="comments/comments.html" style="color: #1e1e1e;" class="p-4 d-flex discuss-comment align-items-center justify-content-between" role="button">
													<span>التفاضل</span>
													<span>(13)</span>
												</a>
												<a href="comments/comments.html" style="color: #1e1e1e;" class="p-4 d-flex discuss-comment align-items-center justify-content-between" role="button">
													<span>التفاضل</span>
													<span>(13)</span>
												</a>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="accordion accordion-flush mt-5" id="accordionFlushExample">
								<div class="accordion-item">
									<h2 class="accordion-header" id="flush-headingThree">
										<button class="accordion-button collapsed" style="border: 1px solid #AAAAAA;border-top-left-radius: 5px;border-top-right-radius: 5px;" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
											<span style="padding-right: 40px;font-size: 16px;" class="fw-bold">الغة الانجليزية</span>
											<i class="fa-solid fa-book-open fs-1 position-absolute" style="top: 17px;right: 28px;"></i>
										</button>
									</h2>
									<div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
										<div class="accordion-body" style="border: 1px solid #AAAAAA;border-top: none;border-bottom-left-radius: 5px;border-bottom-right-radius: 5px;">
											<ul class="m-0 p-0">
												<a href="comments/comments.html" style="color: #1e1e1e;" class="p-4 d-flex discuss-comment align-items-center justify-content-between" role="button">
													<span>التفاضل</span>
													<span>(13)</span>
												</a>
												<a href="comments/comments.html" style="color: #1e1e1e;" class="p-4 d-flex discuss-comment align-items-center justify-content-between" role="button">
													<span>التفاضل</span>
													<span>(13)</span>
												</a>

											</ul>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>

					<!--End discuss sidebae-->



					</div>
					<!--end:::Main-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::App-->


@endsection













































