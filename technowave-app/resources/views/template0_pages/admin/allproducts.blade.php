<x-layouts.layout-template0-home>
<title>Techno Wave Ltd. || {{''}}All Prodcuts</title>	
    	<!--main area-->
<main id="main" class="main-site left-sidebar">

<div class="container">

    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="{{ route('dashboard') }}" class="link">Dashboard</a></li>
            <li class="item-link"><span>All Products</span></li>
        </ul>
    </div>
    <div class="row">

        <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

                    <div class="wrap-butons">                  
                        <a class="btn add-to-cart_Shop" href="{{ route('add.product') }}" ><i class="fa-solid fa-folder-plus"></i> Add New Product</a>
                    </div> 
                    
            <div class="wrap-shop-control">

                <h1 class="shop-title">All Products</h1>

                <div class="wrap-right">

                    <div class="change-display-mode">
                        <a href="{{ route('allproducts') }}" class="grid-mode display-mode active"><i class="fa fa-th"></i>Grid</a>
                        <a href="{{ route('allproductslist') }}" class="list-mode display-mode"><i class="fa fa-th-list"></i>List</a>
                    </div>

                </div>

            </div><!--end wrap shop control-->

            <div class="row">

                <ul class="product-list grid-products equal-container">

                        @foreach($product_details as $data)

                                <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                                    <div class="product product-style-3 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="{{ route ('adminproduct.details', ['id' => $data->id]) }}" title="{{ $data->product_title }}">
                                                <figure><img src="{{ asset('storage/images/product/' . $data->product_image1) }}" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <a href="{{ route ('adminproduct.details', ['id' => $data->id]) }}" class="product-name"><span>{{ $data->id }} - {{ $data->product_title }}</span></a>


                                            @if ($data->product_status == 1)
                                                <div class="wrap-price"><span class="product-price"><a class="status">In Stock</a></span></div>
                                            @else
                                                <div class="wrap-price"><span class="product-price"><a class="status-out">Out of Stock</a></span></div>
                                            @endif

                                            <div class="wrap-price"><span class="product-price">${{ $data->product_price }}</span></div>

                                                <div class="wrap-butons">
                                                    <form action="{{ route('delete.product', ['id' => $data->id])  }}" method="POST" >
                                                            @csrf
                                                            @method('Delete')

                                                            <div class="wrap-butons">
                                                                <button  type="submit" class="btn add-to-cart_Shop"><i class="fa-solid fa-trash-can"></i> Delete Product</button>

                                                                <input type="hidden" name="product_id" value="{{ $data->id }}">
                                                            </div>
                                                    </form>
                                                </div>

                                                <div class="wrap-butons">
                                                    <form action="{{ route('edit.product', ['id' => $data->id]) }}" method="POST" >
                                                            @csrf
                                                            @method('GET')

                                                            <div class="hidden">
                                                            <span>Quantity:</span>
                                                            <div class="quantity-input">
                                                                <input type="text" name="cart_quantity" value="1" data-max="1" pattern="[0-9]*" >
                                                            </div>
                                                            </div>

                                                            <div class="wrap-butons">
                                                                <button  type="submit" class="btn add-to-cart_Shop"><i class="fa-solid fa-pen-to-square"></i> Edit Product</button>

                                                                <input type="hidden" name="product_id" value="{{ $data->id }}">
                                                            </div>
                                                    </form>
                                                </div>

                                        </div>
                                    </div>
                                </li>

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