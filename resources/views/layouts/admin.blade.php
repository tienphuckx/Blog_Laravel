<!DOCTYPE html>
<html lang="en">

<head>
    <title>Trang quản trị</title>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Free Datta Able Admin Template come up with latest Bootstrap 4 framework with basic components, form elements and lots of pre-made layout options" />
    <meta name="keywords" content="admin templates, bootstrap admin templates, bootstrap 4, dashboard, dashboard templets, sass admin templets, html admin templates, responsive, bootstrap admin templates free download,premium bootstrap admin templates, datta able, datta able bootstrap admin template, free admin theme, free dashboard template"/>
    <meta name="author" content="CodedThemes"/>

    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('admin')}}/images/favicon.ico" type="image/x-icon">
    <!-- fontawesome icon -->
    <link rel="stylesheet" href="{{asset('admin')}}/fonts/fontawesome/css/fontawesome-all.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="{{asset('admin')}}/plugins/animation/css/animate.min.css">
    <!-- vendor css -->
    <link rel="stylesheet" href="{{asset('admin')}}/css/style.css">
    <script src="{{asset('admin')}}/js/jquery-3.6.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    
</head>

<body>
  
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    
    <nav class="pcoded-navbar">
        <div class="navbar-wrapper">
            <div class="navbar-brand header-logo">
                <a href="index.html" class="b-brand">
                    <div class="b-bg">
                        <i class="feather icon-trending-up"></i>
                    </div>
                    <span class="b-title">
                        {{Auth::user()->name}}
                    </span>
                </a>
                <a class="mobile-menu" id="mobile-collapse" href="javascript:"><span></span></a>
            </div>
            <div class="navbar-content scroll-div">
                <ul class="nav pcoded-inner-navbar">
                    <li class="nav-item pcoded-menu-caption">
                        <label>Navigation</label>
                    </li>
                    <li data-username="dashboard Default Ecommerce CRM Analytics Crypto Project" class="nav-item active">
                        <a href="index.html" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a>
                    </li>

                    <li class="nav-item pcoded-menu-caption">
                        <label>Danh mục</label>
                    </li>

                    {{-- CATEGORY  --}}
                    <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu">
                        <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Thể loại</span></a>
                        <ul class="pcoded-submenu">                                                    
                            <li class=""><a href="{{route('theloai.create')}}" class="">Thêm thể loại</a></li>
                            <li class=""><a href="{{route('theloai.index')}}" class="">Danh sách</a></li>
                            
                        </ul>
                    </li>

                    {{-- POSTS  --}}
                    <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu">
                      <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">
                          Bài viết
                        </span></a>

                      <ul class="pcoded-submenu">
                        <li class=""><a href="{{route('baiviet.create')}}" class="">Thêm bài viết</a></li>
                        <li class=""><a href="{{route('baiviet.index')}}" class="">Danh sách</a></li>                     
                      </ul>
                  </li>

                    {{-- USER  --}}
                    <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu">
                      <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Người dùng</span></a>
                      <ul class="pcoded-submenu">
                        <li class=""><a href="{{route('nguoidung.create')}}" class="">Thêm người dùng </a></li>    
                        <li class=""><a href="{{route('nguoidung.index')}}" class="">Danh sách </a></li>    
                      </ul>
                  </li>

                    {{-- COMMENT  --}}
                    <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu">
                      <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Bình luận</span></a>
                      <ul class="pcoded-submenu">
                          <li class=""><a href="bc_button.html" class="">List comment</a></li>                          
                      </ul>
                  </li>

                   {{-- Role  --}}
                   <li data-username="basic components Button Alert Badges breadcrumb Paggination progress Tooltip popovers Carousel Cards Collapse Tabs pills Modal Grid System Typography Extra Shadows Embeds" class="nav-item pcoded-hasmenu">
                    <a href="javascript:" class="nav-link "><span class="pcoded-micon"><i class="feather icon-box"></i></span><span class="pcoded-mtext">Roles</span></a>
                    <ul class="pcoded-submenu">

                        <li class=""><a href="{{route('role.create')}}" class="">Thêm Role </a></li> 
                        <li class=""><a href="{{route('role.index')}}" class="">Danh sách </a></li>    
                                                
                    </ul>
                </li>
                    


                </ul>
            </div>
        </div>
    </nav>

    <header class="navbar pcoded-header navbar-expand-lg navbar-light">

        <div class="m-header">
            <a class="mobile-menu" id="mobile-collapse1" href="javascript:"><span></span></a>
            <a href="index.html" class="b-brand">
                   <div class="b-bg">
                       <i class="feather icon-trending-up"></i>
                   </div>
                   <span class="b-title">Datta Able</span>
               </a>
        </div>

        <a class="mobile-menu" id="mobile-header" href="javascript:">
            <i class="feather icon-more-horizontal"></i>
        </a>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li><a href="javascript:" class="full-screen" onclick="javascript:toggleFullScreen()"><i class="feather icon-maximize"></i></a></li>
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle" href="javascript:" data-toggle="dropdown">Dropdown</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="javascript:">Action</a></li>
                        <li><a class="dropdown-item" href="javascript:">Another action</a></li>
                        <li><a class="dropdown-item" href="javascript:">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <div class="main-search">
                        <div class="input-group">
                            <input type="text" id="m-search" class="form-control" placeholder="Search . . .">
                            <a href="javascript:" class="input-group-append search-close">
                                <i class="feather icon-x input-group-text"></i>
                            </a>
                            <span class="input-group-append search-btn btn btn-primary">
                                <i class="feather icon-search input-group-text"></i>
                            </span>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li>
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="javascript:" data-toggle="dropdown"><i class="icon feather icon-bell"></i></a>
                        <div class="dropdown-menu dropdown-menu-right notification">
                            <div class="noti-head">
                                <h6 class="d-inline-block m-b-0">Notifications</h6>
                                <div class="float-right">
                                    <a href="javascript:" class="m-r-10">mark as read</a>
                                    <a href="javascript:">clear all</a>
                                </div>
                            </div>
                            <ul class="noti-body">
                                <li class="n-title">
                                    <p class="m-b-0">NEW</p>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="assets/images/user/avatar-1.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>John Doe</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                            <p>New ticket Added</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="n-title">
                                    <p class="m-b-0">EARLIER</p>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="assets/images/user/avatar-2.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Joseph William</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                            <p>Prchace New Theme and make payment</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="notification">
                                    <div class="media">
                                        <img class="img-radius" src="assets/images/user/avatar-3.jpg" alt="Generic placeholder image">
                                        <div class="media-body">
                                            <p><strong>Sara Soudein</strong><span class="n-time text-muted"><i class="icon feather icon-clock m-r-10"></i>30 min</span></p>
                                            <p>currently login</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="noti-footer">
                                <a href="javascript:">show all</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="dropdown drp-user">
                        <a href="javascript:" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="icon feather icon-settings"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-notification">
                            <div class="pro-head">
                                <img src="assets/images/user/avatar-1.jpg" class="img-radius" alt="User-Profile-Image">
                                <span>John Doe</span>
                                <a href="auth-signin.html" class="dud-logout" title="Logout">
                                    <i class="feather icon-log-out"></i>
                                </a>
                            </div>
                            <ul class="pro-body">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                              document.getElementById('logout-form').submit();">
                                 {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                    
                                </form>

                                
                                <li><a href="javascript:" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>
                            
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

    </header>
  


    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-wrapper">
            <div class="pcoded-content">
                <div class="pcoded-inner-content">
                    <!-- [ breadcrumb ] start -->

                    <!-- [ breadcrumb ] end -->
                    <div class="main-body">
                        <div class="page-wrapper">

                           
                            @yield('content')
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
<script src="{{asset('admin')}}/js/vendor-all.min.js"></script>
<script src="{{asset('admin')}}/plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="{{asset('admin')}}/js/pcoded.min.js"></script>

</body>
</html>
