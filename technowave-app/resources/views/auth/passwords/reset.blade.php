<x-layouts.layout-template0-home>

    <title>Techno Wave Ltd. || {{''}}Reset Password Page</title>	

	<!--main area-->
	<main id="main" class="main-site left-sidebar">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="{{ route('home') }}" class="link">Home</a></li>
					<li class="item-link"><span>Reset Password</span></li>
				</ul>
			</div>
			<div class="row">
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">							
					<div class=" main-content-area">
						<div class="wrap-login-item ">
							<div class="login-form form-item form-stl">


                                <form name="frm-login" method="POST" action="{{ route('password.update') }}">
                                    @csrf

                                    <fieldset class="wrap-title">
										<h3 class="form-title">Reset Password</h3>
									</fieldset>	

                                    <input type="hidden" name="token" value="{{ $token }}">

                                    <fieldset class="wrap-input">
                                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}<a class="red-star">*</a></label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </fieldset>

                                    <fieldset class="wrap-input">
                                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}<a class="red-star">*</a></label>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </fieldset>

                                    <fieldset class="wrap-input">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}<a class="red-star">*</a></label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                                    </fieldset>

                                    <div class="row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Reset Password') }}
                                            </button>
                                        </div>
                                    </div>

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
