<x-layouts.layout-template0-home>

    <title>Techno Wave Ltd. || {{''}}Home Page</title>	
    
    <main id="main">
            <div class="container">

                <div class="header-nav-section">
						<div class="container">
							<ul class="nav menu-nav clone-main-menu" id="mercado_haead_menu" data-menuname="Sale Info" >
								<li class="menu-item"><a href="#fashion_1a" class="link-term">Weekly Featured</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="#Popular_Products" class="link-term">Hot Sale items</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="#Latest_Products" class="link-term">Top new items</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="#Popular_Products" class="link-term">Top Selling</a><span class="nav-label hot-label">hot</span></li>
								<li class="menu-item"><a href="#Latest_Products" class="link-term">Top rated items</a><span class="nav-label hot-label">hot</span></li>
							</ul>
					    </div>
				</div>

                <!--MAIN SLIDE-->
                <div class="wrap-main-slide">
                    <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">
                        <div class="item-slide">
                            <img src="{{ asset('template0/images/main-slider-1-1.jpg') }}" alt="" class="img-slide">
                            <div class="slide-info slide-1">
                                <h2 class="f-title">Welcome to <b>Techno Wave</b></h2>
                                <span class="subtitle">The Number one Tech provider in Trinidad and Tobago</span>
                                <p class="sale-info">With all the tech accesories you need.</p>
                                <a href="{{ route('store') }}" class="btn-link">Shop Now</a>
                            </div>
                        </div>
                        <div class="item-slide">
                            <img src="{{ asset('template0/images/main-slider-1-2.jpg') }}" alt="" class="img-slide">
                            <div class="slide-info slide-2">
                                <h2 class="f-title">Earn Techno Points</h2>
                                <span class="f-subtitle">For every point used you get $5.00 off</span>
                                <p class="discount-code">Use Point on your next Purchase</p>
                                <h4 class="s-title"></h4>
                                <p class="s-subtitle">Transparent Bra Straps</p>
                            </div>
                        </div>
                        <div class="item-slide">
                            <img src="{{ asset('template0/images/main-slider-1-3.jpg') }}" alt="" class="img-slide">
                            <div class="slide-info slide-3">
                                <h2 class="f-title">Great Range of <b>Exclusive Furniture Packages</b></h2>
                                <span class="f-subtitle">Exclusive Furniture Packages to Suit every need.</span>
                                <p class="sale-info">Stating at: <b class="price">$225.00</b></p>
                                <a href="#" class="btn-link">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--BANNER-->
                <div class="wrap-banner style-twin-default">
                    <div class="banner-item">
                        <a href="#" class="link-banner banner-effect-1">
                            <figure><img src="{{ asset('template0/images/home-1-banner-1.jpg') }}" alt="" width="580" height="190"></figure>
                        </a>
                    </div>
                    <div class="banner-item">
                        <a href="#" class="link-banner banner-effect-1">
                            <figure><img src="{{ asset('template0/images/home-1-banner-2.jpg') }}" alt="" width="580" height="190"></figure>
                        </a>
                    </div>
                </div>

                <!--Popular Products-->
                <div class="wrap-show-advance-info-box style-1 has-countdown" id= "Popular_Products">
                    <h3 class="title-box">Popular Products</h3>
                    <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>


                        @foreach ($bestSellingProducts as $data)

                            <form action="{{ route('cart') }}" method="POST" >
                                @csrf
                                @method('PUT')
                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="{{ route ('store.details', ['id' => $data->id]) }}" title="{{ $data->product_title }}">
                                                <figure><img src="{{ asset('storage/images/product/' . $data->product_image1) }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                            </a>
                                            <div class="wrap-btn">
                                                <a href="{{ route ('store.details', ['id' => $data->id]) }}" class="function-link">Quick View</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="{{ route ('store.details', ['id' => $data->id]) }}" class="product-name"><span>{{ $data->product_title }}</span></a>
                                            <div class="wrap-price"><span class="product-price">${{ $data->product_price }}</span></div>
                                        </div>
                                    </div>
                            </form>

                        @endforeach

                    </div>
                </div>

                <!--Latest Products-->
                <div class="wrap-show-advance-info-box style-1" id="Latest_Products">
                    <h3 class="title-box">Latest Products</h3>
                    <div class="wrap-top-banner">
                        <a href="#" class="link-banner banner-effect-2">
                            <figure><img src="{{ asset('template0/images/digital-electronic-banner.jpg') }}" width="1170" height="240" alt=""></figure>
                        </a>
                    </div>
                    <div class="wrap-products" id= "Latest_Products">
                        <div class="wrap-product-tab tab-style-1">						
                            <div class="tab-contents">
                                <div class="tab-content-item active" id="digital_1a">
                                    <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >



                                    @foreach ($recent as $data)

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="{{ route ('store.details', ['id' => $data->id]) }}" title="{{ $data->product_title }}">
                                                    <figure><img src="{{ asset('storage/images/product/' . $data->product_image1) }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">New</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="{{ route ('store.details', ['id' => $data->id]) }}" class="function-link">Quick View</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="{{ route ('store.details', ['id' => $data->id]) }}" class="product-name"><span>{{ $data->product_title }}</span></a>
                                                <div class="wrap-price"><span class="product-price">${{ $data->product_price }}</span></div>
                                            </div>
                                        </div>

                                    @endforeach



                                    </div>
                                </div>							
                            </div>
                        </div>
                    </div>
                </div>

                <!--Product Categories-->
                <div class="wrap-show-advance-info-box style-1">
                    <h3 class="title-box">Product Categories</h3>
                    <div class="wrap-top-banner">
                        <a href="#" class="link-banner banner-effect-2">
                            <figure><img src="{{ asset('template0/images/fashion-accesories-banner.jpg') }}" width="1170" height="240" alt=""></figure>
                        </a>
                    </div>
                    <div class="wrap-products">
                        <div class="wrap-product-tab tab-style-1">
                            <div class="tab-control">
                                <a href="#fashion_1a" class="tab-control-item active">Smartphone</a>
                                <a href="#fashion_1b" class="tab-control-item">Watch</a>
                                <a href="#fashion_1c" class="tab-control-item">Laptop</a>
                                <a href="#fashion_1d" class="tab-control-item">Tablet</a>
                            </div>
                            <div class="tab-contents">

                                <div class="tab-content-item active" id="fashion_1a">
                                    <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="{{ asset('template0/images/products/fashion_01.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Lois Caron LCS-4027 Analog Watch - For Men</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="{{ asset('template0/images/products/fashion_02.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item sale-label">sale</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Business Men Leather Laptop Tote Bags Man Crossbody </span></a>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="{{ asset('template0/images/products/fashion_09.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Alberto Torresi Borgo Yellow Shoes - Alberto Torresi</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                <figure><img src="{{ asset('template0/images/products/fashion_03.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item new-label">new</span>
                                                <span class="flash-item sale-label">sale</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="#" class="product-name"><span>Alberto Torresi Borgo Yellow Shoes - Alberto Torresi</span></a>
                                            <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                        </div>
                                    </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="{{ asset('template0/images/products/fashion_07.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="{{ asset('template0/images/products/fashion_08.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item sale-label">sale</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="{{ asset('template0/images/products/fashion_06.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="{{ asset('template0/images/products/fashion_05.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="tab-content-item" id="fashion_1b">
                                    <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="{{ asset('template0/images/products/fashion_03.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="{{ asset('template0/images/products/fashion_07.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="{{ asset('template0/images/products/fashion_08.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="{{ asset('template0/images/products/fashion_09.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quic view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="{{ asset('template0/images/products/fashion_02.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="{{ asset('template0/images/products/fashion_05.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="{{ asset('template0/images/products/fashion_08.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="{{ asset('template0/images/products/fashion_04.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="tab-content-item" id="fashion_1c">
                                    <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="{{ asset('template0/images/products/fashion_02.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="{{ asset('template0/images/products/fashion_03.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                    <span class="flash-item sale-label">sale</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="{{ asset('template0/images/products/fashion_04.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="{{ asset('template0/images/products/fashion_05.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                    <span class="flash-item sale-label">sale</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="{{ asset('template0/images/products/fashion_06.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="{{ asset('template0/images/products/fashion_07.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                    <span class="flash-item sale-label">sale</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="{{ asset('template0/images/products/fashion_08.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quic view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="{{ asset('template0/images/products/fashion_09.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                    <span class="flash-item sale-label">sale</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quic view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="tab-content-item" id="fashion_1d">
                                    <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="{{ asset('template0/images/products/fashion_05.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quick view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                                <div class="product-rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="{{ asset('template0/images/products/fashion_04.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item sale-label">sale</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quic view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                                <div class="product-rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="{{ asset('template0/images/products/fashion_03.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                    <span class="flash-item sale-label">sale</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quic view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                                <div class="product-rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="{{ asset('template0/images/products/fashion_02.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quic view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                                <div class="product-rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="{{ asset('template0/images/products/fashion_01.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quic view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                                <div class="product-rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="{{ asset('template0/images/products/fashion_06.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item sale-label">sale</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quic view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                                <div class="product-rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="{{ asset('template0/images/products/fashion_08.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item new-label">new</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quic view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                                <div class="product-rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                                <div class="wrap-price"><span class="product-price">$250.00</span></div>
                                            </div>
                                        </div>

                                        <div class="product product-style-2 equal-elem ">
                                            <div class="product-thumnail">
                                                <a href="detail.html" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                                    <figure><img src="{{ asset('template0/images/products/fashion_09.jpg') }}" width="800" height="800" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                                </a>
                                                <div class="group-flash">
                                                    <span class="flash-item bestseller-label">Bestseller</span>
                                                </div>
                                                <div class="wrap-btn">
                                                    <a href="#" class="function-link">quic view</a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <a href="#" class="product-name"><span>Radiant-360 R6 Wireless Omnidirectional Speaker [White]</span></a>
                                                <div class="product-rating">
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                    <i class="fa fa-star" aria-hidden="true"></i>
                                                </div>
                                                <div class="wrap-price"><ins><p class="product-price">$168.00</p></ins> <del><p class="product-price">$250.00</p></del></div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>			

            </div>

        </main>

</x-layouts.layout-template0-home>