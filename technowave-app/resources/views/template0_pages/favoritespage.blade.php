<x-layouts.layout-template0-home>

<title>Techno Wave Ltd. || {{''}}Favorit Products</title>

    <!--main area-->
    <main id="main" class="main-site">
        <div class="container">
            <div class="wrap-breadcrumb">
                <ul>
                    <li class="item-link"><a href="{{ route ('home')}}" class="link">Home</a></li>
                    <li class="item-link"><a href="{{ route ('myaccount')}}" class="link">My Account</a></li>
                    <li class="item-link"><span>Wish List</span></li>
                </ul>
            </div>
            <div class=" main-content-area">
                <div class="adjust">
                    @if ($favorites->isEmpty())
                        <div class="lefter">
                            <div class="wrap-iten-in-cart">
                                <h1 class="box-title_isEmpty">Your Wish List is Empty</h1>
                                <ul class="products-cart">
                                    <li class="pr-cart-item">
                                        <a class="link-to-shop" href="{{ route ('store') }}">Continue Shopping <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @else
                        <div class="lefter">
                            <div class="wrap-iten-in-cart">
                                <h3 class="box-title">Wish List || Products ({{$wish_list_count}})</h3>
                                <ul class="products-cart">
                                    @foreach($favorites_details as $data)
                                        <li class="pr-cart-item">
                                            <div class="product-image">
                                                <figure><img src="{{ asset('storage/' . $data->product_image1) }}" alt=""></figure>
                                            </div>

                                            <div class="product-name">
                                                <a class="link-to-product" href="{{ route ('store.details', ['id' => $data->id]) }}">{{ $data->product_title }}</a>
                                                </br>
                                                </br>
                                                <p>{{$data->product_description}}</p>
                                                </br>
                                                </br>
                                                <a class="price-field produtc-price"><p class="price">Status: {{$data->product_status}}</p></a>
                                                <a class="price-field produtc-price"><p class="price">Price: ${{$data->product_price}}</p></a>

                                                <div class="detail-info">
                                                    <form action="{{ route('favorites.destroy', ['id' => $data->pivot->id])  }}" method="POST" >
                                                            @csrf
                                                            @method('Delete')

                                                            <div class="wrap-butons">
                                                                <button  type="submit" class="btn add-to-cart_Shop"><i class="fa-solid fa-trash-can"></i> Remove from Wish List</button>

                                                                <input type="hidden" name="product_id" value="{{ $data->id }}">
                                                                <input type="hidden" name="cart_id" value="{{ $data->pivot->id }}">
                                                            </div>
                                                    </form>
                                                </div>

                                                <div class="detail-info">
                                                <form action="{{ route('cart') }}" method="POST" >
                                                        @csrf
                                                        @method('PUT')

                                                        <div class="hidden">
                                                        <span>Quantity:</span>
                                                        <div class="quantity-input">
                                                            <input type="text" name="cart_quantity" value="1" data-max="1" pattern="[0-9]*" >
                                                        </div>
                                                        </div>

                                                        <div class="wrap-butons">
                                                            <button  type="submit" class="btn add-to-cart_Shop"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Add to Cart</button>

                                                            <input type="hidden" name="product_id" value="{{ $data->id }}">
                                                        </div>
                                                </form>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endif

                    <div class="righter">
                            <div class="widget widget-our-services ">
                                <div class="widget-content">
                                    <ul class="our-services">

                                        <li class="service">
                                            <a class="link-to-service" href="#">
                                                <i class="fa fa-truck" aria-hidden="true"></i>
                                                <div class="right-content">
                                                    <b class="title">Free Delivery</b>
                                                    <span class="subtitle">Nationwide</span>
                                                    <p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="service">
                                            <a class="link-to-service" href="#">
                                                <i class="fa fa-gift" aria-hidden="true"></i>
                                                <div class="right-content">
                                                    <b class="title">Special Offer</b>
                                                    <span class="subtitle">Get a gift!</span>
                                                    <p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
                                                </div>
                                            </a>
                                        </li>

                                        <li class="service">
                                            <a class="link-to-service" href="#">
                                                <i class="fa fa-reply" aria-hidden="true"></i>
                                                <div class="right-content">
                                                    <b class="title">Order Return</b>
                                                    <span class="subtitle">Return within 7 days</span>
                                                    <p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            </br>
                            </br>
                            </br>

                            <div class="widget mercado-widget widget-product">
                                <h2 class="widget-title">Popular Products</h2>
                                <div class="widget-content">
                                    <ul class="products">

                                        @foreach ($bestSellingProducts as $data)

                                            <li class="product-item">
                                                <div class="product product-widget-style">
                                                    <div class="thumbnnail">
                                                        <a href="{{ route ('store.details', ['id' => $data->id]) }}" title="{{ $data->product_title }}">
                                                            <figure><img src="{{ asset('storage/' . $data->product_image1) }}" alt=""></figure>
                                                        </a>
                                                    </div>
                                                    <div class="product-info">
                                                        <a href="{{ route ('store.details', ['id' => $data->id]) }}" class="product-name"><span>{{ $data->product_title }}</span></a>
                                                        <div class="wrap-price"><span class="product-price">${{ $data->product_price }}</span></div>
                                                    </div>
                                                </div>
                                            </li>

                                        @endforeach

                                    </ul>
                                </div>
                            </div><!-- brand widget-->
                    </div><!--end sitebar-->
                </div>



            
                <div class="wrap-show-advance-info-box style-1 box-in-site">
                    <h3 class="title-box">Popular Products</h3>
                    <div class="wrap-products">
                        <div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}' >


                            @foreach ($bestSellingProducts as $data)

                                <div class="product product-style-2 equal-elem ">
                                    <div class="product-thumnail">
                                        <a href="{{ route ('store.details', ['id' => $data->id]) }}" title="{{ $data->product_title }}">
                                            <figure><img src="{{ asset('storage/' . $data->product_image1) }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
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

                            @endforeach


                        </div>
                    </div><!--End wrap-products-->
                </div>
            </div><!--end main content area-->
        </div><!--end container-->
    </main>
    <!--main area-->

</x-layouts.layout-template0-home>