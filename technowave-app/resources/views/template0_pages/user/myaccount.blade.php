<x-layouts.layout-template0-home>
<title>Techno Wave Ltd. || {{''}}My Account</title>	

<main id="main" class="main-site">

    <div class="container">
        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="{{ route('home') }}" class="link">Home</a></li>
                <li class="item-link"><span>My Acccount</span></li>
            </ul>
        </div>

        <div class="row">
            <div class="row gutters">

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
                                    <a class="widget-title" href="{{ route('myaccount') }}"><i class="fa-solid fa-user"></i> Personal Information</a>
                                </div>
                                <div class="widget mercado-widget filter-widget brand-widget">
                                    <a class="widget-title" href="{{ route('orders') }}"><i class="fa-solid fa-user"></i> Order History</a>
                                </div>
                                <div class="widget mercado-widget filter-widget brand-widget">
                                    <a class="widget-title" href="{{ route('favorites') }}"><i class="fa-solid fa-user"></i> Reviewed Products</a>
                                </div>
                                <div class="widget mercado-widget filter-widget brand-widget">
                                    <a class="widget-title" href="{{ route('favorites') }}"><i class="fa-solid fa-user"></i> Wish List</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- side bar end -->

                </br>
                </br>
                </br>

                <!-- main content start -->
                <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h3 class="box-title">Personal Information</h3>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="first_name">First Name</label>
                                        <input type="text" class="form-control" value="{{ $user_details->first_name}}" id="first_name" readonly>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="last_name">Last Name</label>
                                        <input type="text" class="form-control" value="{{ $user_details->last_name }}" id="last_name" readonly>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" value="{{ $user_details->email }}" id="email" readonly>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="phone_number">Phone #</label>
                                        <input type="text" class="form-control" value="{{ $user_details->phone_number }}" id="phone_number" readonly>
                                    </div>
                                </div>

                            </div>

                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                <h3 class="box-title">Billing Information</h3>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="user_lot_number">Lot #</label>
                                        <input type="number" class="form-control" value="{{ $user_details->user_lot_number }}" id="user_lot_number" readonly>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="user_street">Street</label>
                                        <input type="text" class="form-control" value="{{ $user_details->user_street }}" id="street" readonly>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="user_city">City</label>
                                        <input type="text" class="form-control" value="{{ $user_details->user_city }}" id="user_city" readonly>
                                    </div>
                                </div>
                            </div>

                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="text-right">
                                        <form action="{{ route('edit.account', ['id' => $user_details->id]) }}" method="POST" >
                                            @csrf
                                            @method('GET')

                                                <div class="hidden">
                                                    <input type="text" name="cart_quantity" value="1" data-max="1">
                                                </div>

                                                <div class="wrap-butons">
                                                    <button  type="submit" class="btn add-to-cart_Shop"><i class="fa-solid fa-pen-to-square"></i> Edit Account</button>

                                                    <input type="hidden" name="product_id" value="{{ $user_details->id }}">
                                                </div>
                                        </form>
                                        
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- main content end -->


            </div>
        </div>
    </div>
</br>
</br>
</br>
</br>
</br>
</br>
</br>



</main>
<!--main area-->    
	
</x-layouts.layout-template0-home>
