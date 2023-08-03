<x-layouts.layout-template0-home>

<title>Techno Wave Ltd. || {{''}}Your Orders</title>   
        <!--main area-->
    <main id="main" class="main-site">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="{{ route ('home')}}" class="link">Home</a></li>
                <li class="item-link"><a href="{{ route ('myaccount')}}" class="link">My Account</a></li>
                <li class="item-link"><span>Order History</span></span></li>
            </ul>
        </div>

        <div class=" main-content-area">
            <div class="row gutters">

                <!-- side bar start -->
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="account-settings">
                                <div class="user-profile">
                                    <div class="user-avatar">
                                        <img src="{{ asset('storage/' . $user_details->user_image) }}" alt="Maxwell Admin" width="175" height="175" >
                                    </div>
                                    <h5 class="user-name" >{{ $user_details->first_name}} {{ $user_details->last_name}}</h5>
                                    <h6 class="user-email" >{{ $user_details->email}}</h6>
                                    
                                    <div class="widget mercado-widget filter-widget brand-widget">
                                    <a class="widget-title"></a>
                                </div>
                                </div>

                                <div class="widget mercado-widget filter-widget brand-widget">
                                    <a class="widget-title" href="{{ route('myaccount') }}"><i class="fa-solid fa-user"></i> Personal Information</a>
                                </div>
                                <div class="widget mercado-widget filter-widget brand-widget">
                                    <a class="widget-title" href="{{ route('orders') }}"><i class="fa-solid fa-box-open"></i> Order History</a>
                                </div>
                                <div class="widget mercado-widget filter-widget brand-widget">
                                    <a class="widget-title" href="{{ route('favorites') }}"><i class="fa-solid fa-file"></i> Reviewed Products</a>
                                </div>
                                <div class="widget mercado-widget filter-widget brand-widget">
                                    <a class="widget-title" href="{{ route('favorites') }}"><i class="fa-solid fa-heart"></i> Wish List</a>
                                </div>

                                <div class="user-profile">
                                <a class="widget-title"><i class="fa-solid fa-location-dot"></i> Billing Address</a>
                                    <h5 class="user-name" >{{ $user_details->user_lot_number}}, {{ $user_details->user_street}},</h5>
                                    <h5 class="user-email" >{{ $user_details->user_city}}</h5>
                                    
                                    <div class="widget mercado-widget filter-widget brand-widget">
                                    <a class="widget-title"></a>
                                </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- side bar end -->



                <!-- main content start -->
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="card h-100">
                    <div class="wrap-iten-in-cart">
                        <div class="wrap-shop-control">

                        <h1 class="shop-title">Order History</h1>

                        </div><!--end wrap shop control-->

                            </br>
                            </br>

                        <div class="card">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th> </th>
                                            <th> </th>
                                            <th> </th>
                                            <th>Order #</th>
                                            <th>Date</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                            <th>Order Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($orders as $data)
                                            <tr>
                                                <td> </td>
                                                <td> </td>
                                                <td> </td>
                                                <td>{{ $data->id }}</td>
                                                <td>{{ $data->created_at }}</td>
                                                <td>${{ $data->total }}</td>
                                                <td class="green_btn"><i class="fa-solid fa-truck-ramp-box"> </i>  Delivered</td>
                                                <td>
                                                    <a class="btn btn-primary" href="{{ route('orders.show', ['id' => $data->id]) }}">View Details</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- main content end -->

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

        </div>
    </div>



</x-layouts.layout-template0-home>
