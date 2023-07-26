
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
									<a title="English" href="#"><span class="img label-before"><img src="{{ asset ('template0/images/lang-en.png') }}" alt="lang-en"></span>English<i aria-hidden="true"></i></a>
								</li>
								<li class="menu-item menu-item-has-children parent" >
									<a title="Dollar (USD)" href="#">Currency (TTD)<aria-hidden="true"></aria-hidden=></a>

								</li>

								@if(Route::has('login'))
									@auth
											@if(Auth::user()->utype === 'ADM')
												<li class="menu-item menu-item-has-children parent" >
													<a title="My Account" href="#">Admin, {{Auth::user()->first_name}}<i class="fa fa-angle-down" aria-hidden="true"></i></a>
													<ul class="submenu curency" >
														<li class="menu-item" >
															<a title="dashboard" href="{{ route('dashboard') }}"><i class="fa-solid fa-house"></i> Dashboard</a>
														</li>
														<li class="menu-item" >
															<a title="myaccount" href="{{ route('admin-myaccount') }}"><i class="fa-solid fa-user"></i> My Account</a>
														</li>
														<form method="POST" action="{{ route('logout') }}">
															@csrf

															<li class="menu-item">
																<a href="{{ route('logout') }}" onclick="event.preventDefault(); closest('form').submit();"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
															</li>
														</form>
													</ul>
												</li>
												</ul>
												</div>
												</div>
												</div>

													<div class="container">
														<div class="mid-section main-info-area">

															<div class="wrap-logo-top left-section">
																<a href="{{ route('home') }}" class="link-to-home"><img src="{{ asset ('template0/images/logo-top-1.png') }}" alt="mercado"></a>
															</div>

															<x-template0.adminsearch/>

															<div class="wrap-icon right-section minicart">

																<div class="wrap-icon-section minicart">
																	<a href="{{ route('favorites') }}" class="link-direction">
																		<i class="fa fa-heart" aria-hidden="true"></i>
																		<div class="left-info">
																			<span class="index">Top Selling</span>
																			<span class="title">PRODUCTS</span>
																		</div>
																	</a>
																</div>

																<div class="wrap-icon-section minicart">
																	<a href="{{ route('orders') }}" class="link-direction">
																		<i class="fa fa-shopping-basket" aria-hidden="true"></i>
																		<div class="left-info">
																			<span class="index">View Customer</span>
																			<span class="title">ORDERS</span>
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

														<div class="primary-nav-section">
															<div class="container">
																<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
																	<li class="menu-item home-icon">
																		<a href="{{ route('home') }}" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
																	</li>
																	<li class="menu-item">
																		<a href="{{ route('dashboard') }}" class="link-term mercado-item-title">Dashboard</a>
																	</li>
																	<li class="menu-item">
																		<a href="{{ route('allproducts') }}" class="link-term mercado-item-title">Prodcuts</a>
																	</li>
																	<li class="menu-item">
																		<a href="{{ route('categories') }}" class="link-term mercado-item-title">Categories</a>
																	</li>
																	<li class="menu-item">
																		<a href="{{ route('brands') }}" class="link-term mercado-item-title">Brands</a>
																	</li>
																	<li class="menu-item">
																		<a href="{{ route('cart') }}" class="link-term mercado-item-title">Add Admin</a>
																	</li>	
																	<li>

																</ul>
															</div>
														</div>
													</div>




											@else
												<li class="menu-item menu-item-has-children parent" >
													<a title="My Account" href="#">Hello, {{Auth::user()->first_name}}<i class="fa fa-angle-down" aria-hidden="true"></i></a>
													<ul class="submenu curency" >
														<li class="menu-item" >
															<a title="myaccount" href="{{ route('myaccount') }}"><i class="fa-solid fa-user"></i> My Account</a>
														</li>

														<li class="menu-item" >
															<a title="Dashboard" href="{{ route('orders') }}"><i class="fa-solid fa-receipt"></i> My Orders</a>
														</li>
														<form method="POST" action="{{ route('logout') }}">
														@csrf

															<li class="menu-item">
															<a href="{{ route('logout') }}" onclick="event.preventDefault(); closest('form').submit();"><i class="fa-solid fa-right-from-bracket"></i> Logout</a>
															</li>
													</form>
													</ul>
												</li>
												</ul>
												</div>
												</div>
												</div>

													<div class="container">
														<div class="mid-section main-info-area">

															<div class="wrap-logo-top left-section">
																<a href="{{ route('home') }}" class="link-to-home"><img src="{{ asset ('template0/images/logo-top-1.png') }}" alt="mercado"></a>
															</div>

															<x-template0.search/>

															<div class="wrap-icon right-section">
																<div class="wrap-icon-section minicart">
																	<a href="{{ route('favorites') }}" class="link-direction">
																		<i class="fa fa-heart" aria-hidden="true"></i>
																		<div class="left-info">
																			<span class="index">Favorite</span>
																			<span class="title">Prodcuts</span>
																		</div>
																	</a>
																</div>
																<div class="wrap-icon-section minicart">
																	<a href="{{ route('cart') }}" class="link-direction">
																		<i class="fa fa-shopping-basket" aria-hidden="true"></i>
																		<div class="left-info">
																			<span class="index">Your</span>
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

														<div class="primary-nav-section">
															<div class="container">
																<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
																	<li class="menu-item home-icon">
																		<a href="{{ route('home') }}" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
																	</li>
																	<li class="menu-item">
																		<a href="{{ route('store') }}" class="link-term mercado-item-title">Shop</a>
																	</li>
																	<li class="menu-item">
																		<a href="{{ route('cart') }}" class="link-term mercado-item-title">Cart</a>
																	</li>
																	<li class="menu-item">
																		<a href="{{ route('checkout') }}" class="link-term mercado-item-title">Checkout</a>
																	</li>
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
											@endif
					
								@else
										<li class="menu-item" ><a title="Register or Login" href="{{ route('login') }}"><i class="fa-solid fa-right-to-bracket"></i> Login</a></li>
										<li class="menu-item" ><a title="Register or Login" href="{{ route('register') }}">Register</a></li>



													</ul>
												</div>
											</div>
										</div>

										<div class="container">
											<div class="mid-section main-info-area">

												<div class="wrap-logo-top left-section">
													<a href="{{ route('home') }}" class="link-to-home"><img src="{{ asset ('template0/images/logo-top-1.png') }}" alt="mercado"></a>
												</div>

												<x-template0.search/>

												<div class="wrap-icon right-section">
													<div class="wrap-icon-section minicart">
														<a href="{{ route('favorites') }}" class="link-direction">
															<i class="fa fa-shopping-basket" aria-hidden="true"></i>
															<div class="left-info">
																<span class="index">Favorite</span>
																<span class="title">Prodcuts</span>
															</div>
														</a>
													</div>
													<div class="wrap-icon-section minicart">
														<a href="{{ route('cart') }}" class="link-direction">
															<i class="fa fa-shopping-basket" aria-hidden="true"></i>
															<div class="left-info">
																<span class="index">Your</span>
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

											<div class="primary-nav-section">
												<div class="container">
													<ul class="nav primary clone-main-menu" id="mercado_main" data-menuname="Main menu" >
														<li class="menu-item home-icon">
															<a href="{{ route('home') }}" class="link-term mercado-item-title"><i class="fa fa-home" aria-hidden="true"></i></a>
														</li>
														<li class="menu-item">
															<a href="{{ route('store') }}" class="link-term mercado-item-title">Shop</a>
														</li>
														<li class="menu-item">
															<a href="{{ route('cart') }}" class="link-term mercado-item-title">Cart</a>
														</li>
														<li class="menu-item">
															<a href="{{ route('checkout') }}" class="link-term mercado-item-title">Checkout</a>
														</li>
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

								@endif

							@endif
		</div>
	</div>
</header>
<!--header end-->