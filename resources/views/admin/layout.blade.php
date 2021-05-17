<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendors/iconly/bold.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{  asset('assets/vendors/apexcharts/apexcharts.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/chartjs/Chart.min.css') }}">

<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
<!--===============================================================================================-->

<style>
    @media (max-width: 575.98px) {
        .margin-logo {
            margin-top: 50px;
        }
    }
</style>


</head>

<body>

    <div id="app">

        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-center">
                        <div class="logo margin-logo">
                            <a href="{{ route('admin.dashboard') }}"><img src="{{ asset('frontend/assets/images/Logo/Group 193.svg') }}" alt="Logo" srcset="" style="height: 100px!important"></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>

                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-item {{ Request::routeIs('home*') || Request::routeIs('admin*') ? 'active' : '' }}">
                            <a href="{{ route('admin.dashboard') }}" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>HOME</span>
                            </a>
                        </li>

                        <li class="sidebar-item has-sub {{ Request::routeIs('dropperManagement*') ? 'active' : '' }}">
                            <a href="javascript:void(0)" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>DROPPER MANAGEMENT</span>
                            </a>
                            <ul class="submenu" {{ Request::routeIs('dropperManagement*') ? 'style=display:block;' : '' }}>
                                <li class="submenu-item {{ Request::is('admin/manager-list') ? 'active' : '' }}">
                                    <a href="{{ route('dropperManagement.manager.list') }}">Managers</a>
                                </li>
                                <li class="submenu-item {{ Request::is('admin/dropper-list') ? 'active' : '' }}">
                                    <a href="{{ route('dropperManagement.dropper.list') }}">Droppers</a>
                                </li>
                                <li class="submenu-item {{ Request::is('admin/dropperOnboarding-list') ? 'active' : '' }}">
                                    <a href="{{ route('dropperManagement.dropperOnboarding.list') }}">Dropper Onboarding</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-button.html">Dropper App Settings</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="component-card.html">Notification Board</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-life-preserver"></i>
                                <span>MERKETING</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="extra-component-avatar.html">Wallet</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{route('servicefee.list')}}">Promo Code</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="extra-component-toastify.html">Referral</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="extra-component-rating.html">Ad Banners</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="extra-component-divider.html">Layalty Point</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="extra-component-divider.html">Push Notification</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="extra-component-divider.html">Eamils</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-megaphone-fill"></i>
                                <span>Supports</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="layout-default.html">Agents</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="layout-vertical-1-column.html">Chats</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="layout-vertical-navbar.html">Ticket & Disputs</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="layout-horizontal.html">Help Article</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="layout-horizontal.html">Internal Comunication</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="layout-horizontal.html">FAQs</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item has-sub {{ Request::routeIs('blog*') ? 'active' : '' }}">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-file-earmark-richtext"></i>
                                <span>BLOGS</span>
                            </a>
                            <ul class="submenu" {{ Request::routeIs('blog*') ? 'style=display:block;' : '' }}>
                                <li class="submenu-item {{ Request::is('admin/post-list') ? 'active' : '' }}">
                                    <a href="">Posts</a>
                                </li>
                                <li class="submenu-item {{ Request::is('admin/category-list') ? 'active' : '' }}">
                                    <a href="">Categories</a>
                                </li>
                                <li class="submenu-item {{ Request::is('admin/tag-list') ? 'active' : '' }}">
                                    <a href="">Tag</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-gear-fill"></i>
                                <span>CONFIGURE</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="form-editor-quill.html">Quill</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="form-editor-ckeditor.html">CKEditor</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="form-editor-summernote.html">Summernote</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="form-editor-tinymce.html">TinyMCE</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
                <br><br><br>
            </div>
        </div>

        <div id="main" class='layout-navbar fixed-top bg-white'>
            <header>
                <nav class="navbar navbar-expand navbar-light">
                    <div class="container-fluid">
                        <a href="#" class="burger-btn d-block">
                            <i class="bi bi-justify fs-3"></i>
                        </a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li class="nav-item dropdown me-1">
                                    <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class='bi bi-envelope bi-sub fs-4 text-gray-600'></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            <h6 class="dropdown-header">Mail</h6>
                                        </li>
                                        <li><a class="dropdown-item" href="#">No new mail</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown me-3">
                                    <a class="nav-link active dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class='bi bi-bell bi-sub fs-4 text-gray-600'></i>
                                    </a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            <h6 class="dropdown-header">Notifications</h6>
                                        </li>
                                        <li><a class="dropdown-item">No notification available</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="user-menu d-flex">
                                        <div class="user-name text-end me-3">
                                            <h6 class="mb-0 text-gray-600">Nadim Mahmud</h6>
                                            <p class="mb-0 text-sm text-gray-600">Administrator</p>
                                        </div>
                                        <div class="user-img d-flex align-items-center">
                                            <div class="avatar avatar-md">
                                                <img src="{{ asset('assets/images/faces/1.jpg') }}">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                                    <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-person me-2"></i> My
                                            Profile</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="{{ route('logout') }}"><i
                                                class="icon-mid bi bi-box-arrow-left me-2"></i> Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
        </div>
        <br><br><br>

        @yield('content')
    </div>

    <script src="{{ asset('assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('assets/vendors/apexcharts/apexcharts.js') }}"></script>
    <script src="{{  asset('assets/js/pages/dashboard.js') }}"></script>

    <script src="{{ asset('assets/js/main.js') }}"></script>

    <script src="{{ asset('assets/js/pages/ui-apexchart.js') }}"></script>
    <script src="{{ asset('assets/vendors/chartjs/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/ui-chartjs.js') }}"></script>

<!--===============================================================================================-->
    <script src="{{ asset('assets/vendors/jquery-table/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
    <script>
        $('.js-pscroll').each(function(){
            var ps = new PerfectScrollbar(this);

            $(window).on('resize', function(){
                ps.update();
            })
        });

    </script>
<!--===============================================================================================-->
    <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>
