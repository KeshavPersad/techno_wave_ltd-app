<x-layouts.layout-template0-home>
<title>Techno Wave Ltd. || {{''}}Checkout</title>	
	<!--main area-->
	<main id="main" class="main-site">


		@if ($checkout->isEmpty())
			<div class="container">

				<div class="wrap-breadcrumb">
					<ul>
						<li class="item-link"><a href="{{ route ('home')}}" class="link">Home</a></li>
						<li class="item-link"><span>Cart</span></li>
					</ul>
				</div>
				<div class=" main-content-area">

					<div class="adjust">

						
							<div class="lefter">
								<div class="wrap-iten-in-cart">
									<h1 class="box-title_isEmpty">Your Cart is Empty</h1>
									<ul class="products-cart">

										<li class="pr-cart-item">
											
											<a class="link-to-shop" href="{{ route ('store') }}">Continue Shopping <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>

										</li>

									</ul>
								</div>
							</div>

							<div class="righter">
								<div class="summary">
									<div class="order-summary">
										<h4 class="title-box">Cart Summary</h4>
										<p class="summary-info"><span class="title">Subtotal:</span><b class="index">$0.00</b></p>
										<p class="summary-info"><span class="title">Delivery:</span><b class="index">Free Delivery</b></p>
										<p class="summary-info total-info "><span class="title">Total:</span><b class="index">$0.00</b></p>
									</div>
									
									<div class="update-clear">
										<a class="btn btn-clear" href="{{ route('cart') }}">Proceed to Checkout</a>
										<a class="btn btn-clear" href="{{ route('cart') }}">Clear Cart</a>           
										<a class="link-to-shop" href="{{ route ('store') }}">Continue Shopping <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
									</div>
								</div> 

								</br>
								</br>
								</br>

								<div class="widget widget-our-services ">
										<div class="widget-content">
											<ul class="our-services">

												<li class="service">
													<a class="link-to-service" href="#">
														<i class="fa fa-truck" aria-hidden="true"></i>
														<div class="right-content">
															<b class="title">Free Delivery</b>
															<span class="subtitle">On Oder Over $99</span>
															<p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
														</div>
													</a>
												</li>

												<li class="service">
													<a class="link-to-service" href="#">
														<i class="fa fa-gift" aria-hidden="true"></i>
														<div class="right-content">
															<b class="title">Special Offer</b>
															<span class="subtitle">Get a gift!</span>
															<p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
														</div>
													</a>
												</li>

												<li class="service">
													<a class="link-to-service" href="#">
														<i class="fa fa-reply" aria-hidden="true"></i>
														<div class="right-content">
															<b class="title">Order Return</b>
															<span class="subtitle">Return within 7 days</span>
															<p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
														</div>
													</a>
												</li>
											</ul>
										</div>
									</div>
							</div> 

					</div><!--end sitebar-->
				</div>

						<div class="wrap-show-advance-info-box style-1 box-in-site">
							<h3 class="title-box">Popular Products</h3>
							<div class="wrap-products">
								<div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}' >


									@foreach ($bestSellingProducts as $data)

										<div class="product product-style-2 equal-elem ">
											<div class="product-thumnail">
												<a href="{{ route ('store.details', ['id' => $data->id]) }}" title="{{ $data->product_title }}">
													<figure><img src="{{ asset('storage/' . $data->product_image1) }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
												</a>

												<div class="wrap-btn">
													<a href="{{ route ('store.details', ['id' => $data->id]) }}" class="function-link">Quick View</a>
												</div>
											</div>
											<div class="product-info">
											<a href="{{ route ('store.details', ['id' => $data->id]) }}" class="product-name"><span>{{ $data->product_title }}</span></a>
											<div class="wrap-price"><span class="product-price">${{ $data->product_price }}</span></div>
											</div>
										</div>

									@endforeach


								</div>
							</div><!--End wrap-products-->
						</div>

				</div><!--end main content area-->

			</div><!--end container-->
		@else

			<div class="container">

				<div class="wrap-breadcrumb">
					<ul>
						<li class="item-link"><a href="#" class="link">home</a></li>
						<li class="item-link"><span>Checkout</span></li>
					</ul>
				</div>
				<div class=" main-content-area">
					<div class="wrap-address-billing">
						<h3 class="box-title">Billing Address</h3>
						<form action="#" method="get" name="frm-billing">
							<p class="row-in-form">
								<label for="fname">first name<span>*</span></label>
								<input id="fname" type="text" name="fname" value="" placeholder="Your name">
							</p>
							<p class="row-in-form">
								<label for="lname">last name<span>*</span></label>
								<input id="lname" type="text" name="lname" value="" placeholder="Your last name">
							</p>
							<p class="row-in-form">
								<label for="email">Email Addreess:</label>
								<input id="email" type="email" name="email" value="" placeholder="Type your email">
							</p>
							<p class="row-in-form">
								<label for="phone">Phone number<span>*</span></label>
								<input id="phone" type="number" name="phone" value="" placeholder="(868) XXX-XXXX">
							</p>
							<p class="row-in-form">
								<label for="add">Address:<span>*</span></label>
								<input id="add" type="text" name="add" value="" placeholder="Street Name and Lot #">
							</p>
							<p class="row-in-form">
								<label for="city">Town / City<span>*</span></label>
								<input id="city" type="text" name="city" value="" placeholder="City name">
							</p>
							<p class="row-in-form fill-wife">
							<a class="link-to-shop" href="{{ route ('register') }}">Edit Address<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
							<samp>   </samp>
								<label class="checkbox-field">
									<input name="different-add" id="different-add" value="forever" type="checkbox">
									<span>Ship to a different address?</span>
								</label>
							</p>
						</form>
					</div>

						<div class="summary summary-checkout">
							<div class="summary-item payment-method">
								
									<h4 class="title-box">Payment Method</h4>
									<label class="payment-method">
										<input name="payment-method" id="payment-method-bank" value="bank" type="radio">
										<span>Direct Bank Transder</span>
									</label>
									<label class="payment-method">
										<input name="payment-method" id="payment-method-visa" value="visa" type="radio">
										<span>VISA</span>
									</label>
									<label class="payment-method">
										<input name="payment-method" id="payment-method-paypal" value="paypal" type="radio">
										<span>Paypal</span>
									</label>

									<br>
									<br>
									<br>

									<div class="summary">
										<div class="order-summary">
											<h4 class="title-box">Checkout Summary</h4>
											<p class="summary-info"><span class="title">Subtotal:</span><b class="index">${{ $checkout->formatPrice($checkout->getSubtotal()) }}</b></p>
											@if( $checkout->formatPrice($checkout->getdeliveryFee()) == 0 )
												<p class="summary-info"><span class="title">Delivery:</span><b class="index">Free Delivery</b></p>
											@else
												<p class="summary-info"><span class="title">Delivery:</span><b class="index">${{ $checkout->formatPrice($checkout->getdeliveryFee()) }}</b></p>
											@endif
											<p class="summary-info total-info "><span class="title">Total:</span><b class="index">${{ $checkout->formatPrice($checkout->getTotal()) }}</b></p>
										</div>
										<div class="update-clear">
											<x-core.stripe-ui/>
                               				<a class="link-to-shop" href="{{ route ('store') }}">Continue Shopping <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
                           				</div>
									</div>	

							</div>
							<div class="summary-item shipping-method">
								<a></a><h4 class="title-box f-title">Shipping Method - Direct Delivery</h4> </a>
								<h4>Discount Codes</h4>
								<p class="row-in-form">
									
									<label for="coupon-code">Enter Your Code:</label>
									<input id="coupon-code" type="text" name="coupon-code" value="" placeholder="">	
								</p>
								<div class="update-clear">
          							<button class="btn btn-clear" type="submit" id="checkout-button" >Apply</button>          
        						</div>
							</div>
						</div>

						<div class="wrap-show-advance-info-box style-1 box-in-site">
							<h3 class="title-box">Popular Products</h3>
							<div class="wrap-products">
								<div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}' >


									@foreach ($bestSellingProducts as $data)

										<div class="product product-style-2 equal-elem ">
											<div class="product-thumnail">
												<a href="{{ route ('store.details', ['id' => $data->id]) }}" title="{{ $data->product_title }}">
													<figure><img src="{{ asset('storage/' . $data->product_image1) }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
												</a>

												<div class="wrap-btn">
													<a href="{{ route ('store.details', ['id' => $data->id]) }}" class="function-link">Quick View</a>
												</div>
											</div>
											<div class="product-info">
											<a href="{{ route ('store.details', ['id' => $data->id]) }}" class="product-name"><span>{{ $data->product_title }}</span></a>
											<div class="wrap-price"><span class="product-price">${{ $data->product_price }}</span></div>
											</div>
										</div>

									@endforeach


								</div>
							</div><!--End wrap-products-->
						</div>
						
			</div><!--end container-->
		@endif	

	</main>
	<!--main area-->


</x-layouts.layout-template0-home>