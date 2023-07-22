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

            <div class="wrap-shop-control">

                <h1 class="shop-title">All Products</h1>

                <div class="wrap-right">

                    <div class="change-display-mode">
                        <a href="{{ route('allproducts') }}" class="grid-mode display-mode"><i class="fa fa-th"></i>Grid</a>
                        <a href="{{ route('allproductslist') }}" class="list-mode display-mode active"><i class="fa fa-th-list"></i>List</a>
                    </div>

                </div>

            </div><!--end wrap shop control-->

            <div class="row">

                <ul class="product-list grid-products equal-container">

                        @foreach($product_details as $data)

                            <form action="{{ route('cart') }}" method="POST" >
								@csrf
								@method('PUT')

                                <li class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ">
                                    <div class="product product-style-3 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="{{ route ('adminproduct.details', ['id' => $data->id]) }}" title="{{ $data->product_title }}">
                                                <figure><img src="{{ asset('storage/' . $data->product_image1) }}" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <a href="{{ route ('adminproduct.details', ['id' => $data->id]) }}" class="product-name"><span>{{ $data->product_title }}</span></a>
                                            <div class="wrap-price"><span class="product-price">${{ $data->product_price }}</span></div>

                                
                                        <div class="wrap-butons">
                                            <input type="hidden" name="cart_quantity" value="1">
                                            <!-- <a href="#" class="btn add-to-cart">Add To Cart</a> -->
                                            <button class="btn add-to-cart_Shop" type="submit" >Edit Product</button>

                                            <input type="hidden" name="product_id" value="{{ $data->id }}">
                                        </div>

                                        </div>
                                    </div>
                                </li>
                            </form>

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

        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">

           <!-- brand widget-->
           <div class="widget mercado-widget filter-widget brand-widget">
                <a class="widget-title" href="{{ route('dashboard') }}">Filter By Brand</a>
                <div class="widget-content">
                    <ul class="products">

                    </ul>
                </div>
            </div><!-- brand widget-->
            <div class="widget mercado-widget filter-widget brand-widget">
                <a class="widget-title" href="{{ route('dashboard') }}">Filter By Brand</a>
                <div class="widget-content">
                    <ul class="products">

                    </ul>
                </div>
            </div><!-- brand widget-->
            <div class="widget mercado-widget filter-widget brand-widget">
                <a class="widget-title" href="{{ route('dashboard') }}">Filter By Brand</a>
                <div class="widget-content">
                    <ul class="products">

                    </ul>
                </div>
            </div><!-- brand widget-->
            <div class="widget mercado-widget filter-widget brand-widget">
                <a class="widget-title" href="{{ route('dashboard') }}">Filter By Brand</a>
                <div class="widget-content">
                    <ul class="products">

                    </ul>
                </div>
            </div><!-- brand widget-->
            <div class="widget mercado-widget filter-widget brand-widget">
                <a class="widget-title" href="{{ route('dashboard') }}">Filter By Brand</a>
                <div class="widget-content">
                    <ul class="products">

                    </ul>
                </div>
            </div><!-- brand widget-->

        </div><!--end sitebar-->

    </div><!--end row-->

</div><!--end container-->

</main>
<!--main area-->


</x-layouts.layout-template0-home>