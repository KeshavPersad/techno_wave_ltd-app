<x-layouts.layout-template0-home>
<title>Techno Wave Ltd. || {{''}}Registered Users</title>	
    	<!--main area-->
<main id="main" class="main-site left-sidebar">

<div class="container">

    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="{{ route('dashboard') }}" class="link">Dashboard</a></li>
            
        </ul>
    </div>
    <div class="row">

        <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
            
        <x-template0.usersearch/>
                    
            <div class="wrap-shop-control">

                <h1 class="shop-title">Registered Users</h1>

                <div class="wrap-right">

                    <div class="change-display-mode">
                        <a href="{{ route('registered.users') }}" class="grid-mode display-mode active"><i class="fa fa-th"></i>Grid</a>
                        <a href="{{ route('registered.userslist') }}" class="list-mode display-mode"><i class="fa fa-th-list"></i>List</a>
                    </div>

                </div>

            </div><!--end wrap shop control-->

            <div class="row">

                <ul class="product-list grid-products equal-container">

                        @foreach($user_details as $data)

                            @if($data->utype == 'USR')
                                <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                                    <div class="product product-style-3 equal-elem ">
                                        <div class="product-thumnail">
                                                <figure><img src="{{ asset('storage/images/user/' . $data->user_image) }}" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <a class="product-name"><span>{{ $data->id }} - {{ $data->first_name }} {{ $data->last_name }}</span></a>


                                            <div class="wrap-price"><span class="product-price">{{ $data->email }}</span></div>

                                                <div class="wrap-butons">
                                                    <form action="{{ route('delete.user', ['id' => $data->id])  }}" method="POST" >
                                                            @csrf
                                                            @method('Delete')

                                                            <div class="wrap-butons">
                                                                <button  type="submit" class="btn add-to-cart_Shop"><i class="fa-solid fa-trash-can"></i> Remove User</button>

                                                                <input type="hidden" name="product_id" value="{{ $data->id }}">
                                                            </div>
                                                    </form>
                                                </div>
                                        </div>
                                    </div>
                                </li>
                            @endif
                        @endforeach


                </ul>

            </div>

            <div class="wrap-pagination-info">
                <ul class="page-numbers">
                    <li><span class="page-number-item current" >1</span></li>
                    <li><a class="page-number-item" href="#" >2</a></li>
                    <li><a class="page-number-item" href="#" >3</a></li>
                    <li><a class="page-number-item next-link" href="#" >Next</a></li>
                </ul>
                <p class="result-count">Showing 1-8 of 12 result</p>
            </div>
        </div><!--end main products area-->

                    <!-- side bar start -->
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="account-settings">
                                <div class="user-profile">
                                    <h5 class="user-name" >{{ $user->first_name}} {{ $user->last_name}}</h5>
                                    <h6 class="user-email" >{{ $user->email}}</h6>
                                    
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
                                    <a class="widget-title" href="{{ route('sales.statistics') }}"><i class="fa-solid fa-chart-line"></i> Sale Statistics</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- side bar end -->

    </div><!--end row-->

</div><!--end container-->

</main>
<!--main area-->


</x-layouts.layout-template0-home>