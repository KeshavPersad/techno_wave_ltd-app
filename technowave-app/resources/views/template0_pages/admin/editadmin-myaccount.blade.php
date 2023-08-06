<x-layouts.layout-template0-home>
<title>Techno Wave Ltd. || {{''}}Edit||My Account</title>	

<main id="main" class="main-site">

    <div class="container">
        <div class="wrap-breadcrumb">
            <ul>
                <li class="item-link"><a href="{{ route('dashboard') }}" class="link">Dashboard</a></li>
                <li class="item-link"><a href="{{ route('myaccount') }}" class="link">My Account</a></li>
                <li class="item-link"><span>Edit || My Acccount</span></li>
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
                                        <img src="{{ asset('storage/images/user/' . $user_details->user_image) }}" alt="Maxwell Admin" width="175" height="175" >
                                    </div>
                                    <h5 class="user-name" >{{ $user_details->first_name}} {{ $user_details->last_name}}</h5>
                                    <h6 class="user-email" >{{ $user_details->email}}</h6>
                                    
                                    <div class="widget mercado-widget filter-widget brand-widget">
                                    <a class="widget-title"></a>
                                </div>
                                </div>

                                <div class="widget mercado-widget filter-widget brand-widget">
                                    <a class="widget-title" href="{{ route('admin.account') }}"><i class="fa-solid fa-user"></i> Personal Information</a>
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

                            <form class="form-stl" method="PUT" action="{{ route('update.admin.account', ['id' => $user_details->id]) }}">
                            @csrf
                            @method('PUT')

                                <div class="row gutters">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <h3 class="box-title">Personal Information</h3>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="first_name">First Name<a class="red-star">*</a></label>
                                            <input type="text" name="first_name" class="form-control" value="{{ $user_details->first_name}}" id="first_name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="last_name">Last Name<a class="red-star">*</a></label>
                                            <input type="text" name="last_name" class="form-control" value="{{ $user_details->last_name }}" id="last_name">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="email">Email<a class="red-star">*</a></label>
                                            <input type="email" name="email" class="form-control" value="{{ $user_details->email }}" id="email">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="phone_number">Phone #<a class="red-star">*</a></label>
                                            <input type="text" name="phone_number" class="form-control" value="{{ $user_details->phone_number }}" id="phone_number">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <img src="{{ asset('storage/images/user/' . $user_details->user_image) }}" alt="No Image Added" width="175" height="175" > 
                                            </br>
                                            <label for="user_image">Change Display Image<a class="red-star">*</a></label>
                                            <input type="file" name="user_image" class="form-control" value="{{ $user_details->user_image }}" id="user_image">
                                        </div>
                                    </div>

                                </div>

                                <div class="row gutters">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h3 class="box-title">Billing Information</h3>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="user_lot_number">Lot #<a class="red-star">*</a></label>
                                            <input type="number" name="user_lot_number" class="form-control" value="{{ $user_details->user_lot_number }}" id="user_lot_number">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="user_street">Street<a class="red-star">*</a></label>
                                            <input type="text" name="user_street" class="form-control" value="{{ $user_details->user_street }}" id="user_street">
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="user_city">City<a class="red-star">*</a></label>
                                            <input type="text" name="user_city" class="form-control" value="{{ $user_details->user_city }}" id="user_city">
                                        </div>
                                    </div>
                                </div>

                                <div class="hidden">
                                    <input type="text" name="password" value="{{ $user_details->password }}" >
                                </div>

                                <div class="row gutters">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                        <div class="text-right">

                                            <form action="{{ route('delete.admin.account', ['id' => $user_details->id])  }}" method="POST" >
                                                @csrf
                                                @method('Delete')
                                                
                                                <button type="submit" id="submit" name="submit" class="btn btn-secondary"><i class="fa-solid fa-user-xmark"></i> Delete Account</button>
                                                
                                            </form>

                                            <button type="submit" id="submit" name="submit" class="btn btn-primary"><i class="fa-solid fa-file-pen"></i> Update Account</button>
                                        </div>
                                    </div>
                                </div>
                            </form>

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
