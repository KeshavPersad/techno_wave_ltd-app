<x-layouts.layout-template0-home>
    <!--main area-->
	<main id="main" class="main-site">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="{{ route('home') }}" class="link">Home</a></li>
                    <li class="item-link"><a href="{{ route('checkout') }}" class="link">Checkout</a></li>
					<li class="item-link"><span>Thank You</span></li>
				</ul>
			</div>
		</div>
		
		<div class="container pb-60">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2>Thank you for Your Order</h2>
                    <p>A confirmation email was sent.</p>


                    <a href="{{ route('store')}}" class="btn btn-submit btn-submitx">Continue Shopping</a>
				</div>
			</div>
		</div><!--end container-->

	</main>
	<!--main area-->
    </x-layouts.layout-template0-home>