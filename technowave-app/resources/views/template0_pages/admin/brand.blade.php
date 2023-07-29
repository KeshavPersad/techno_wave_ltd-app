<x-layouts.layout-template0-home>
<title>Techno Wave Ltd. || {{''}}All Brands</title>	
    	<!--main area-->
<main id="main" class="main-site left-sidebar">

<div class="container">

    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="{{ route('dashboard') }}" class="link">Dashboard</a></li>
            <li class="item-link"><span>All Brands</span></li>
        </ul>
    </div>
    <div class="row">

        <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

        <x-template0.brandsearch/>

                    <div class="wrap-butons">                  
                        <a class="btn add-to-cart_Shop" href="{{ route('add.brand') }}" ><i class="fa-solid fa-folder-plus"></i> Add New Brand</a>
                    </div> 

            <div class="wrap-shop-control">

                <h1 class="shop-title">All Brands</h1>
 

            </div><!--end wrap shop control-->

            <div class="adjust">    
                    <div class="lefter">
                        <div class="wrap-iten-in-cart">
                            <ul class="products-cart">

                                @foreach($brand_details as $data)

                                        <li class="pr-cart-item">
                                            <div class="product-image">
                                                <a title="{{ $data->brand_title }}">
                                                <figure><img src="{{ asset('storage/' . $data->brand_image1) }}" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                            </a>
                                            </div>
                                            <div class="product-name">
                                                <a class="link-to-product">{{ $data->brand_title }}</a>

                                                </br>
                                                </br>
                                            
                                                <p>{{$data->brand_description}}</p>

                                                </br>
                                                </br>
                                                @if($data->brand_status == 1)
                                                    <a class="price-field produtc-price"><p class="price">Status: Active</p></a>
                                                @else
                                                    <a class="price-field produtc-price"><p class="price">Status: Inactive</p></a>
                                                @endif

                                                <div class="detail-info">
                                                    <form action="{{ route('delete.brand', ['id' => $data->id])  }}" method="POST" >
                                                            @csrf
                                                            @method('Delete')

                                                            <div class="wrap-butons">
                                                                <button  type="submit" class="btn add-to-cart_Shop"><i class="fa-solid fa-trash-can"></i> Delete Brand</button>

                                                                <input type="hidden" name="product_id" value="{{ $data->id }}">
                                                            </div>
                                                    </form>
                                                </div>

                                                <div class="detail-info">
                                                <form action="{{ route('edit.brand', ['id' => $data->id]) }}" method="POST" >
                                                        @csrf
                                                        @method('GET')

                                                        <div class="hidden">
                                                        <span>Quantity:</span>
                                                        <div class="quantity-input">
                                                            <input type="text" name="cart_quantity" value="1" data-max="1" pattern="[0-9]*" >
                                                        </div>
                                                        </div>

                                                        <div class="wrap-butons">
                                                            <button  type="submit" class="btn add-to-cart_Shop"><i class="fa-solid fa-pen-to-square"></i> Edit Brand</button>

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

<!-- 
            <div class="wrap-pagination-info">
                <ul class="page-numbers">
                    <li><span class="page-number-item current" >1</span></li>
                    <li><a class="page-number-item" href="#" >2</a></li>
                    <li><a class="page-number-item" href="#" >3</a></li>
                    <li><a class="page-number-item next-link" href="#" >Next</a></li>
                </ul>
                <p class="result-count">Showing 1-8 of 12 result</p>
            </div> -->
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