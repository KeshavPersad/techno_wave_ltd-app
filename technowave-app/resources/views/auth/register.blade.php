<x-layouts.layout-template0-home>

    <title>Techno Wave Ltd. || {{''}}Register Page</title>	

	<!--main area-->
	<main id="main" class="main-site left-sidebar">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="{{ route('home') }}" class="link">Home</a></li>
					<li class="item-link"><span>Register</span></li>
				</ul>
			</div>
			<div class="row">
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">							
					<div class=" main-content-area">
						<div class="wrap-login-item ">
							<div class="login-form form-item form-stl">


								<form name="frm-login" method="POST" action="{{ route('register') }}">
                                    @csrf
									<fieldset class="wrap-title">
										<h3 class="form-title">Create an Account</h3>
										<h4 class="form-subtitle">Personal infomation</h4>
									</fieldset>	
										
									<fieldset class="wrap-input">
										<label for="frm-reg-lname">First Name<a class="red-star">*</a></label>
										<input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
                                            @error('first_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </fieldset>

                                    <fieldset class="wrap-input">
										<label for="frm-reg-lname">Last Name<a class="red-star">*</a></label>
										<input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>
                                            @error('last_name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </fieldset>

									<fieldset class="wrap-input">
										<label for="frm-reg-email">Email Address<a class="red-star">*</a></label>
										<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
									</fieldset>

                                    <fieldset class="wrap-input">
										<label for="frm-reg-email">Phone Number<a class="red-star">*</a></label>
                                        <input id="phone_number" type="phone_number" placeholder="7 digits only" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number') }}" required autocomplete="phone_number">
                                            @error('phone_number')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
									</fieldset>

									<fieldset class="wrap-title">
										<h3 class="form-subtitle">Billing Information</h3>
									</fieldset>

									<fieldset class="wrap-input">
										<label for="frm-reg-pass">Lot Number<a class="red-star">*</a></label>
                                        <input id="user_lot_number" type="number" class="form-control @error('user_lot_number') is-invalid @enderror" name="user_lot_number" value="{{ old('user_lot_number') }}" required autocomplete="new-user_lot_number">
                                            @error('user_lot_number')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
									</fieldset>

									<fieldset class="wrap-input">
										<label for="frm-reg-pass">Street<a class="red-star">*</a></label>
                                        <input id="user_street" type="text" class="form-control @error('user_street') is-invalid @enderror" name="user_street" value="{{ old('user_street') }}" required autocomplete="new-user_street">
                                            @error('user_street')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
									</fieldset>

									<fieldset class="wrap-input">
										<label for="frm-reg-pass">Town / City<a class="red-star">*</a></label>
                                        <input id="user_city" type="text" class="form-control @error('user_city') is-invalid @enderror" name="user_city" value="{{ old('user_city') }}" required autocomplete="new-user_city">
                                            @error('user_city')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
									</fieldset>

                                    <fieldset class="wrap-title">
										<h3 class="form-subtitle">Login Information</h3>
									</fieldset>

									<fieldset class="wrap-input item-width-in-half left-item ">
										<label for="frm-reg-pass">Password<a class="red-star">*</a></label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  required autocomplete="new-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
									</fieldset>

									<fieldset class="wrap-input item-width-in-half ">
										<label for="frm-reg-cfpass">Confirm Password<a class="red-star">*</a></label>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
									</fieldset>

									<fieldset class="wrap-input">
                                        <button type="submit" name="submit" class="btn btn-sign">
                                            {{ __('Register') }}
                                        </button>
									</fieldset>

									<fieldset class="wrap-input">
										<a class="righter" href="{{ route('home') }}" title="Register an Account">Return to Home Page <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
									</fieldset>

								</form>

							</div>											
						</div>
					</div><!--end main products area-->		
				</div>
			</div><!--end row-->

		</div><!--end container-->

	</main>
	<!--main area-->

</x-layouts.layout-template0-home>