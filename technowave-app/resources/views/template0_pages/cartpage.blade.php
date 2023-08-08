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
                                                    <span class="subtitle">On Orders Over $6000.00</span>
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
                            <h3 class="box-title">Cart Products<a class="count-review"> ({{$cart_count}})</a></h3>
                           
                            <ul class="products-cart">

                                @foreach($cart_details as $data)

                                    <li class="pr-cart-item">
                                        <div class="product-image">
                                            <figure><img src="{{ asset('storage/images/product/' . $data->product_image1) }}" alt=""></figure>
                                        </div>
                                        <div class="product-name">
                                            <a class="link-to-product" href="{{ route ('store.details', ['id' => $data->id]) }}">{{ $data->product_title }}</a>

                                        
                                            <p>{{$data->product_description}}</p>

                                            @if ($data->product_status == 1)
                                            
                                                <a class="status produtc-price"><p class="status">In Stock</p></a>

                                                <a class="price-field produtc-price"><p class="price">${{ $checkout->formatPrice($data->product_price) }}</p></a>

                                                <form action="{{ route('cart.destroy', ['id' => $data->pivot->id]) }}" method="POST" >
                                                        @csrf
                                                        @method('PUT')

                                                    <div class="quantity">
                                                        <div class="quantity-input">
                                                            <input type="number" name="cart_quantity" id="cart_quantity" class="" value="{{$data->pivot->cart_quantity}}" min="1" max="10">
                                                        </div>
                                                    </div>

                                                    <div class="price-field sub-total"><p class="price">Subtotal: ${{ $checkout->formatPrice($data->cartQuantityPrice()) }}</p></div>

                                                    <div class="quantity">
                                                        <div class="price-field sub-total">

                                                        </div>
                                                    </div>
                                                    <div class="quantity">
                                                        <div class="price-field sub-total">

                                                        </div>
                                                    </div>
                                                    <div class="quantity">
                                                        <div class="price-field sub-total">

                                                        </div>
                                                    </div>

                                                        <div class="quantity">
                                                            <div class="price-field sub-total">
                                                                <button class="fa-solid fa-rotate-right" aria-hidden="true" type="submit"></button>

                                                                <input type="hidden" name="product_id" value="{{ $data->id }}">
                                                                <input type="hidden" name="cart_id" value="{{ $data->pivot->id }}">
                                                            </div>
                                                        </div>

                                                </form>
                                            
                                            @else
                                                <a class="status-out produtc-price"><p class="status-out">Out of Stock</p></a>

                                                <a class="price-field produtc-price"><p class="price">Unit Price: ${{ $checkout->formatPrice($data->product_price) }}</p></a>

                                                <div class="quantity">
                                                        <div class="quantity-input">
                                                            <input type="number" name="product-quatity" value="0" min="1" max="10" readonly>									
                                                        </div>
                                                </div>

                                                <div class="price-field sub-total"><p class="price">Subtotal: $0.00</p></div>

                                            @endif
								
                                           
                                            <div class="detail-info">
                                                <form action="{{ route('cart.destroy', ['id' => $data->pivot->id]) }}" method="POST" >
                                                        @csrf
                                                        @method('Delete')

                                                        <div class="wrap-butons">
                                                            <button  type="submit" class="btn add-to-cart_Shop"><i class="fa-solid fa-trash-can"></i> Remove from Cart</button>

                                                            <input type="hidden" name="product_id" value="{{ $data->id }}">
                                                            <input type="hidden" name="cart_id" value="{{ $data->pivot->id }}">
                                                        </div>
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
                                <p class="summary-info"><span class="title">Subtotal:</span><b class="index">${{ $checkout->formatPrice($checkout->getSubtotal()) }}</b></p>
                                    @if( $checkout->formatPrice($checkout->getdeliveryFee()) == 0 )
										<p class="summary-info"><span class="title">Delivery:</span><b class="index">Free Delivery</b></p>
									@else
                                    <p class="summary-info"><span class="title">Delivery:</span><b class="index">${{$checkout->formatPrice($checkout->getdeliveryFee()) }}</b></p>
									@endif
                                
                                <p class="summary-info total-info "><span class="title">Total:</span><b class="index">${{ $checkout->formatPrice($checkout->getTotal()) }}</b></p>
                            </div>
                            
                            <div class="update-clear">

                                <a class="btn btn-clear" href="{{ route('checkout', ['id' => $data->id]) }}">Proceed to Checkout</a>          
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
                                                        <span class="subtitle">On Orders Over $6000.00</span>
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
                <h3 class="title-box">Popular Products</h3>
                <div class="wrap-products">
                    <div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}' >


                    @foreach ($bestSellingProducts as $data)

                        <div class="product product-style-2 equal-elem ">
                            <div class="product-thumnail">
                                <a href="{{ route ('store.details', ['id' => $data->id]) }}" title="{{ $data->product_title }}">
                                    <figure><img src="{{ asset('storage/images/product/' . $data->product_image1) }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
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