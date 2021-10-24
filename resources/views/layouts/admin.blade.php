<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Raman01 | پنل مدیریت</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="{{asset('https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext')}}"
          rel="stylesheet" type="text/css">
    <link href="{{asset('https://fonts.googleapis.com/icon?family=Material+Icons')}}" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{asset('plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="{{asset('plugins/node-waves/waves.css')}}" rel="stylesheet"/>

    <!-- Animation Css -->
    <link href="{{asset('plugins/animate-css/animate.css')}}" rel="stylesheet"/>

    <!-- Morris Chart Css-->
    <link href="{{asset('plugins/morrisjs/morris.css')}}" rel="stylesheet"/>

    <!-- Custom Css -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset('css/themes/all-themes.css')}}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('css/fonts.css')}}">
<!--  <link rel="stylesheet" href="{{asset('font-awesome/css/all.css')}}">
    <link href="{{ asset('../fontawesome-free-5.15.3-web/css/all.css') }}" rel="stylesheet">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="{{asset('js/sweetalert.min.js')}}"></script>

</head>

<body class="theme-red">
@include('sweet::alert')

<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="preloader">
            <div class="spinner-layer pl-red">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div>
                <div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        <p>صبور باشید...</p>
    </div>
</div>
<!-- #END# Page Loader -->
<!-- Overlay For Sidebars -->
<div class="overlay"></div>
<!-- #END# Overlay For Sidebars -->
<!-- Search Bar -->
<div class="search-bar">
    <div class="search-icon">
        <i class="material-icons">search</i>
    </div>
    <input type="text" placeholder="جست و جو...">
    <div class="close-search">
        <i class="material-icons">close</i>
    </div>
</div>
<!-- #END# Search Bar -->
<!-- Top Bar -->
<nav class="navbar">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse"
               data-target="#navbar-collapse" aria-expanded="false"></a>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="index.html">رامان صفر و یک - سفیر عدالت</a>
        </div>
        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <!-- Call Search -->
                <li><a href="javascript:void(0);" class="js-search" data-close="true"><i
                            class="material-icons">search</i></a></li>
                <!-- #END# Call Search -->

            </ul>
        </div>
    </div>
</nav>
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <div class="user-info">
            <div class="image">
                <img src="{{asset('images/user.png')}}" width="48" height="48" alt="User"/>
            </div>
            <div class="info-container">
                <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">مهدی شیخی</div>
                <div class="email">mahdi1277mah@gmail.com</div>
                <div class="btn-group user-helper-dropdown">
                    <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                    <ul class="dropdown-menu pull-right">
                        <li><a href="javascript:void(0);"><i class="material-icons">person</i> پروفایل</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">group</i>دنبال کننده ها</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>فروش</a></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">favorite</i>مورد پسند</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="javascript:void(0);"><i class="material-icons">input</i>خروج</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #User Info -->
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li class="header">ناوبار اصلی</li>
                <li class="active">
                    <a href="{{ route('login') }}">
                        <i class="material-icons">home</i>
                        <span>صفحه اصلی سایت</span>
                    </a>
                </li>
                <li class="active">
                    <a href="/admin">
                        <i class="material-icons">dashboard</i>
                        <span>پنل مدیریت سایت</span>
                    </a>
                </li>

                @can('show_users')
                    <li class="header">مدیریت کاربران</li>

                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">accessibility</i>
                        <span>کاربران</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="/admin/users">
                                <span>تمام کاربران</span>
                            </a>
                        </li>
                        <li>
                            <a href="/admin/users/create">
                                <span>افزودن کاربر جدید</span>
                            </a>
                        </li>
                    </ul>
                </li>
                @endcan

                @can('show_permissions')
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">accessibility_new</i>
                        <span>دسترسی ها</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="/admin/permissions">
                                <span>تمام دسترسی ها</span>
                            </a>
                        </li>
                        <li>
                            <a href="/admin/permissions/create">
                                <span>افزودن دسترسی جدید</span>
                            </a>
                        </li>
                    </ul>
                </li>
                @endcan
                @can('show_role')

                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">widgets</i>
                        <span>نقش های کاربری</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="/admin/roles">
                                <span>تمام نقش ها</span>
                            </a>
                        </li>
                        <li>
                            <a href="/admin/roles/create">
                                <span>افزودن نقش جدید</span>
                            </a>
                        </li>
                    </ul>
                </li>
                @endcan
                @can('show_course')

                <li class="header">مدیریت کل  مطلب ها</li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">layers</i>
                        <span>کل مطلب ها</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="/admin/courses">
                                <span>تمام مطلب ها</span>
                            </a>
                        </li>
                        <li>
                            <a href="/admin/courses/create">
                                <span>افزودن مطلب جدید</span>
                            </a>
                        </li>
                    </ul>
                </li>
                @endcan
                @can('show_episode')

                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">layers</i>
                        <span>ویدیوهای مطلب ها</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="/admin/episodes">
                                <span>تمام ویدیوهای مطلب ها</span>
                            </a>
                        </li>
                        <li>
                            <a href="/admin/episodes/create">
                                <span> افزودن ویدیو جدید به مطلب </span>
                            </a>
                        </li>
                    </ul>
                </li>
                @endcan
                @can('show_teacher')

                    <li class="header">مدیریت مطلب های نویسنده</li>                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">layers</i>
                            <span> مطلب های نویسنده</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="/admin/teachers">
                                    <span>تمام مطلب های نویسنده</span>
                                </a>
                            </li>
                            <li>
                                <a href="/admin/teachers/create">
                                    <span>افزودن مطلب جدید نویسنده</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan


