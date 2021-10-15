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
	<script src="{{asset('admin')}}/js/jquery-3.6.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body class="home">

	<!-- Wrapper Site -->
	<div id="main-content">

		<!-- Preload -->
		<div id="preload">
			<div class="kd-bounce">
				<div></div>
				<div></div>
			</div>
		</div>
		<!-- Preload -->

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
                                    <a href="index-2.html">
                                        <img src="{{asset('web')}}/images/logo-light.png" alt="Logo" class="logo-light">
                                        <img src="{{asset('web')}}/images/logo.png" alt="Logo">
                                    </a>
                                </div>
                                <!-- End Logo -->
            
                                <!-- Navigation -->
                                <div class="main-menu">
                                    <nav>
                                        <ul class="menu-list">

                                            <li class="menu-item-has-children">
                                                <a href="{{route('trangchu')}}">Home</a>
                                            </li>

                                            <li>
                                                <a href="{{route('category.index')}}">Category</a>
                                            </li>
											@if (Auth::check())
												<li>
													<a href="{{route('profile.show',Auth::user()->id)}}">Profile</a>
												</li>
												<li>
													<a href="{{route('post.create')}}">Create Post</a>
												</li>
												<li>
													<a href="{{route('post.index')}}">List Article</a>
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
                                        
												<a href="{{route('profile.show',Auth::user()->id)}}">
													Xin chào {{ Auth::user()->fullName }}
												</a>
                                                
                                           
												<br>
                                            
                                                <a href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>
            
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            
                                       
                                    @endguest
                                    
                                </div>
                                <!-- End Socials -->
            
                                <div class="box-search">
                                    <form role="search" method="get" action="#">
                                        <input type="text" placeholder="Search ..." name="s" />
                                    </form>
                                </div>
            
                                <div class="copyright">
                                    <p>
                                        Tancho @ 2018. Design by <a href="#">Kendy</a>
                                    </p>
                                </div>
            
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="col-md-9 col-md-offset-3">
                    @yield('content')
                </div>
            </div>
			
		</div>
	</div>
	


	{{-- <footer id="footer" class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-md-offset-3">
					<div class="footer-inner">
						<div class="row">
							<div class="col-sm-12">
								<div class="instagram">
									<h2 class="title"><a href="#">Follow Me @ Instagram</a></h2>
									<ul>
										<li><a href="#"><img src="images/instagram/1.jpg" alt="Image"></a></li>
										<li><a href="#"><img src="images/instagram/2.jpg" alt="Image"></a></li>
										<li><a href="#"><img src="images/instagram/3.jpg" alt="Image"></a></li>
										<li><a href="#"><img src="images/instagram/4.jpg" alt="Image"></a></li>
										<li><a href="#"><img src="images/instagram/5.jpg" alt="Image"></a></li>
										<li><a href="#"><img src="images/instagram/6.jpg" alt="Image"></a></li>
										<li><a href="#"><img src="images/instagram/7.jpg" alt="Image"></a></li>
										<li><a href="#"><img src="images/instagram/8.jpg" alt="Image"></a></li>
										<li><a href="#"><img src="images/instagram/9.jpg" alt="Image"></a></li>
										<li><a href="#"><img src="images/instagram/10.jpg" alt="Image"></a></li>
									</ul>
								</div>
							</div>

						</div>
						<div class="footer-widgets">
							<div class="row">
								<div class="col-sm-4">
									<div class="widget">
										<h2 class="title"><span>About Me</span></h2>
										<p>
											I am tancho a Graphic Designer based in New York, specializing in User Interface Design and Development.
										</p>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="widget">
										<h2 class="title"><span>Contact Me</span></h2>
										<ul>
											<li>
												Tel: +123 456 789
											</li>
											<li>
												Email: name@domain.com
											</li>
											<li>
												Address: 820 Utica Ave, Brooklyn, NY
											</li>
										</ul>
									</div>
								</div>
								<div class="col-sm-4">
									<div class="widget">
										<h2 class="title"><span>Web Links</span></h2>
										<ul>

											<li><a href="#">Tips & tricks</a></li>
											<li><a href="#">Examples</a></li>
											<li><a href="#">Documentation</a></li>
											<li><a href="#">Support</a></li>
										</ul>
									</div>
								</div>
								<div class="col-sm-12">
									<div class="copyright">
										<p>Tancho @ 2018. Design by <a href="#">Kendy</a></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer> --}}


	<!-- Scripts -->
	<script src="{{asset('web')}}/js/libs/jquery-1.12.4.min.js"></script>
	<script src="{{asset('web')}}/js/libs/masonry.pkgd.min.js"></script>
	<script src="{{asset('web')}}/js/libs/imagesloaded.pkgd.min.js"></script>
	<script src="{{asset('web')}}/js/scripts.js"></script>
	<!-- End Scripts -->

</body>

</html>