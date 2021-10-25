<html>
<head>
	<meta charset="UTF-8">
	<title>Trang chủ</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<link rel="icon" href="images/favicon.html" sizes="32x32" />

	<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Lato:400,700%7CCrete+Round' type='text/css' media='all' />

	<link rel="stylesheet" type="text/css" href="{{asset('web')}}/css/libs/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('web')}}/css/libs/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{asset('web')}}/css/styles.css">
	<link rel="stylesheet" type="text/css" href="{{asset('web')}}/css/phuc_custom.css">

	{{-- <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css">
	<link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css">  --}}

	<link rel="stylesheet" type="text/css" href="{{asset('web')}}/owl/owl-carousel/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="{{asset('web')}}/owl/owl-carousel/owl.theme.css"> 



	<script src="{{asset('admin')}}/js/jquery-3.6.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="{{asset('skeditor')}}/ckeditor.js"></script>

</head>

<body class="home">

	<!-- Wrapper Site -->
	<div id="main-content">

	

		<!-- Mobile Menu -->
		<div class="mobile">
			<div class="container">
				<!-- Mobile -->
				<div class="menu-mobile">
					<span class="item item-1"></span>
					<span class="item item-2"></span>
					<span class="item item-3"></span>
				</div>
				<!-- End Mobile -->

				<!-- Logo -->
				<div class="logo">
					<a href="index-2.html">
						<img src="images/logo-mobile.png" alt="Logo">
					</a>
				</div>
				<!-- End Logo -->
			</div>
		</div>
		<div class="hide-menu"></div>
		<!-- End Mobile Menu -->

		<div class="container">
            <div class="row">
                
                {{-- menu --}}
                <div class="col-md-3">
                    <div class="header affix">
                        <div class="table">
                            <div class="table-cell">
                                <!-- Logo -->
                                <div class="logo">
                                    <a href="{{route('trangchu')}}"">
										PV Blog
                                    </a>
                                </div>
                                <!-- End Logo -->
            
                                <!-- Navigation -->
                                <div class="main-menu bg-dark">
                                    <nav>
                                        <ul class="menu-list">
                                            <li class="">
                                                <a href="{{route('trangchu')}}">Trang chủ</a>
                                            </li>

                                            <li>
                                                <a href="{{route('category.index')}}">Danh mục</a>
                                            </li>

											@if (Auth::check())
												<li>
													<a href="{{route('profile.show',Auth::user()->id)}}">Thông tin tài khoản</a>
												</li>
												<li>
													<a href="{{route('post.create')}}">Tạo bài viết mới nào</a>
												</li>
												<li>
													<a href="{{route('post.index')}}">Bài viết của bạn</a>
												</li>
											@endif
											                                       
                                        </ul>
                                    </nav>
                                </div>
                                <!-- End Navigation -->
            
                                <!-- Socials -->
                                <div class="socials">
                                    @guest
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @else
												<span>---</span>
												<a href="{{route('profile.show',Auth::user()->id)}}">
													{{ Auth::user()->fullName }}
												</a>
                                                <span>---</span>
                                           
												<br>
                                            
                                                <a href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                    {{ __('Đăng xuất') }}
                                                </a>
            
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            
                                       
                                    @endguest
                                    
                                </div>
                                <!-- End Socials -->                       
            
                                <div class="bg-success copyright text-center d-flex align-items-end flex-column">
                                    <p>
                                    	Code Blog @ 2021. Design by
                                    </p>
									<p> -- P & V --</p>
                                </div>
            
                            </div>
                        </div>
                    </div>
                </div>

                
				{{-- MAIN  --}}
                <div class="bg_none col-md-9 content_custom m-0 p-0 ">

					{{-- INCLUDE HEAD  --}}
					@include('layouts.blocks.head')
				
                    @yield('content')
                </div>

				<div>
					{{-- @include('layouts.blocks.foot') --}}
				</div>

            </div>
			
		</div>
	</div>
	




	<!-- Scripts -->
	<script src="{{asset('web')}}/js/libs/jquery-1.12.4.min.js"></script>
	<script src="{{asset('web')}}/js/libs/masonry.pkgd.min.js"></script>
	<script src="{{asset('web')}}/js/libs/imagesloaded.pkgd.min.js"></script>
	<script src="{{asset('web')}}/js/scripts.js"></script>

	<script src="assets/owl-carousel/owl.carousel.js"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('web')}}/owl/owl-carousel/owl.carousel.js"> 

	<!-- End Scripts -->

</body>

</html>