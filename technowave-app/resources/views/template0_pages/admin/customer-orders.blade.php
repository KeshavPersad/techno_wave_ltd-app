<x-layouts.layout-template0-home>

<title>Techno Wave Ltd. || {{''}}Customer Orders</title>   
        <!--main area-->
    <main id="main" class="main-site">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="{{ route ('dashboard')}}" class="link">Dashboard</a></li>
                <li class="item-link"><span>Customer Orders</span></span></li>
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
                                    <h5 class="user-name" >{{ $user_details->first_name}} {{ $user_details->last_name}}</h5>
                                    <h6 class="user-email" >{{ $user_details->email}}</h6>
                                    
                                    <div class="widget mercado-widget filter-widget brand-widget">
                                    <a class="widget-title"></a>
                                </div>
                                </div>

                                <div class="widget mercado-widget filter-widget brand-widget">
                                    <a class="widget-title" href="{{ route('registered.userslist') }}"><i class="fa-solid fa-user"></i> Registered Users</a>
                                </div>

                                <div class="widget mercado-widget filter-widget brand-widget">
                                    <a class="widget-title" href="{{ route('customer.orders') }}"><i class="fa-solid fa-box-open"></i> Customer Order</a>
                                </div>

                                <div class="widget mercado-widget filter-widget brand-widget">
                                    <a class="widget-title" href="{{ route('customer.orders') }}"><i class="fa-solid fa-chart-line"></i> Sale Statistics</a>
                                </div>

                                <div class="widget mercado-widget filter-widget brand-widget">
                                    <a class="widget-title" href="{{ route('dashboard') }}"><i class="fa-solid fa-user-plus"></i> Add Admin</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- side bar end -->

                <!-- main content start -->
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                    
                <x-template0.adminordersearch/>

                    <div class="card h-100">
                    <div class="wrap-iten-in-cart">
                        
                    <div class="wrap-shop-control">

                    <h1 class="shop-title">Customer Orders</h1>

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
                                                    <a class="btn btn-primary" href="{{ route('customer.order.details', ['id' => $data->id]) }}">View Details</a>
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

        </div>
    </div>



</x-layouts.layout-template0-home>
