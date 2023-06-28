<!--header-->
<header id="header" class="header header-style-1">
		<div class="container-fluid">
			<div class="row">
				<div class="topbar-menu-area">
					<div class="container">
						<div class="topbar-menu left-menu">
							<ul>
								<li class="menu-item" >
									<a title="Contact: +1(868) 364-2362" href="#" ><span class="icon label-before fa fa-mobile"></span>Contact: +1(868) 364-2362</a>
								</li>
							</ul>
						</div>
						<div class="topbar-menu right-menu">
							<ul>
								
								<li class="menu-item lang-menu menu-item-has-children parent">
									<a title="English" href="#"><span class="img label-before"><img src="{{ asset ('template0/images/lang-en.png') }}" alt="lang-en"></span>English<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="submenu lang" >
										<li class="menu-item" ><a title="hungary" href="#"><span class="img label-before"><img src="{{ asset ('template0/images/lang-hun.png') }}" alt="lang-hun"></span>Hungary</a></li>
										<li class="menu-item" ><a title="german" href="#"><span class="img label-before"><img src="{{ asset ('template0/images/lang-ger.png') }}" alt="lang-ger" ></span>German</a></li>
										<li class="menu-item" ><a title="french" href="#"><span class="img label-before"><img src="{{ asset ('template0/images/lang-fra.png') }}" alt="lang-fre"></span>French</a></li>
										<li class="menu-item" ><a title="canada" href="#"><span class="img label-before"><img src="{{ asset ('template0/images/lang-can.png') }}" alt="lang-can"></span>Canada</a></li>
									</ul>
								</li>
								<li class="menu-item menu-item-has-children parent" >
									<a title="Dollar (USD)" href="#">Dollar (USD)<i class="fa fa-angle-down" aria-hidden="true"></i></a>
									<ul class="submenu curency" >
                                    <li class="menu-item" >
											<a title="Dollar (USD)" href="#">Dollar (USD)</a>
										</li>
                                        <li class="menu-item" >
											<a title="Dollar (TTD)" href="#">Dollar (TTD)</a>
										</li>
										<li class="menu-item" >
											<a title="Pound (GBP)" href="#">Pound (GBP)</a>
										</li>
										<li class="menu-item" >
											<a title="Euro (EUR)" href="#">Euro (EUR)</a>
										</li>
									</ul>
								</li>

								@if(Route::has('login'))
									@auth
											@if(Auth::user()->utype === 'ADM')
												<li class="menu-item menu-item-has-children parent" >
													<a title="My Account" href="#">Admin, {{Auth::user()->first_name}} {{Auth::user()->last_name}}<i class="fa fa-angle-down" aria-hidden="true"></i></a>
													<ul class="submenu curency" >
														<li class="menu-item" >
															<a title="Dashboard" href="{{ route('dashboard') }}">Dashboard</a>
														</li>
														<form method="POST" action="{{ route('logout') }}">
															@csrf

															<li class="menu-item">
																<a href="{{ route('logout') }}" onclick="event.preventDefault(); closest('form').submit();">Logout</a>
															</li>
														</form>
													</ul>
												</li>
											@else
												<li class="menu-item menu-item-has-children parent" >
													<a title="My Account" href="#">Hello, {{Auth::user()->first_name}} {{Auth::user()->last_name}}<i class="fa fa-angle-down" aria-hidden="true"></i></a>
													<ul class="submenu curency" >
														<li class="menu-item" >
															<a title="Dashboard" href="{{ route('myaccount') }}">My Account</a>
														</li>

														<li class="menu-item" >
															<a title="Dashboard" href="{{ route('orders') }}">My Orders</a>
														</li>
														<form method="POST" action="{{ route('logout') }}">
														@csrf

															<li class="menu-item">
															<a href="{{ route('logout') }}" onclick="event.preventDefault(); closest('form').submit();">Logout</a>
															</li>
													</form>
													</ul>
												</li>
											@endif
					
								@else
										<li class="menu-item" ><a title="Register or Login" href="{{ route('login') }}">Login</a></li>
										<li class="menu-item" ><a title="Register or Login" href="{{ route('register') }}">Register</a></li>
								@endif
							@endif


							</ul>
						</div>
					</div>
				</div>

				<div class="container">
					<div class="mid-section main-info-area">

						<div class="wrap-logo-top left-section">
							<a href="{{ route('home') }}" class="link-to-home"><img src="{{ asset ('template0/images/logo-top-1.png') }}" alt="mercado"></a>
						</div>

						<div class="wrap-search center-section">
							<div class="wrap-search-form">
								<form action="#" id="form-search-top" name="form-search-top">
									<input type="text" name="search" value="" placeholder="Search here...">
									<button form="form-search-top" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
									<div class="wrap-list-cate">
										<input type="hidden" name="product-cate" value="0" id="product-cate">
										<a href="#" class="link-control">All Category</a>
										<ul class="list-cate">
											<li class="level-0">All Category</li>
												<li class="level-1">-Laptops</li>
												<li class="level-1">-Desktops</li>
												<li class="level-1">-Gaming PCs</li>
												<li class="level-1">-Monitors</li>
												<li class="level-1">-Speackers</li>
												<li class="level-1">-Mouse and Keyboards</li>
												<li class="level-1">-Tech Accessories</li>
												<li class="level-1">-PC Parts</li>
										</ul>
									</div>
								</form>
							</div>
						</div>

						<div class="wrap-icon right-section">
							<div class="wrap-icon-section wishlist">
								<a href="{{ route('favorites') }}" class="link-direction">
									<i class="fa fa-heart" aria-hidden="true"></i>
									<div class="left-info">
										<span class="index">0 item</span>
										<span class="title">Favorites</span>
									</div>
								</a>
							</div>
							<div class="wrap-icon-section minicart">
								<a href="{{ route('cart') }}" class="link-direction">
									<i class="fa fa-shopping-basket" aria-hidden="true"></i>
									<div class="left-info">
										<span class="index">4 items</span>
										<span class="title">CART</span>
									</div>
								</a>
							</div>
							<div class="wrap-icon-section show-up-after-1024">
								<a href="#" class="mobile-navigation">
									<span></span>
									<span></span>
									<span></span>
								</a>
							</div>
						</div>

					</div>
				</div>

				<div class="nav-section header-sticky">
					<div class="header-nav-section">
						<div class="container">
							<ul class="nav menu-nav clone-main-menu" id="mercado_haead_menu" data-menuname="Sale Info" >
								<li class="menu-item"><a href="#" class="link-term">Weekly Featured</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="#" class="link-term">Hot Sale items</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="#" class="link-term">Top new items</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="#" class="link-term">Top Selling</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="#" class="link-term">Top rated items</a><span class="nav-label hot-label">hot</span></li>
							</ul>
						</div>
					</div>

					<div class="primary-nav-section">
						<div class="container">
							<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
								<li class="menu-item home-icon">
									<a href="{{ route('home') }}" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
								</li>
								<li class="menu-item">
									<a href="{{ route('store') }}" class="link-term mercado-item-title">Shop</a>
								</li>
								<!-- <li class="menu-item">
									<a href="{{ route('cart') }}" class="link-term mercado-item-title">Cart</a>
								</li>
								<li class="menu-item">
									<a href="{{ route('checkout') }}" class="link-term mercado-item-title">Checkout</a>
								</li> -->
								<li class="menu-item">
									<a href="{{ route('aboutus') }}" class="link-term mercado-item-title">About Us</a>
								</li>
								<li class="menu-item">
									<a href="{{ route('contactus') }}" class="link-term mercado-item-title">Contact Us</a>
								</li>	
								<li>

							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
<!--header end-->