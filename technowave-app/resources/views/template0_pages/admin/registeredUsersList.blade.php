<x-layouts.layout-template0-home>
<title>Techno Wave Ltd. || {{''}}Registered User</title>	
    	<!--main area-->
<main id="main" class="main-site left-sidebar">

<div class="container">

    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="{{ route('dashboard') }}" class="link">Dashboard</a></li>
            <li class="item-link"><span>User Information</span></li>
            <li class="item-link"><span>Registered Users</span></li>
        </ul>
    </div>

    <div class="row">

        <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
            
        <x-template0.usersearch/>

            <div class="wrap-shop-control">

                <h1 class="shop-title">Registered Users</h1>
 
                <div class="wrap-right">

                    <div class="change-display-mode">
                        <a href="{{ route('registered.users') }}" class="grid-mode display-mode"><i class="fa fa-th"></i>Grid</a>
                        <a href="{{ route('registered.userslist') }}" class="list-mode display-mode active"><i class="fa fa-th-list"></i>List</a>
                    </div>

                </div> 

            </div><!--end wrap shop control-->

            <div class="adjust">    
                    <div class="lefter">
                        <div class="wrap-iten-in-cart">
                            <ul class="products-cart">

                            @foreach($user_details as $data)
                                @if($data->utype == 'USR')

                                        <li class="pr-cart-item">
                                            <div class="product-image">
                                                <figure><img src="{{ asset('storage/' . $data->user_image) }}" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                            </a>
                                            </div>
                                            <div class="product-name">
                                                <a class="link-to-product">User ID#: {{ $data->id }}  ||  {{ $data->first_name }} {{ $data->last_name }}</a>

                                                </br>
                                                </br>
                                            
                                                <p><a class="status">Email:</a> {{$data->email}} 
                                                @if(empty($data->email_verified_at))
                                                <a class="status"> (Not Verified) </a>
                                                @else
                                                <a class="status-out"> (Verified) </a>
                                                @endif
                                                </p>

                                                <p><a class="status">Phone Number:</a> +1 (868) {{$data->phone_number}}</p>

                                                </br>

                                                <p>#{{$data->user_lot_number}} {{$data->user_street}},
                                                {{$data->user_city}}.</p>

                                                <div class="detail-info">
                                                    <form action="{{ route('delete.user', ['id' => $data->id])  }}" method="POST" >
                                                            @csrf
                                                            @method('Delete')

                                                            <div class="wrap-butons">

                                                                <button  type="submit" class="btn add-to-cart_Shop"><i class="fa-solid fa-trash-can"></i> Remove User</button>

                                                                <input type="hidden" name="id" value="{{ $data->id }}">
                                                            </div>
                                                    </form>
                                                </div>

                                            </div>
                
                                        </li>
                                @endif
                            @endforeach
        
                            </ul>
                        </div>
                    </div>
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

            <!-- sidebar -->
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">

                <div class="widget mercado-widget filter-widget brand-widget">
                    <a class="widget-title" href="{{ route('registered.userslist') }}"><i class="fa-solid fa-user"></i> User Information</a>
                </div>

                <div class="widget mercado-widget filter-widget brand-widget">
                    <a class="widget-title" href="{{ route('dashboard') }}"><i class="fa-solid fa-user"></i> Add Admin</a>
                </div>

                <div class="widget mercado-widget filter-widget brand-widget">
                    <a class="widget-title" href="{{ route('dashboard') }}">Filter By Brand</a>
                </div>

                <div class="widget mercado-widget filter-widget brand-widget">
                    <a class="widget-title" href="{{ route('dashboard') }}">Filter By Brand</a>
                </div>

                <div class="widget mercado-widget filter-widget brand-widget">
                    <a class="widget-title" href="{{ route('dashboard') }}">Filter By Brand</a>
                </div>

            </div><!--end sidebar-->

    </div><!--end row-->

</div><!--end container-->

</main>
<!--main area-->


</x-layouts.layout-template0-home>