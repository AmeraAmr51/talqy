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
        <style>
            .t{
                padding-top: 20px;
                padding-bottom: 20px;
            }
            .page-link.active, .active > .page-link {
    z-index: 3;
    color: var(--bs-pagination-active-color);
    background-color: var(--black-color);
    border-color: var(--bs-pagination-active-border-color);
}
            </style>
        @yield('head')

    </head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_app_body" data-kt-app-layout="" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
		<!--begin::Theme mode setup on page load-->
		<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }</script>
		<!--end::Theme mode setup on page load-->
		<!--begin::App-->

		<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
			<!--begin::Page-->
			<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
				<!--begin::Header-->
				<div id="kt_app_header" class="app-header" data-kt-sticky="true" data-kt-sticky-activate="{default: true, lg: true}" data-kt-sticky-name="app-header-minimize" data-kt-sticky-offset="{default: '200px', lg: '0'}" data-kt-sticky-animation="false">
					<!--begin::Header container-->
					<div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
						<!--begin::Sidebar mobile toggle-->
						<div class="d-flex align-items-center d-lg-none ms-n3 me-1 me-md-2" title="Show sidebar menu">
							<div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
								<i class="ki-duotone ki-abstract-14 fs-2 fs-md-1">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
							</div>
						</div>
						<!--end::Sidebar mobile toggle-->
						<!--begin::Mobile logo-->
						<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
							<a href="mainPage.html" class="d-lg-none">
								<img alt="Logo" src="{{asset('admin/media/teacher dashboard/logo.svg')}}" style="width: 70px;" />
							</a>
						</div>
						<!--end::Mobile logo-->
						<!--begin::Header wrapper-->
						<div class="d-flex align-items-center justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
							<!--begin::Menu wrapper-->
							<div>

							</div>
							<!--end::Menu wrapper-->
							<!--begin::Navbar-->
							<div class="app-navbar flex-shrink-0">
								<!--begin::Search-->
								<div class="app-navbar-item align-items-stretch ms-1 ms-md-4">
									<!--begin::Search-->
									<div id="kt_header_search" class="header-search d-flex align-items-stretch" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-menu-trigger="auto" data-kt-menu-overflow="false" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">
										<!--begin::Search toggle-->
										<div class="d-flex tt align-items-center" data-kt-search-element="toggle" id="kt_header_search_toggle">
											<div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px">
												<i class="ki-duotone ki-magnifier fs-2">
													<span class="path1"></span>
													<span class="path2"></span>
												</i>
											</div>
										</div>
										<!--end::Search toggle-->
										<!--begin::Menu-->
										<div data-kt-search-element="content" class="pb-0 menu menu-sub menu-sub-dropdown p-7 w-325px w-md-375px">
											<!--begin::Wrapper-->
											<div data-kt-search-element="wrapper">
												<!--begin::Form-->
												<form data-kt-search-element="form" class="w-100 position-relative mb-3" autocomplete="off">
													<!--begin::Icon-->
													<i class="ki-duotone ki-magnifier fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-0">
														<span class="path1"></span>
														<span class="path2"></span>
													</i>
													<!--end::Icon-->
													<!--begin::Input-->
													<input type="text" class="search-input form-control form-control-flush ps-10" name="search" value="" placeholder="Search..." data-kt-search-element="input" />
													<!--end::Input-->
													<!--begin::Spinner-->
													<span class="search-spinner position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-1" data-kt-search-element="spinner">
														<span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
													</span>
													<!--end::Spinner-->
													<!--begin::Reset-->
													<span class="search-reset btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none" data-kt-search-element="clear">
														<i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0">
															<span class="path1"></span>
															<span class="path2"></span>
														</i>
													</span>
													<!--end::Reset-->

												</form>
												<!--end::Form-->
												<!--begin::Separator-->
												<div class="separator border-gray-200 mb-6"></div>
												<!--end::Separator-->


												<!--begin::Empty-->
												<div data-kt-search-element="empty" class="text-center d-none">
													<!--begin::Icon-->
													<div class="pt-10 pb-10">
														<i class="ki-duotone ki-search-list fs-4x opacity-50">
															<span class="path1"></span>
															<span class="path2"></span>
															<span class="path3"></span>
														</i>
													</div>
													<!--end::Icon-->
													<!--begin::Message-->
													<div class="pb-15 fw-semibold">
														<h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
														<div class="text-muted fs-7">Please try again with a different query</div>
													</div>
													<!--end::Message-->
												</div>
												<!--end::Empty-->
											</div>
											<!--end::Wrapper-->
											<!--begin::Preferences-->
											<form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
												<!--begin::Heading-->
												<h3 class="fw-semibold text-dark mb-7">Advanced Search</h3>
												<!--end::Heading-->
												<!--begin::Input group-->
												<div class="mb-5">
													<input type="text" class="form-control form-control-sm form-control-solid" placeholder="Contains the word" name="query" />
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="mb-5">
													<!--begin::Radio group-->
													<div class="nav-group nav-group-fluid">
														<!--begin::Option-->
														<label>
															<input type="radio" class="btn-check" name="type" value="has" checked="checked" />
															<span class="btn btn-sm btn-color-muted btn-active btn-active-primary">All</span>
														</label>
														<!--end::Option-->
														<!--begin::Option-->
														<label>
															<input type="radio" class="btn-check" name="type" value="users" />
															<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Users</span>
														</label>
														<!--end::Option-->
														<!--begin::Option-->
														<label>
															<input type="radio" class="btn-check" name="type" value="orders" />
															<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Orders</span>
														</label>
														<!--end::Option-->
														<!--begin::Option-->
														<label>
															<input type="radio" class="btn-check" name="type" value="projects" />
															<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Projects</span>
														</label>
														<!--end::Option-->
													</div>
													<!--end::Radio group-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="mb-5">
													<input type="text" name="assignedto" class="form-control form-control-sm form-control-solid" placeholder="Assigned to" value="" />
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="mb-5">
													<input type="text" name="collaborators" class="form-control form-control-sm form-control-solid" placeholder="Collaborators" value="" />
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="mb-5">
													<!--begin::Radio group-->
													<div class="nav-group nav-group-fluid">
														<!--begin::Option-->
														<label>
															<input type="radio" class="btn-check" name="attachment" value="has" checked="checked" />
															<span class="btn btn-sm btn-color-muted btn-active btn-active-primary">Has attachment</span>
														</label>
														<!--end::Option-->
														<!--begin::Option-->
														<label>
															<input type="radio" class="btn-check" name="attachment" value="any" />
															<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Any</span>
														</label>
														<!--end::Option-->
													</div>
													<!--end::Radio group-->
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="mb-5">
													<select name="timezone" aria-label="Select a Timezone" data-control="select2" data-dropdown-parent="#kt_header_search" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
														<option value="next">Within the next</option>
														<option value="last">Within the last</option>
														<option value="between">Between</option>
														<option value="on">On</option>
													</select>
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="row mb-8">
													<!--begin::Col-->
													<div class="col-6">
														<input type="number" name="date_number" class="form-control form-control-sm form-control-solid" placeholder="Lenght" value="" />
													</div>
													<!--end::Col-->
													<!--begin::Col-->
													<div class="col-6">
														<select name="date_typer" aria-label="Select a Timezone" data-control="select2" data-dropdown-parent="#kt_header_search" data-placeholder="Period" class="form-select form-select-sm form-select-solid">
															<option value="days">Days</option>
															<option value="weeks">Weeks</option>
															<option value="months">Months</option>
															<option value="years">Years</option>
														</select>
													</div>
													<!--end::Col-->
												</div>
												<!--end::Input group-->
												<!--begin::Actions-->
												<div class="d-flex justify-content-end">
													<button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="advanced-options-form-cancel">Cancel</button>
													<a href="../../demo1/dist/pages/search/horizontal.html" class="btn btn-sm fw-bold btn-primary" data-kt-search-element="advanced-options-form-search">Search</a>
												</div>
												<!--end::Actions-->
											</form>
											<!--end::Preferences-->
											<!--begin::Preferences-->
											<form data-kt-search-element="preferences" class="pt-1 d-none">
												<!--begin::Heading-->
												<h3 class="fw-semibold text-dark mb-7">Search Preferences</h3>
												<!--end::Heading-->
												<!--begin::Input group-->
												<div class="pb-4 border-bottom">
													<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
														<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Projects</span>
														<input class="form-check-input" type="checkbox" value="1" checked="checked" />
													</label>
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="py-4 border-bottom">
													<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
														<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Targets</span>
														<input class="form-check-input" type="checkbox" value="1" checked="checked" />
													</label>
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="py-4 border-bottom">
													<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
														<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Affiliate Programs</span>
														<input class="form-check-input" type="checkbox" value="1" />
													</label>
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="py-4 border-bottom">
													<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
														<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Referrals</span>
														<input class="form-check-input" type="checkbox" value="1" checked="checked" />
													</label>
												</div>
												<!--end::Input group-->
												<!--begin::Input group-->
												<div class="py-4 border-bottom">
													<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
														<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Users</span>
														<input class="form-check-input" type="checkbox" value="1" />
													</label>
												</div>
												<!--end::Input group-->
												<!--begin::Actions-->
												<div class="d-flex justify-content-end pt-7">
													<button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="preferences-dismiss">Cancel</button>
													<button type="submit" class="btn btn-sm fw-bold btn-primary">Save Changes</button>
												</div>
												<!--end::Actions-->
											</form>
											<!--end::Preferences-->
										</div>
										<!--end::Menu-->
									</div>
									<!--end::Search-->
								</div>
								<!--end::Search-->

								<!--begin::messages-->
								<div class="app-navbar-item ms-1 ms-md-4">
									<!--begin::Menu- wrapper-->
									<div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px" data-kt-menu-trigger="{default: 'click'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" id="kt_menu_item_wow">
										<i class="fa-solid fa-comment fs-2"></i>
									</div>
									<!--begin::Menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true" id="kt_menu_notifications">
										<!--begin::Tab content-->
										<div class="tab-content" style="height: 400px;overflow-y: scroll;">
											<!--start chat-->
											<div class="p-5">
												<div class="chat-upper d-flex align-items-center justify-content-center">
													<p class="m-0 fw-bold fs-3">الدردشة</p>
												</div>
												<div class="d-flex align-items-center mt-4 justify-content-between p-4 rounded" style="background-color: #f9f9f9;">
													<div class="d-flex align-items-center">
														<img alt="user-image" src="{{asset('admin/media/teacher dashboard/saudi.jpg')}}" style="width: 40px;height: 40px;" class="rounded-circle"/>
														<div class="mx-4">
															<p class="m-0 fw-bold">اسم الطالب</p>
															<p class="m-0 text-gray-600">هذا نص تجريبي</p>
														</div>
													</div>
													<p class="m-0 text-gray-600">
														jul23, 2022
													</p>
												</div>
												<div class="d-flex align-items-center mt-4 justify-content-between p-4 rounded" style="background-color: #f9f9f9;">
													<div class="d-flex align-items-center">
														<img alt="user-image" src="{{asset('admin/media/teacher dashboard/saudi.jpg')}}" style="width: 40px;height: 40px;" class="rounded-circle"/>
														<div class="mx-4">
															<p class="m-0 fw-bold">اسم الطالب</p>
															<p class="m-0 text-gray-600">هذا نص تجريبي</p>
														</div>
													</div>
													<p class="m-0 text-gray-600">
														jul23, 2022
													</p>
												</div>
												<div class="d-flex align-items-center mt-4 justify-content-between p-4 rounded" style="background-color: #f9f9f9;">
													<div class="d-flex align-items-center">
														<img alt="user-image" src="{{asset('admin/media/teacher dashboard/saudi.jpg')}}" style="width: 40px;height: 40px;" class="rounded-circle"/>
														<div class="mx-4">
															<p class="m-0 fw-bold">اسم الطالب</p>
															<p class="m-0 text-gray-600">هذا نص تجريبي</p>
														</div>
													</div>
													<p class="m-0 text-gray-600">
														jul23, 2022
													</p>
												</div>
												<div class="d-flex align-items-center mt-4 justify-content-between p-4 rounded" >
													<div class="d-flex align-items-center">
														<img alt="user-image" src="{{asset('admin/media/teacher dashboard/saudi.jpg')}}" style="width: 40px;height: 40px;" class="rounded-circle"/>
														<div class="mx-4">
															<p class="m-0 fw-bold">اسم الطالب</p>
															<p class="m-0 text-gray-600">هذا نص تجريبي</p>
														</div>
													</div>
													<p class="m-0 text-gray-600">
														jul23, 2022
													</p>
												</div>
												<div class="d-flex align-items-center mt-4 justify-content-between p-4 rounded" >
													<div class="d-flex align-items-center">
														<img alt="user-image" src="{{asset('admin/media/teacher dashboard/saudi.jpg')}}" style="width: 40px;height: 40px;" class="rounded-circle"/>
														<div class="mx-4">
															<p class="m-0 fw-bold">اسم الطالب</p>
															<p class="m-0 text-gray-600">هذا نص تجريبي</p>
														</div>
													</div>
													<p class="m-0 text-gray-600">
														jul23, 2022
													</p>
												</div>

											</div>
											<!--End chat-->
										</div>
										<!--end::Tab content-->
									</div>
									<!--end::Menu-->
									<!--end::Menu wrapper-->
								</div>
								<!--end::messages-->

								<!--begin::notification-->
								<div class="app-navbar-item ms-1 ms-md-4">
									<!--begin::Menu wrapper-->
									<div class="btn btn-icon btn-custom btn-icon-muted btn-active-light btn-active-color-primary w-35px h-35px" data-kt-menu-trigger="{default: 'click'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
										<i class="fa-solid fa-bell fs-2"></i>
									</div>
									<!--begin::My apps-->
									<div class="menu menu-sub menu-sub-dropdown menu-column w-100 w-sm-350px" data-kt-menu="true" >

											<div class="p-5" style="height: 400px;overflow-y: scroll;">
												<div class="chat-upper d-flex align-items-center justify-content-center">
													<p class="m-0 fw-bold fs-3">الاشعارات</p>
												</div>
												<div class="d-flex align-items-center mt-4 justify-content-between p-4 rounded" style="background-color: #f9f9f9;">
													<div class="d-flex align-items-center">
														<i class="fa-regular fa-bell fs-2"></i>
														<div class="mx-4">
															<p class="m-0 fw-bold">تمت الموافقة علي الباقة الفضية</p>
															<div class="m-0 text-gray-600 d-flex align-items-center">
																<i class="fa fa-clock"></i>
																<p class="m-0 mx-3">jul 23, 2022</p>
															</div>
														</div>
													</div>
												</div>
												<div class="d-flex align-items-center mt-4 justify-content-between p-4 rounded" style="background-color: #f9f9f9;">
													<div class="d-flex align-items-center">
														<i class="fa-regular fa-bell fs-2"></i>
														<div class="mx-4">
															<p class="m-0 fw-bold">تمت الموافقة علي الباقة الفضية</p>
															<div class="m-0 text-gray-600 d-flex align-items-center">
																<i class="fa fa-clock"></i>
																<p class="m-0 mx-3">jul 23, 2022</p>
															</div>
														</div>
													</div>
												</div>
												<div class="d-flex align-items-center mt-4 justify-content-between p-4 rounded" style="background-color: #f9f9f9;">
													<div class="d-flex align-items-center">
														<i class="fa-regular fa-bell fs-2"></i>
														<div class="mx-4">
															<p class="m-0 fw-bold">تمت الموافقة علي الباقة الفضية</p>
															<div class="m-0 text-gray-600 d-flex align-items-center">
																<i class="fa fa-clock"></i>
																<p class="m-0 mx-3">jul 23, 2022</p>
															</div>
														</div>
													</div>
												</div>
												<div class="d-flex align-items-center mt-4 justify-content-between p-4 rounded" style="background-color: #f9f9f9;">
													<div class="d-flex align-items-center">
														<i class="fa-regular fa-bell fs-2"></i>
														<div class="mx-4">
															<p class="m-0 fw-bold">تمت الموافقة علي الباقة الفضية</p>
															<div class="m-0 text-gray-600 d-flex align-items-center">
																<i class="fa fa-clock"></i>
																<p class="m-0 mx-3">jul 23, 2022</p>
															</div>
														</div>
													</div>
												</div>
												<div class="d-flex align-items-center mt-4 justify-content-between p-4 rounded">
													<div class="d-flex align-items-center">
														<i class="fa-regular fa-bell fs-2"></i>
														<div class="mx-4">
															<p class="m-0 fw-bold">تمت الموافقة علي الباقة الفضية</p>
															<div class="m-0 text-gray-600 d-flex align-items-center">
																<i class="fa fa-clock"></i>
																<p class="m-0 mx-3">jul 23, 2022</p>
															</div>
														</div>
													</div>
												</div>
												<div class="d-flex align-items-center mt-4 justify-content-between p-4 rounded" >
													<div class="d-flex align-items-center">
														<i class="fa-regular fa-bell fs-2"></i>
														<div class="mx-4">
															<p class="m-0 fw-bold">تمت الموافقة علي الباقة الفضية</p>
															<div class="m-0 text-gray-600 d-flex align-items-center">
																<i class="fa fa-clock"></i>
																<p class="m-0 mx-3">jul 23, 2022</p>
															</div>
														</div>
													</div>
												</div>


											</div>

									</div>
									<!--end::My apps-->
									<!--end::Menu wrapper-->
								</div>
								<!--end::notification-->
								<!--begin::User menu-->
								<div class="app-navbar-item ms-1 ms-md-4" id="kt_header_user_menu_toggle">
									<!--begin::Menu wrapper-->
									<div class="cursor-pointer d-flex align-items-center symbol symbol-35px" data-kt-menu-trigger="{default: 'click'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
										<img src="{{asset('admin/media/teacher dashboard/saudi.jpg')}}" class="rounded-circle" alt="user" />
										<p class="m-0 mx-2 fw-bold">{{Auth::guard('admin')->user()->name}} </p>
										<i class="fa-solid fa-chevron-down" style="color:#000"></i>
									</div>
									<!--begin::User account menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
										<div class="p-5">
											<div class="d-flex align-items-center px-3 py-3 navbar-user" role="button">
												<i class="fa-regular fa-circle-user fs-2"></i>
												<p class="m-0 fw-bold fs-4 mx-3">الملف الشخصي</p>
											</div>
											<div class="d-flex align-items-center px-3  py-3  navbar-user" role="button">
												<i class="fa-solid fa-arrow-right-from-bracket fs-2"></i>
												<p class="m-0 fw-bold fs-4 mx-3"><a href="{{route('admin.logout')}}">تسجيل الخروج </a></p>
											</div>
										</div>
										<!--begin::Menu item-->

										<!--end::Menu item-->


									</div>
									<!--end::User account menu-->
									<!--end::Menu wrapper-->
								</div>
								<!--end::User menu-->

								<!--begin::Aside toggle-->
								<!--end::Header menu toggle-->
							</div>
							<!--end::Navbar-->
						</div>
						<!--end::Header wrapper-->
					</div>
					<!--end::Header container-->
				</div>
				<!--end::Header-->
                <!--begin::Wrapper-->
				<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
					<!--begin::Sidebar-->
					<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
						<!--begin::Logo-->
						<div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
							<!--begin::Logo image-->
							<a href="mainPage.html">
								<img alt="Logo" src="{{asset('admin/media/teacher dashboard/logo.svg')}}" style="width: 150px;" class="app-sidebar-logo-default" />
								<img alt="Logo" src="{{asset('admin/media/teacher dashboard/rsz_logo.png')}}" style="width: 40px;"  class=" app-sidebar-logo-minimize" />
							</a>
							<!--end::Logo image-->
							<!--begin::Sidebar toggle-->
							<!--begin::Minimized sidebar setup:
            if (isset($_COOKIE["sidebar_minimize_state"]) && $_COOKIE["sidebar_minimize_state"] === "on") {
                1. "src/js/layout/sidebar.js" adds "sidebar_minimize_state" cookie value to save the sidebar minimize state.
                2. Set data-kt-app-sidebar-minimize="on" attribute for body tag.
                3. Set data-kt-toggle-state="active" attribute to the toggle element with "kt_app_sidebar_toggle" id.
                4. Add "active" class to to sidebar toggle element with "kt_app_sidebar_toggle" id.
            }
        -->
							<div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary h-30px w-30px position-absolute top-50 start-100 translate-middle rotate" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="app-sidebar-minimize">
								<i class="ki-duotone ki-black-left-line fs-3 rotate-180">
									<span class="path1"></span>
									<span class="path2"></span>
								</i>
							</div>
							<!--end::Sidebar toggle-->
						</div>
						<!--end::Logo-->
						<!--begin::sidebar menu-->
						<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
							<!--begin::Menu wrapper-->
							<div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper">
								<!--begin::Scroll wrapper-->
								<div id="kt_app_sidebar_menu_scroll" class="scroll-y my-5 mx-3" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
									<!--begin::Menu-->
									<div class="menu menu-column menu-rounded menu-sub-indention fw-semibold fs-6" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">

										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item active-sidebar  menu-accordion">
											<!--begin:Menu link-->
											<a href="{{route('admin.dashboard')}}">
											<span class="menu-link active-item-sidebar">
												<span class="menu-icon">
													<i class="fa-solid fa-house fs-3"></i>
												</span>
												<span class="menu-title">الصفحة الرئيسية</span>
											</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
                                        <!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-icon">
													<i class="fa-solid fa-book fs-3"></i>
												</span>
												<span class="menu-title">المعلمين</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="{{route('teachers.show')}}">
														<span class="menu-bullet">
															<i class="fa-solid fa-book-open fs-5"></i>
														</span>
														<span class="menu-title">جميع المعلمين</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
                                                <!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="{{route('add.teacher')}}">
														<span class="menu-bullet">
															<i class="fa-solid fa-book-open fs-5"></i>
														</span>
														<span class="menu-title">إضافة معلم</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->

											</div>
											<!--end:Menu sub-->
										</div>
                                        <!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-icon">
													<i class="fa-solid fa-book fs-3"></i>
												</span>
												<span class="menu-title">المكتبة</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="{{route('library.index')}}">
														<span class="menu-bullet">
															<i class="fa-solid fa-book-open fs-5"></i>
														</span>
														<span class="menu-title">الكتب  </span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
                                                <!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="{{route('library.create')}}">
														<span class="menu-bullet">
															<i class="fa-solid fa-book-open fs-5"></i>
														</span>
														<span class="menu-title"> إضافة كتاب</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->

											</div>
											<!--end:Menu sub-->
										</div>
                                        <!--begin:Menu item-->
									</div>
									<!--end::Menu-->
								</div>
								<!--end::Scroll wrapper-->
							</div>
							<!--end::Menu wrapper-->
						</div>
						<!--end::sidebar menu-->

					</div>
					<!--end::Sidebar-->
					<!--begin::Main-->
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                @yield('content')

                <!--begin::Javascript-->
		<script>var hostUrl = "assets/admin/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="{{asset('admin/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('admin/js/scripts.bundle.js')}}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="{{asset('admin/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}"></script>
		<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/map.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
		<script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
		<script src="{{asset('admin/plugins/custom/datatables/datatables.bundle.js')}}"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="{{asset('admin/js/widgets.bundle.js')}}"></script>
		<script src="{{asset('admin/js/custom/widgets.js')}}"></script>
		<script src="{{asset('admin/js/custom/apps/chat/chat.js')}}"></script>
		<script src="{{asset('admin/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
		<script src="{{asset('admin/js/custom/utilities/modals/create-app.js')}}"></script>
		<script src="{{asset('admin/js/custom/utilities/modals/new-target.js')}}"></script>
		<script src="{{asset('admin/js/custom/utilities/modals/users-search.js')}}"></script>
		<script src="{{asset('admin/js/calender.js')}}"></script>
		<script src="{{asset('admin/js/dashboard/popUp.js')}}"></script>
		<script src="{{asset('admin/js/dashboard/progressbar.js')}}"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->

        @yield('js')
	</body>
	<!--end::Body-->
</html>
