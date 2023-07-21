<x-layouts.layout-template0-home>

<title>Techno Wave Ltd. || {{''}}Cart </title>	
    	<!--main area-->
    <main id="main" class="main-site">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="{{ route ('home')}}" class="link">Home</a></li>
                <li class="item-link"><span>Cart</span></li>
            </ul>
        </div>
        <div class=" main-content-area">

            <div class="adjust">

                @if ($checkout->isEmpty())
                    <div class="lefter">
                        <div class="wrap-iten-in-cart">
                            <h1 class="box-title_isEmpty">Your Cart is Empty</h1>
                            <ul class="products-cart">

                                <li class="pr-cart-item">
                                    
                                    <a class="link-to-shop" href="{{ route ('store') }}">Continue Shopping <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
        
                                </li>
        
                            </ul>
                        </div>
                    </div>

                    <div class="righter">
                        <div class="summary">
                            <div class="order-summary">
                                <h4 class="title-box">Cart Summary</h4>
                                <p class="summary-info"><span class="title">Subtotal:</span><b class="index">$0.00</b></p>
                                <p class="summary-info"><span class="title">Delivery:</span><b class="index">Free Delivery</b></p>
                                <p class="summary-info total-info "><span class="title">Total:</span><b class="index">$0.00</b></p>
                            </div>
                            
                            <div class="update-clear">
                                <a class="btn btn-clear" href="{{ route('cart') }}">Proceed to Checkout</a>
                                <a class="btn btn-clear" href="{{ route('cart') }}">Clear Cart</a>           
                                <a class="link-to-shop" href="{{ route ('store') }}">Continue Shopping <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                            </div>
                        </div> 

                        </br>
                        </br>
                        </br>

                        <div class="widget widget-our-services ">
                                <div class="widget-content">
                                    <ul class="our-services">

                                        <li class="service">
                                            <a class="link-to-service" href="#">
                                                <i class="fa fa-truck" aria-hidden="true"></i>
                                                <div class="right-content">
                                                    <b class="title">Free Delivery</b>
                                                    <span class="subtitle">On Oder Over $99</span>
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
                    </div> 

                  
                        
             
                @else
                    <div class="lefter">
                        <div class="wrap-iten-in-cart">
                            <h3 class="box-title">Products Name</h3>
                            <ul class="products-cart">

                                @foreach($cart_details as $data)

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
                                            <a class="price-field produtc-price"><p class="price">Unit Price: ${{$data->product_price}}</p></a>

                                            <div class="quantity">
                                                    <div class="quantity-input">
                                                    
                                                        <input type="text" name="product-quatity" value="{{$data->pivot->cart_quantity}}" data-max="120" pattern="[0-9]*">									
                                                        <a class="btn btn-increase" href="#"></a>
                                                        <a class="btn btn-reduce" href="#"></a>
                                                    </div>
                                            </div>

                                            <div class="price-field sub-total"><p class="price">Subtotal: ${{ $data->cartQuantityPrice() }}.00</p></div>


                                            <div class="delete">
                                                
                                                <form action="{{ route('cart.destroy', ['id' => $data->pivot->id]) }}" method="POST">
                                                    @method('Delete')
                                                    @csrf
                                                
                                                    <button class="fa fa-times-circle"><a href="#" class="btn btn-delete" title="">
                                                    </a></button>
                                                    
                                                    <input type="hidden" name="product_id" value="{{ $data->id }}">
                                                    <input type="hidden" name="cart_id" value="{{ $data->pivot->id }}">

                                                </form>
                                                
                                            </div>

                                        </div>
            
                                    </li>

                                @endforeach
        
                            </ul>
                        </div>
                    </div>
                

                    <div class="righter">
                        <div class="summary">
                            <div class="order-summary">
                                <h4 class="title-box">Cart Summary</h4>
                                <p class="summary-info"><span class="title">Subtotal:</span><b class="index">$512.00</b></p>
                                <p class="summary-info"><span class="title">Delivery:</span><b class="index">Free Delivery</b></p>
                                <p class="summary-info total-info "><span class="title">Total:</span><b class="index">$512.00</b></p>
                            </div>
                            
                            <div class="update-clear">
                                <a class="btn btn-clear" href="{{ route('checkout') }}">Proceed to Checkout</a>
                                <a class="btn btn-clear" href="#">Clear Cart</a>           
                                <a class="link-to-shop" href="{{ route ('store') }}">Continue Shopping <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                            </div>
                        </div>

                        </br>
                        </br>
                        </br>
                                <div class="widget widget-our-services ">
                                    <div class="widget-content">
                                        <ul class="our-services">

                                            <li class="service">
                                                <a class="link-to-service" href="#">
                                                    <i class="fa fa-truck" aria-hidden="true"></i>
                                                    <div class="right-content">
                                                        <b class="title">Free Delivery</b>
                                                        <span class="subtitle">On Oder Over $99</span>
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
                    </div>

                @endif

                    


                
            </div><!--end sitebar-->
        </div>



            <div class="wrap-show-advance-info-box style-1 box-in-site">
                <h3 class="title-box">Most Viewed Products</h3>
                <div class="wrap-products">
                    <div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}' >

                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="{{ asset('template0/images/products/digital_04.jpg') }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
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
                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="{{ asset('template0/images/products/digital_17.jpg') }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
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
                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="{{ asset('template0/images/products/digital_15.jpg') }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
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
                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="{{ asset('template0/images/products/digital_01.jpg') }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
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
                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="{{ asset('template0/images/products/digital_21.jpg') }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                </a>
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
                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="{{ asset('template0/images/products/digital_03.jpg') }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
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
                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="{{ asset('template0/images/products/digital_04.jpg') }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
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
                                <a href="#" title="T-Shirt Raw Hem Organic Boro Constrast Denim">
                                    <figure><img src="{{ asset('template0/images/products/digital_05.jpg') }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
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
                </div><!--End wrap-products-->
            </div>

        </div><!--end main content area-->
        
    </div><!--end container-->



    </main>
    <!--main area-->



</x-layouts.layout-template0-home>