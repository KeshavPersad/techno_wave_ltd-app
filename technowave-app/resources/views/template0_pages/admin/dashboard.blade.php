<x-layouts.layout-template0-home>

<title>Techno Wave Ltd. || {{''}}Admin Dashboard</title>	


<main id="main" class="main-site left-sidebar">

    <div class="container">

        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><span>Dashboard</span></li>
            </ul>
        </div>
        <div class="row">

            <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

                <div class="wrap-shop-control">

                    <h1 class="shop-title">Admin Dashboard</h1>

                    <!-- <div class="wrap-right">

                        <div class="change-display-mode">
                            <a href="{{ route('allproducts') }}" class="grid-mode display-mode active"><i class="fa fa-th"></i>Grid</a>
                            <a href="{{ route('allproductslist') }}" class="list-mode display-mode"><i class="fa fa-th-list"></i>List</a>
                        </div>

                    </div> -->

                </div><!--end wrap shop control-->

                <div class="row">


                </div>

            </div><!--end main products area-->

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


        </div><!--end row-->

    </div><!--end container-->

    </br>
    </br>          
    </br>

</main>
<!--main area-->


</x-layouts.layout-template0-home>