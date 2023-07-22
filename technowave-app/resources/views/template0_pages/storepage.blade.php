<x-layouts.layout-template0-home>
<title>Techno Wave Ltd. || {{''}}Store</title>	
    	<!--main area-->
<main id="main" class="main-site left-sidebar">

<div class="container">

    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="{{ route('home') }}" class="link">home</a></li>
            <li class="item-link"><span>Store Page</span></li>
        </ul>
    </div>
    <div class="row">

        <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

            <div class="banner-shop">
                <a href="#" class="banner-link">
                    <figure><img src="{{ asset('template0/images/shop-banner.jpg') }}" alt=""></figure>
                </a>
            </div>

            <div class="wrap-shop-control">

                <h1 class="shop-title">All Categories</h1>

                <div class="wrap-right">

                    <div class="change-display-mode">
                        <a href="{{ route('store') }}" class="grid-mode display-mode active"><i class="fa fa-th"></i>Grid</a>
                        <a href="{{ route('store_list') }}" class="list-mode display-mode"><i class="fa fa-th-list"></i>List</a>
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
                                            <a href="{{ route ('store.details', ['id' => $data->id]) }}" title="{{ $data->product_title }}">
                                                <figure><img src="{{ asset('storage/' . $data->product_image1) }}" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <a href="{{ route ('store.details', ['id' => $data->id]) }}" class="product-name"><span>{{ $data->product_title }}</span></a>
                                            <div class="wrap-price"><span class="product-price">${{ $data->product_price }}</span></div>

                                
                                        <div class="wrap-butons">
                                            <input type="hidden" name="cart_quantity" value="1">
                                            <!-- <a href="#" class="btn add-to-cart">Add To Cart</a> -->
                                            <button class="btn add-to-cart_Shop" type="submit" >Add to Cart</button>

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

             <!-- Price-->
             <div class="widget mercado-widget filter-widget price-filter">
                    <h2 class="widget-title">Sort by Price</h2>
                    <div class="widget-content">
                        <ul class="list-category">
                            <li class="category-item has-child-cate">
                                        <a href="/storepage?sort=price" class="cate-link">- Price (Lowest-Highest)</a>
                                    </li>

                            <li class="category-item has-child-cate">
                                        <a href="/storepage?sort=price-desc" class="cate-link">- Price (Highest-Lowest)</a>
                                    </li>
                        </ul>     
                    </div>
            </div><!-- Price-->

            </br>

            <!-- Categories widget-->
            <div class="widget mercado-widget filter-widget brand-widget">
                <a class="widget-title">Filter By Categories</a>
                <div class="widget-content">

                <ul class="list-style vertical-list list-limited" data-show="6">
                        <li class="list-item"><a class="filter-link" href="{{ route('store') }}">All Category</a></li>

                            @foreach ($category_details as $data)

                                <li class="list-item default-hiden"><a class="filter-link" href="{{ route('store', ['category' => $data->product_category]) }}">{{ $data->product_category }}</a></li>

                            @endforeach

                        <li class="list-item"><a data-label='Show less<i class="fa fa-angle-up" aria-hidden="true"></i>' class="btn-control control-show-more" href="#">Show more<i class="fa fa-angle-down" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div><!-- Categories widget-->

            </br>

            <!-- brand widget-->
            <div class="widget mercado-widget filter-widget brand-widget">
                <a class="widget-title">Filter By Brand</a>
                <div class="widget-content">

                    <ul class="list-style vertical-list list-limited" data-show="6">
                        <li class="list-item"><a class="filter-link" href="{{ route('store') }}">All Brands</a></li>

                            @foreach ($brand_details as $data)

                                <li class="list-item default-hiden"><a class="filter-link" href="{{ route('store', ['brand' => $data->product_brand]) }}">{{ $data->product_brand }}</a></li>

                            @endforeach

                        <li class="list-item"><a data-label='Show less<i class="fa fa-angle-up" aria-hidden="true"></i>' class="btn-control control-show-more" href="#">Show more<i class="fa fa-angle-down" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div><!-- brand widget-->

            </br>

            <div class="widget mercado-widget widget-product">
                <h2 class="widget-title">Popular Products</h2>
                <div class="widget-content">
                    <ul class="products">

                        @foreach ($bestSellingProducts as $data)

                            <li class="product-item">
                                <div class="product product-widget-style">
                                    <div class="thumbnnail">
                                        <a href="{{ route ('store.details', ['id' => $data->id]) }}" title="{{ $data->product_title }}">
                                            <figure><img src="{{ asset('storage/' . $data->product_image1) }}" alt=""></figure>
                                        </a>
                                    </div>
                                    <div class="product-info">
                                        <a href="{{ route ('store.details', ['id' => $data->id]) }}" class="product-name"><span>{{ $data->product_title }}</span></a>
                                        <div class="wrap-price"><span class="product-price">${{ $data->product_price }}</span></div>
                                    </div>
                                </div>
                            </li>

                        @endforeach

                    </ul>
                </div>
            </div><!-- brand widget-->

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
                                                    <span class="subtitle">Nationwide</span>
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

        </div><!--end sitebar-->

    </div><!--end row-->

</div><!--end container-->

</main>
<!--main area-->


</x-layouts.layout-template0-home>