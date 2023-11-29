<!DOCTYPE html>

<html direction="rtl" dir="rtl" style="direction: rtl">
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
							<a href="../index.html" class="d-lg-none">
								<img alt="Logo" src="{{asset('../admin/media/teacher dashboard/logo.svg')}}" style="width: 70px;" />
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
														<img alt="user-image" src="{{asset('../admin/media/teacher dashboard/saudi.jpg')}}" style="width: 40px;height: 40px;" class="rounded-circle"/>
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
														<img alt="user-image" src="{{asset('../admin/media/teacher dashboard/saudi.jpg')}}" style="width: 40px;height: 40px;" class="rounded-circle"/>
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
														<img alt="user-image" src="{{asset('../admin/media/teacher dashboard/saudi.jpg')}}" style="width: 40px;height: 40px;" class="rounded-circle"/>
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
														<img alt="user-image" src="{{asset('../admin/media/teacher dashboard/saudi.jpg')}}" style="width: 40px;height: 40px;" class="rounded-circle"/>
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
														<img alt="user-image" src="{{asset('../admin/media/teacher dashboard/saudi.jpg')}}" style="width: 40px;height: 40px;" class="rounded-circle"/>
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
										<img src="{{asset('../admin/media/teacher dashboard/saudi.jpg')}}" class="rounded-circle" alt="user" />
										<p class="m-0 mx-2 fw-bold">أحمد أمير</p>
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
												<p class="m-0 fw-bold fs-4 mx-3">نسجبل الخروج</p>
											</div>
										</div>
										<!--begin::Menu item-->
										<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
											<a href="#" class="menu-link px-5">
												<span class="menu-title position-relative">Language
												<span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
												<img class="w-15px h-15px rounded-1 ms-2" src="{{asset('../admin/media/flags/united-states.svg')}}" alt="" /></span></span>
											</a>
											<!--begin::Menu sub-->
											<div class="menu-sub menu-sub-dropdown w-175px py-4">
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="../../demo1/dist/account/settings.html" class="menu-link d-flex px-5 active">
													<span class="symbol symbol-20px me-4">
														<img class="rounded-1" src="{{asset('../admin/media/flags/united-states.svg')}}" alt="" />
													</span>English</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="../../demo1/dist/account/settings.html" class="menu-link d-flex px-5">
													<span class="symbol symbol-20px me-4">
														<img class="rounded-1" src="{{asset('../admin/media/flags/spain.svg')}}" alt="" />
													</span>Spanish</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="../../demo1/dist/account/settings.html" class="menu-link d-flex px-5">
													<span class="symbol symbol-20px me-4">
														<img class="rounded-1" src="{{asset('../admin/media/flags/germany.svg')}}" alt="" />
													</span>German</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="../../demo1/dist/account/settings.html" class="menu-link d-flex px-5">
													<span class="symbol symbol-20px me-4">
														<img class="rounded-1" src="{{asset('../admin/media/flags/japan.svg')}}" alt="" />
													</span>Japanese</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="../../demo1/dist/account/settings.html" class="menu-link d-flex px-5">
													<span class="symbol symbol-20px me-4">
														<img class="rounded-1" src="{{asset('../admin/media/flags/france.svg')}}" alt="" />
													</span>French</a>
												</div>
												<!--end::Menu item-->
											</div>
											<!--end::Menu sub-->
										</div>
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
							<a href="../index.html">
								<img alt="Logo" src="{{asset('../admin/media/teacher dashboard/logo.svg')}}" style="width: 150px;" class="app-sidebar-logo-default" />
								<img alt="Logo" src="{{asset('../admin/media/teacher dashboard/rsz_logo.png')}}" style="width: 40px;"  class=" app-sidebar-logo-minimize" />
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
										<div data-kt-menu-trigger="click" class="menu-item  menu-accordion">
											<!--begin:Menu link-->
											<a href="../index.html">
											<span class="menu-link ">
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
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion active-sidebar">
											<!--begin:Menu link-->
											<span class="menu-link active-item-sidebar ">
												<span class="menu-icon">
													<i class="fa-solid fa-video fs-3"></i>
												</span>
												<span class="menu-title">الفيديوهات</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="allVideos.html">
														<span class="menu-bullet">
															<i class="fa-solid fa-photo-film fs-5"></i>
														</span>
														<span class="menu-title">جميع الفيديوهات</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link menu-title-active " href="addNewVideo.html">
														<span class="menu-bullet">
															<i class="fa-regular fa-square-plus"></i>
														</span>
														<span class="menu-title">اضافة فيديو جديد</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->

											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-icon">
													<i class="fa-solid fa-clipboard-question fs-3"></i>
												</span>
												<span class="menu-title">الاختبارات</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../exams/allExams.html">
														<span class="menu-bullet">
															<i class="fa-solid fa-file-circle-question fs-3"></i>
														</span>
														<span class="menu-title">جميع الاختبارات</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../exams/addNewExams.html">
														<span class="menu-bullet">
															<i class="fa-regular fa-square-plus fs-3"></i>
														</span>
														<span class="menu-title">اضافة اختبار جديد</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../exams/examsReults.html">
														<span class="menu-bullet">
															<i class="fa-solid fa-window-restore fs-3"></i>
														</span>
														<span class="menu-title">نتائج الاختبارات</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../exams/studentsResult.html">
														<span class="menu-bullet">
															<i class="fa-solid fa-spell-check fs-3"></i>
														</span>
														<span class="menu-title">نتائج الطلاب</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->

											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-icon">
													<i class="fa-solid fa-file-lines fs-3"></i>
												</span>
												<span class="menu-title">الملفات</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../files/allFiles.html">
														<span class="menu-bullet">
															<i class="fa-solid fa-paste fs-5"></i>
														</span>
														<span class="menu-title">جميع الملفات</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../files/addNewFile.html">
														<span class="menu-bullet">
															<i class="fa-regular fa-square-plus fs-5"></i>
														</span>
														<span class="menu-title">اضافة ملف جديد</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->

											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-icon">
													<i class="fa-solid fa-box-archive fs-3"></i>
												</span>
												<span class="menu-title">الدورات الحضورية</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../personCourses/allPersonCourses.html">
														<span class="menu-bullet">
															<i class="fa-solid fa-boxes-packing fs-5"></i>
														</span>
														<span class="menu-title">جميع الدورات الحضورية</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../personCourses/addNewPersonCourses.html">
														<span class="menu-bullet">
															<i class="fa-regular fa-square-plus fs-5"></i>
														</span>
														<span class="menu-title">اضافة دورة حضورية</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->

											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-icon">
													<i class="fa-solid fa-tower-broadcast fs-3"></i>
												</span>
												<span class="menu-title">دورات البث المباشر</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../lives/allLives.html">
														<span class="menu-bullet">
															<i class="fa-solid fa-podcast fs-5"></i>
														</span>
														<span class="menu-title">جميع دورات البث المباشر</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../lives/addNewLive.html">
														<span class="menu-bullet">
															<i class="fa-regular fa-square-plus fs-5"></i>
														</span>
														<span class="menu-title">اضافة  دورة جديده</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->

											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-icon">
													<i class="fa-solid fa-house-laptop fs-3"></i>
												</span>
												<span class="menu-title">الواجبات</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../homeWork/allHomeWorks.html">
														<span class="menu-bullet">
															<i class="fa-solid fa-briefcase fs-5"></i>
														</span>
														<span class="menu-title">جميع الواجبات</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../homeWork/addNewHomework.html">
														<span class="menu-bullet">
															<i class="fa-regular fa-square-plus fs-5"></i>
														</span>
														<span class="menu-title">اضافة واجب جديد</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../homeWork/homeWorkResults.html">
														<span class="menu-bullet">
															<i class="fa-solid fa-square-poll-vertical fs-5"></i>
														</span>
														<span class="menu-title">نتائج الواجبات</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../homeWork/studentsHomeWorkResults.html">
														<span class="menu-bullet">
															<i class="fa-solid fa-users fs-5"></i>
														</span>
														<span class="menu-title">واجبات الطلاب</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->

											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->

										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-icon">
													<i class="fa-solid fa-money-bill-trend-up fs-3"></i>
												</span>
												<span class="menu-title">الايرادات</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../earning/personCourseEarning.html">
														<span class="menu-bullet">
															<i class="fa-solid fa-sack-dollar fs-5"></i>
														</span>
														<span class="menu-title">ايرادات الدورات الحضورية</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../earning/recordedCourseEarning.html">
														<span class="menu-bullet">
															<i class="fa-solid fa-comments-dollar fs-5"></i>
														</span>
														<span class="menu-title">ايرادات الدورات المسجلة</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link menu-title-active" href="../earning/liveCourseEarning.html">
														<span class="menu-bullet">
															<i class="fa-solid fa-sack-dollar fs-5"></i>
														</span>
														<span class="menu-title">ايرادات  دورات البث المباشر</span>
													</a>
													<!--end:Menu link-->
												</div>

											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-icon">
													<i class="fa-solid fa-clock fs-3"></i>
												</span>
												<span class="menu-title">المواعيد</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../dates/allDates.html">
														<span class="menu-bullet">
															<i class="fa-solid fa-business-time fs-5"></i>
														</span>
														<span class="menu-title">جميع المواعيد</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../dates/addNewDates.html">
														<span class="menu-bullet">
															<i class="fa-regular fa-square-plus fs-5"></i>
														</span>
														<span class="menu-title">اضافة موعد جديد</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->

											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-icon">
													<i class="fa-solid fa-money-check fs-3"></i>
												</span>
												<span class="menu-title">الدورات المسجلة</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../recorderCourses/allRecordedCourses.html">
														<span class="menu-bullet">
															<i class="fa-solid fa-credit-card fs-5"></i>
														</span>
														<span class="menu-title">جميع الدولاات المسجلة</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../recorderCourses/addNewRecordedCourses.html">
														<span class="menu-bullet">
															<i class="fa-regular fa-square-plus fs-5"></i>
														</span>
														<span class="menu-title">اضافة دورة مسجلة جديدة</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->

											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->

										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<a href="../students number/studentsNumbers.html" class="fw-bold">
												<span class="menu-link">
													<span class="menu-icon">
														<i class="fa-solid fa-users fs-3"></i>
													</span>
													<span class="menu-title">عدد الطلاب</span>
												</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--end:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<a href="../rating/rating.html" class="fw-bold">
												<span class="menu-link">
													<span class="menu-icon">
														<i class="fa-solid fa-star fs-3"></i>
													</span>
													<span class="menu-title">التقييمات</span>
												</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--end:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<a href="../subjects/subjects.html" class="fw-bold">
												<span class="menu-link">
													<span class="menu-icon">
														<i class="fa-solid fa-graduation-cap fs-3"></i>
													</span>
													<span class="menu-title">المواد الدراسية</span>
												</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
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



						<h2 class="mx-2 h1 my-5">أضافة فيديو جديد</h2>



						<!--satrt line of process-->

						<div class="container">
							<div class="d-flex align-items-center justify-content-between">
								<div class="text-center">
									<div class="rounded-circle active-added d-flex mt-5 align-items-center justify-content-center" style="height: 35px;width: 35px;background: #eee;">
										<i class="fa-solid fa-check"></i>
									</div>
									<p class="m-0 mt-1">الكتاب</p>
								</div>
								<div class="bg-gray line_process" style="height: 2px;flex-grow: 1;"></div>
								<div class="text-center">
									<div class="rounded-circle line_process d-flex mt-5 align-items-center justify-content-center" style="height: 35px;width: 35px;background: #eee;">
										<i class="fa-solid fa-check"></i>
									</div>
									<p class="m-0 mt-1">الابواب</p>
								</div>
								<div  class="bg-gray line_process" style="height: 2px;flex-grow: 1;"></div>
								<div class="text-center">
									<div class="rounded-circle line_process d-flex mt-5 align-items-center justify-content-center" style="height: 35px;width: 35px;background: #eee;">
										<i class="fa-solid fa-check"></i>
									</div>
									<p class="m-0 mt-1">الفصل</p>
								</div>
								<div  class="bg-gray line_process" style="height: 2px;flex-grow: 1;"></div>
								<div class="text-center">
									<div class="rounded-circle line_process d-flex mt-5 align-items-center justify-content-center" style="height: 35px;width: 35px;background: #eee;">
										<i class="fa-solid fa-check"></i>
									</div>
									<p class="m-0 mt-1">الدرس</p>
								</div>
								<div  class="bg-gray line_process" style="height: 2px;flex-grow: 1;"></div>
								<div class="text-center">
									<div class="rounded-circle line_process d-flex mt-5 align-items-center justify-content-center" style="height: 35px;width: 35px;background: #eee;">
										<i class="fa-solid fa-check"></i>
									</div>
									<p class="m-0 mt-1">تحميل</p>
								</div>
								<div  class="bg-gray line_process" style="height: 2px;flex-grow: 1;"></div>
								<div class="text-center">
									<div class="rounded-circle line_process d-flex mt-5 align-items-center justify-content-center" style="height: 35px;width: 35px;background: #eee;">
										<i class="fa-solid fa-check"></i>
									</div>
									<p class="m-0 mt-1">مراجعة</p>
								</div>
								<div class="bg-gray line_process" style="height: 2px;flex-grow: 1;"></div>
								<div class="text-center">
									<div class="rounded-circle line_process d-flex mt-5 align-items-center justify-content-center" style="height: 35px;width: 35px;background: #eee;">
										<i class="fa-solid fa-check"></i>
									</div>
									<p class="m-0 mt-1">نشر</p>
								</div>
							</div>
						</div>

						<!--End line of process-->





                        <form method="POST" >
                            @csrf

						<!--start choose book-->
						<section class="choose_book main_item">
							<div class="mt-5">
								<div class="container">
									<div class="text-center">
										<h3 class="h1">اختر الكتاب</h3>
										<p class="m-0 fs-3 text-gray-500">اختر الكتاب لأدخال الفيديو عليه</p>
									</div>
									<div class="row gy-4 mt-5 text-center">
                                        @foreach ($books as $book )

										<div class="col-md-3">
											<div role="button" class="box-of-book rounded p-5 video_choose_book" style="box-shadow: 0px 0px 5px 0px #aaa;">
												<div style="width: 80px;height: 80px;" class="rounded-circle border-black mx-auto d-flex align-items-center justify-content-center">
													<span>{{$book->id}}</span>
												</div>
                                                <h4 class="h2 mt-3"> {{$book->title}}</h4>
                                                <input hidden name="book_id" id="book_id" value="{{$book->id}}">

											</div>
										</div>

                                    @endforeach


									</div>
								</div>
							</div>
						</section>
						<!--End choose book-->


						<!--start choose bab-->
						<section class="choose_bab main_item">
							<div class="mt-5">
								<div class="container">
									<div class="text-center">
										<h3 class="h1">اختر الباب</h3>
										<p class="m-0 fs-3 text-gray-500">اختر الباب لأدخال الفيديو عليه</p>
									</div>
									<div class="row gy-5 mt-5 text-center">
                                        @foreach ($parts as $part )

										<div class="col-md-3">
											<div role="button" class="box-of-book rounded p-5 video_choose_baba" style="box-shadow: 0px 0px 5px 0px #aaa;">
												<div style="width: 80px;height: 80px;" class="rounded-circle border-black mx-auto d-flex align-items-center justify-content-center">
													<span>{{$part->id}}</span>
												</div>
												<h4 class="h2 mt-3"> {{$part->title}}</h4>
                                                <input hidden name="part_id" value="{{$part->id}}">

											</div>
										</div>
										@endforeach
									</div>
								</div>
							</div>
						</section>
						<!--End choose bab-->


						<!--start class-->

						<section class="choose_class main_item">
							<div class="mt-5">
								<div class="container">
									<div class="text-center">
										<h3 class="h1">اختر الفصل</h3>
										<p class="m-0 fs-3 text-gray-500">اختر الفصل لأدخال الفيديو عليه</p>
									</div>
									<div class="row gy-5 mt-5 text-center">
                                        @foreach ($chapters as $chapter )
										<div class="col-md-3">
											<div role="button" class="box-of-book rounded p-5 video_choose_class" style="box-shadow: 0px 0px 5px 0px #aaa;">
												<div style="width: 80px;height: 80px;" class="rounded-circle border-black mx-auto d-flex align-items-center justify-content-center">
													<span>{{$chapter->id}}</span>
												</div>
												<h4 class="h2 mt-3"> {{$chapter->title}}</h4>
                                                <input hidden name="chapter_id" value="{{$chapter->id}}">

											</div>
										</div>

                                        @endforeach
									</div>
								</div>
							</div>
						</section>
						<!--End class-->



						<!--start subject name-->

						<section class="subject_name main_item">
							<div class="container my-5">
                            <div class="d-flex align-items-center justify-content-between">
                                <h3>اسم الدرس</h3>
                            </div>
                            <div class="row">
                                @foreach ( $lessons as $lesson )

                                <div class="col-md-6">
                                    <div class="p-5" style="border-bottom: 2px solid #EEE;">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <label class="m-0 fs-4" for="input_1">{{$lesson->title}} </label>
                                            <input  name="subjectSelect" value="{{$lesson->id}} " type="checkbox" class="fs-3 video_input_lesson" id="input_1" role="button"/>
                                        </div>
                                    </div>
                                </div>
                                @endforeach


                            </div>
                       		 </div>
						</section>

						<!--End subject name-->



						<!--start upload video-->


						<section class="upload_video main_item">
							<div class="mt-5">
								<div class="container">
									<div class="text-center">
										<h3 class="h1">تحميل الفيديو</h3>
										<p class="m-0 fs-3 text-gray-500">قم بتحميل الفيديو</p>
									</div>
								</div>
							</div>

							<div class="container">
								<div class="videos_content">



								</div>

								<div class="d-flex align-items-center">
									<input type="checkbox" id="videos_cycle_type"/>
									<label  onclick="handleSelect()" class="m-0 mx-3 fw-bold" for="videos_cycle_type">دورات البث المباشر</label>
								</div>
								<select class="form-select type_cycle d-none" style="width: 150px;">
                                    <option>one</option>
                                    <option>two</option>
                                    <option>three</option>
                                </select>
							</div>
						</section>



						<!--End upload video-->


						<!--start review video-->

						<section class="video_review main_item">
							<div class="container mt-5">
                            <div>
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
								<div class="container my-5">
								<h4>اسم مقطع الفيديو</h4>
								<input type="text" name="title" placeholder="اسم مقطع الفيديو" class="form-control"/>
							</div>
						</section>

						<!--End review video-->

                    </form>


						<div class="container">
							<div class="mt-5 d-flex align-items-center justify-content-end ">
								<p class="solid-black-btn btn m-0 mx-2" onclick="handleIncreaseItem(true)" >التالي</p>
							</div>
						</div>



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




















					</div>
					<!--end:::Main-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::App-->

















































		<!--begin::Javascript-->

		<script>var hostUrl = "../assets/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="{{asset('admin/plugins/global/plugins.bundle.js')}}"></script>
		<script src="{{asset('admin/js/scripts.bundle.js')}}"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->

		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->

		<script src="{{asset('admin/js/dashboard/addNewVideo.js')}}"></script>
        <script>
            console.log(document.getElementById('book_id').value);

        </script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>
