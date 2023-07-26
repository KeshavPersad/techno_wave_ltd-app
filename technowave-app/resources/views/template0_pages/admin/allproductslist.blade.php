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
                        <a href="{{ route('allproducts') }}" class="grid-mode display-mode"><i class="fa fa-th"></i>Grid</a>
                        <a href="{{ route('allproductslist') }}" class="list-mode display-mode active"><i class="fa fa-th-list"></i>List</a>
                    </div>

                </div> 

            </div><!--end wrap shop control-->

            <div class="adjust">    
                    <div class="lefter">
                        <div class="wrap-iten-in-cart">
                            <ul class="products-cart">

                            @foreach($product_details as $data)

                                        <li class="pr-cart-item">
                                            <div class="product-image">
                                                <a href="{{ route ('adminproduct.details', ['id' => $data->id]) }}" title="{{ $data->product_title }}">
                                                <figure><img src="{{ asset('storage/' . $data->product_image1) }}" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                            </a>
                                            </div>
                                            <div class="product-name">
                                                <a class="link-to-product" href="{{ route ('adminproduct.details', ['id' => $data->id]) }}">{{ $data->product_title }}</a>

                                                </br>
                                                </br>
                                            
                                                <p>{{$data->product_description}}</p>

                                                </br>
                                                </br>
                                                <a class="price-field produtc-price"><p class="price">Status: {{$data->product_status}}</p></a>
                                                <a class="price-field produtc-price"><p class="price">Price: ${{$data->product_price}}</p></a>
                                                
                                                <div class="detail-info">
                                                    <form action="{{ route('delete.product', ['id' => $data->id])  }}" method="POST" >
                                                            @csrf
                                                            @method('Delete')

                                                            <div class="wrap-butons">
                                                                <button  type="submit" class="btn add-to-cart_Shop"><i class="fa-solid fa-trash-can"></i> Delete Prodcut</button>

                                                                <input type="hidden" name="product_id" value="{{ $data->id }}">
                                                            </div>
                                                    </form>
                                                </div>

                                                <div class="detail-info">
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
                
                                        </li>
                                    </form>

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