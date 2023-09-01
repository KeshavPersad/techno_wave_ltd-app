
<x-layouts.layout-template0-home>

    <title>Techno Wave Ltd. || {{''}}Verify Your Email Page</title>	

	<!--main area-->
	<main id="main" class="main-site left-sidebar">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="{{ route('home') }}" class="link">Home</a></li>
					<li class="item-link"><span>Verify Email</span></li>
				</ul>
			</div>
			<div class="row">
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
					<div class=" main-content-area">
						<div class="wrap-login-item ">						
							<di class="login-form form-item form-stl">



                                            <div class="card">
                                                <div class="form-title" b>{{ __('Verify Your Email Address') }}</div>


                                                <div class="card-body">
                                                    @if (session('resent'))
                                                        <div class="alert alert-success" role="alert">
                                                            {{ __('A fresh verification link has been sent to your email address.') }}
                                                        </div>
                                                    @endif

													<div class="card-header">{{ __('Before proceeding, please check your email for a Verification Link.') }}</div>
                                                    {{ __('If you did not Receive the email') }}

                                                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                                        @csrf
                                                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to Request Another.') }}</button>
                                                    </form>

                                                </div>
                                            </div>

							</div>												
						</div>
					</div><!--end main products area-->		
				</div>
			</div><!--end row-->

		</div><!--end container-->

	</main>
	<!--main area-->

</x-layouts.layout-template0-home>
