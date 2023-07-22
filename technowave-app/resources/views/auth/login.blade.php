
<x-layouts.layout-template0-home>

    <title>Techno Wave Ltd. || {{''}}Login Page</title>	

	<!--main area-->
	<main id="main" class="main-site left-sidebar">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="{{ route('home') }}" class="link">Home</a></li>
					<li class="item-link"><span>Login</span></li>
				</ul>
			</div>
			<div class="row">
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
					<div class=" main-content-area">
						<div class="wrap-login-item ">						
							<div class="login-form form-item form-stl">
                                
								<form name="frm-login" method="POST" action="{{ route('login') }}">
                                    @csrf

									<fieldset class="wrap-title">
										<h3 class="form-title">Log Page</h3>										
									</fieldset>

									<fieldset class="wrap-input">
										<label for="frm-login-uname">Email Address:</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter your email address" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
									</fieldset>

									<fieldset class="wrap-input">
										<label for="frm-login-pass">Password:</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="************" name="password" required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
									</fieldset>
									
									<fieldset class="wrap-input">
										<label class="remember-field">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}><span>Remember me</span>
										</label>

										<a class="link-function left-position" href="{{ route('password.request') }}" title="Forgotten password?">Forgotten password?</a>
									</fieldset>

                                        <button type="submit" class="btn btn-submit" name="submit">
                                            {{ __('Login') }}
                                        </button>
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