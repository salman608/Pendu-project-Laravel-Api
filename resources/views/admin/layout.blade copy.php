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
    
</head>

<body>

    <div id="app">

        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="{{ route('admin.dashboard') }}"><img src="{{ asset('frontend/assets/images/Logo/Group 193.svg') }}" alt="Logo" srcset="" style="height: 200px!important"></a>
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
                                    <a href="extra-component-sweetalert.html">Promo Code</a>
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
                                    <a href="{{ route('blog.post.list') }}">Posts</a>
                                </li>
                                <li class="submenu-item {{ Request::is('admin/category-list') ? 'active' : '' }}">
                                    <a href="{{ route('blog.category.list') }}">Categories</a>
                                </li>
                                <li class="submenu-item {{ Request::is('admin/tag-list') ? 'active' : '' }}">
                                    <a href="{{ route('blog.tag.list') }}">Tag</a>
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

        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

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