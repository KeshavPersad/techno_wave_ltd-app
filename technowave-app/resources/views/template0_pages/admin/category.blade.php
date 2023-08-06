<x-layouts.layout-template0-home>
<title>Techno Wave Ltd. || {{''}}All Categories</title>	
    	<!--main area-->
<main id="main" class="main-site left-sidebar">

<div class="container">

    <div class="wrap-breadcrumb">
        <ul>
            <li class="item-link"><a href="{{ route('dashboard') }}" class="link">Dashboard</a></li>
            <li class="item-link"><span>All Categories</span></li>
        </ul>
    </div>
    <div class="row">

        <div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">

        <x-template0.categorysearch/>

                    <div class="wrap-butons">                  
                        <a class="btn add-to-cart_Shop" href="{{ route('add.category') }}" ><i class="fa-solid fa-folder-plus"></i> Add New Category</a>
                    </div> 

            <div class="wrap-shop-control">

                <h1 class="shop-title">All Categories</h1>
 

            </div><!--end wrap shop control-->

            <div class="adjust">    
                    <div class="lefter">
                        <div class="wrap-iten-in-cart">
                            <ul class="products-cart">

                                @foreach($category_details as $data)

                                        <li class="pr-cart-item">
                                            <div class="product-image">
                                                <a title="{{ $data->category_title }}">
                                                <figure><img src="{{ asset('storage/images/category/' . $data->category_image1) }}" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
                                            </a>
                                            </div>
                                            <div class="product-name">
                                                <a class="link-to-product">{{ $data->category_title }}</a>

                                                </br>
                                                </br>
                                            
                                                <p>{{$data->category_description}}</p>

                                                </br>
                                                </br>
                                                @if($data->category_status == 1)
                                                    <a class="price-field produtc-price"><p class="price">Status: Active</p></a>
                                                @else
                                                    <a class="price-field produtc-price"><p class="price">Status: Inactive</p></a>
                                                @endif

                                                <div class="detail-info">
                                                    <form action="{{ route('delete.category', ['id' => $data->id])  }}" method="POST" >
                                                            @csrf
                                                            @method('Delete')

                                                            <div class="wrap-butons">
                                                                <button  type="submit" class="btn add-to-cart_Shop"><i class="fa-solid fa-trash-can"></i> Delete Category</button>

                                                                <input type="hidden" name="product_id" value="{{ $data->id }}">
                                                            </div>
                                                    </form>
                                                </div>

                                                <div class="detail-info">
                                                <form action="{{ route('edit.category', ['id' => $data->id]) }}" method="POST" >
                                                        @csrf
                                                        @method('GET')

                                                        <div class="hidden">
                                                        <span>Quantity:</span>
                                                        <div class="quantity-input">
                                                            <input type="text" name="cart_quantity" value="1" data-max="1" pattern="[0-9]*" >
                                                        </div>
                                                        </div>

                                                        <div class="wrap-butons">
                                                            <button  type="submit" class="btn add-to-cart_Shop"><i class="fa-solid fa-pen-to-square"></i> Edit Category</button>

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

</main>
<!--main area-->


</x-layouts.layout-template0-home>