{{--
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">category</i>
                        <span>دسته ها</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="/admin/categories">
                                <span>تمام دسته ها</span>
                            </a>
                        </li>
                        <li>
                            <a href="/admin/categories/create">
                                <span>افزودن دسته جدید</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">comment</i>
                        <span>نظرات</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="/admin/comments">
                                <span>نظرات تایید شده</span>
                            </a>
                        </li>
                        <li>
                            <a href="/admin/comments/unsuccessful">
                                <span>نظرات تایید نشده</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">comment</i>
                        <span>نقد وبررسی</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="/admin/reviews">
                                <span>نقد وبررسی های تایید شده</span>
                            </a>
                        </li>
                        <li>
                            <a href="/admin/reviews/unsuccessful">
                                <span>نقد وبررسی های تایید نشده</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="header">تراکنش ها</li>

                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">payment</i>
                        <span>پرداخت ها</span>
                    </a>
                    <ul class="ml-menu">
                        <li>
                            <a href="/admin/payments">
                                <span>پرداخت های موفق</span>
                            </a>
                        </li>
                        <li>
                            <a href="/admin/payments/unsuccessful">
                                <span>پرداخت های ناموفق</span>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="header">تنظیمات</li>
                <li>
                    <a href="javascript:void(0);">
                        <i class="material-icons">settings</i>
                        <span>تنظیمات عمومی</span>
                    </a>

                </li>
                <li>
                    <a href="/admin/newsletter">
                        <i class="material-icons">pending</i>
                        <span>خبرنامه</span>
                    </a>

                </li>
                <li>
                    <a href="/admin/favorites">
                        <i class="material-icons">favorite</i>
                        <span>لیست علاقه مندی کاربران</span>
                    </a>

                </li>--}}
            </ul>
        </div>

    </aside>

</section>

<section class="content">
    <div class="container-fluid">
        @yield('content')

    </div>
</section>
<!-- Jquery Core Js -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap Core Js -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>

<!-- Select Plugin Js -->
<script src="{{asset('plugins/bootstrap-select/js/bootstrap-select.js')}}"></script>

<!-- Slimscroll Plugin Js -->
<script src="{{asset('plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

<!-- Waves Effect Plugin Js -->
<script src="{{asset('plugins/node-waves/waves.js')}}"></script>

<!-- Jquery CountTo Plugin Js -->
<script src="{{asset('plugins/jquery-countto/jquery.countTo.js')}}"></script>

<!-- Morris Plugin Js -->
<script src="{{asset('plugins/raphael/raphael.min.js')}}"></script>
<script src="{{asset('plugins/morrisjs/morris.js')}}"></script>

<!-- ChartJs -->
<script src="{{asset('plugins/chartjs/Chart.bundle.js')}}"></script>

<!-- Flot Charts Plugin Js -->
<script src="{{asset('plugins/flot-charts/jquery.flot.js')}}"></script>
<script src="{{asset('plugins/flot-charts/jquery.flot.resize.js')}}"></script>
<script src="{{asset('plugins/flot-charts/jquery.flot.pie.js')}}"></script>
<script src="{{asset('plugins/flot-charts/jquery.flot.categories.js')}}"></script>
<script src="{{asset('plugins/flot-charts/jquery.flot.time.js')}}"></script>

<!-- Sparkline Chart Plugin Js -->
<script src="{{asset('plugins/jquery-sparkline/jquery.sparkline.js')}}"></script>

<!-- Custom Js -->
<script src="{{asset('js/admin.js')}}"></script>
<script src="{{asset('js/pages/index.js')}}"></script>

<!-- Demo Js -->
<script src="{{asset('js/demo.js')}}"></script>

<!-- CKEditor Js -->
<script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
</body>
@yield('js')
</html>
