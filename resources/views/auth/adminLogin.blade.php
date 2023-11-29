<!DOCTYPE html>

<html direction="rtl" dir="rtl" style="direction: rtl">
	<!--begin::Head-->
	<head><base href=""/>
		<title>Tallaqy</title>
		<meta charset="utf-8" />
		<meta name="description" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<!-- <meta property="og:title" content="Metronic - Bootstrap Admin Template, HTML, VueJS, React, Angular. Laravel, Asp.Net Core, Ruby on Rails, Spring Boot, Blazor, Django, Express.js, Node.js, Flask Admin Dashboard Theme & Template" /> -->
		<!-- <meta property="og:url" content="https://keenthemes.com/metronic" /> -->
		<meta property="og:site_name" content="Tallaqy" />
		<!-- <link rel="canonical" href="https://preview.keenthemes.com/metronic8" /> -->
		<link rel="shortcut icon" href="{{asset('admin/media/logos/rsz_logo.ico')}}" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used for this page only)-->
		<link href="{{asset('admin/plugins/custom/fullcalendar/fullcalendar.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
		<link  href="{{asset('admin/plugins/custom/datatables/datatables.bundle.rtl.css')}}" rel="stylesheet"  type="text/css">
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="{{asset('admin/plugins/global/plugins.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('admin/css/style.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('admin/css/globalClasses.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('admin/css/dashboard.rtl.css')}}" rel="stylesheet" type="text/css" />
		<link href="{{asset('admin/css/calender.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<script>// Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }</script>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_app_body" data-kt-app-layout="" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">




        <section class="d-flex" style="min-height: 100vh;">
            <div class="auth-form">
                <div class="w-75 mx-auto">
                    <div style="padding-top: 70px;">
                        <img src="{{asset('admin/media/teacher dashboard/logo.svg')}}" style="width: 200px;"/>
                    </div>
                    <div style="margin-top:90px">
                        <h2  style="font-size: 35px;;">تسجيل الدخول</h2>
                        <p class="m-0 fs-3 my-3 text-gray-custom" >استخدم بيانات الاعتماد الخاصة بك للوصول إلى حسابك.</p>
                    </div>
                    @if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif
                    <form class="mt-10" action="{{ route('admin.login') }}" method="POST">
                        {{ csrf_field() }}
                        <div>
                            <h3>البريد الإلكتروني أو رقم الهاتف</h3>
                            <input class="form-control " type="email" name="email" placeholder="البريد الألكتروني أو رقم الهاتف"/>
                        </div>
                        <div class="mt-10">
                            <h3>كلمة السر</h3>
                            <div class="position-relative">
                                <input style="direction: rtl !important" class="form-control input_password" type="password" name="password" placeholder="كلمة السر"/>
                                <span class="position-absolute" style="top: 13px;left: 8px;">
                                    <i class="fa-regular fa-eye-slash text-gray-custom fs-4 input_eye" role="button"></i>
                                </span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center justify-content-between mt-3">
                            <div class="d-flex align-items-center">
                                <input type="checkbox"/>
                                <span class="mx-3 fw-bolder fs-5">تذكرني ؟</span>
                            </div>
                            <a href="{{route('admin.password.forgot')}}" class="m-0 fw-bolder fs-5 text-black">هل نسيت كلمة المرور ؟</a>
                        </div>
                        <button type="submit" class="btn solid-black-btn d-block mx-auto w-100 fs-3 mt-6">تسجيل الدخول</button>
                        <div class="d-flex justify-content-center fw-bold mt-10 fs-4">

                        </div>
                    </form>
                </div>
            </div>
            <div class="auth-image">

            </div>
        </section>

	</body>
	<!--end::Body-->





    <script src="{{asset('admin/js/dashboard/login.js')}}"></script>
</html>
