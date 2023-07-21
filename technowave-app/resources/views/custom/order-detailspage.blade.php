<x-layouts.layout-template0-home>

<title>Techno Wave Ltd. || {{''}}Order Details</title>   
        <!--main area-->
    <main id="main" class="main-site">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="{{ route ('home') }}" class="link">Home</a></li>
                <li class="item-link"><a href="{{ route ('orders') }}" class="link">Your Orders</a>
                <li class="item-link"><span>Order Details</span></li>

            </ul>
        </div>

            <div class="adjust">

                        <div class="lefter">
                            <div class="wrap-iten-in-cart">
                                <h2> Order Details </h2>
 
                                <h3 >Hello {{ $user->first_name}},</h3>
                                <p>Your order had been Confirmed. Delivery is expected within few days.</p>

                                @foreach($order_products as $data)
                                    <ul class="products-cart">

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
                                                    <a class="price-field produtc-price"><p class="price">Qyt: {{$data->pivot->order_product_quantity}}</p></a>
                                                    <div class="price-field produtc-price"><p class="price">Unit Price: ${{$data->pivot->order_product_price}}</p></div>
                                                    <div class="price-field sub-total"><p class="price">Subtotal: ${{ $data->cartQuantityPrice()}}</p></div>

                                                    <input type="hidden" name="product_id" value="{{ $data->id }}">
                                                    <input type="hidden" name="cart_id" value="{{ $data->pivot->id }}">
                                                </div>
                                        
                                        </li>
                                    </ul>
                                @endforeach
                            </div>
                        </div>

                        <div class="righter">
                            <div class="summary">
                                <div class="order-summary">
                                    <h4 class="title-box">Order Summary</h4>
                                    <p class="summary-info"><span class="title">Order ID:</span><b class="index">#{{$order->id}}</b></p>
                                    <p class="summary-info"><span class="title">Order Date:</span><b class="index">{{ $data->created_at }}</b></p>
                                    <p class="summary-info"><span class="title">Payment Method:</span><b class="index">{{$order->payment}}</b></p>
                                    <p class="summary-info"><span class="title">Subtotal:</span><b class="index">${{ $order->subtotal }}</b></p>
                                    <p class="summary-info"><span class="title">Delivery:</span><b class="index">Free Delivery</b></p>
                                    <p class="summary-info total-info "><span class="title">Total:</span><b class="index">${{ $order->total }}</b></p>
                                </div>
                                <br/>


                                
                                <div class="update-clear">
                                    <a class="link-to-shop" href="{{ route ('store') }}">Continue Shopping <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                                </div>
                            </div> 
                        </div>

            </div>
    </div>


</x-layouts.layout-template0-home>

