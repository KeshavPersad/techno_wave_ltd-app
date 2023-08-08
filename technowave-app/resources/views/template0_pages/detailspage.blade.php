<x-layouts.layout-template0-home>
<title>Techno Wave Ltd. || {{''}}Product Details</title>	
	<main id="main" class="main-site">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="{{ route('home') }}" class="link">Home</a></li>
					<li class="item-link"><a href="{{ route('store') }}" class="link">Store Page</a></li>
					<li class="item-link"><span>Product Details</span></li>
				</ul>
			</div>
			<div class="row">
				
				<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
					<div class="wrap-product-detail">

						<div class="detail-media">
							<div class="product-gallery">
								
									<ul class="slides">
										<li data-thumb="{{ asset('storage/images/product/' . $data->product_image1) }}">
											<img src="{{ asset('storage/images/product/' . $data->product_image1) }}" alt="product thumbnail" />
										</li>

										<li data-thumb="{{asset('storage/images/product/' . $data->product_image2) }}">
											<img src="{{asset('storage/images/product/' . $data->product_image2) }}" alt="product thumbnail" />
										</li>

										<li data-thumb="{{ asset('storage/images/product/' . $data->product_image3) }}">
											<img src="{{ asset('storage/images/product/' . $data->product_image3) }}" alt="product thumbnail" />
										</li>

										<li data-thumb="{{ asset('storage/images/product/' . $data->product_image4) }}">
											<img src="{{ asset('storage/images/product/' . $data->product_image4) }}" alt="product thumbnail" />
										</li>

									</ul>	
								
							</div>
						</div>
						
						<div class="detail-info">

						@php $rate_num = number_format($rating_value) @endphp
						<div class="star-rating">
							<span class="width-{{$rate_num}}-percent"><strong class="rating"></strong></span>
							</div>

							<a href="#get-info" class="count-review">({{ $review_details->count() }} ratings)</a>

                            <h2 class="product-name">{{ $data->product_title}}</h2>
							
                            <div class="short-desc">
                                <ul>
                                    <p>{{$data->product_description}}</p>

                                </ul>
                            </div>

                            <div class="wrap-social">
                            	<a class="link-socail" href="#"><img src="assets/images/social-list.png" alt=""></a>
                            </div>
                            <div class="wrap-price"><span class="product-price">${{$data->product_price}}</span></div>
                            <div class="stock-info in-stock">

								@if ($data->product_status == 1)
									<p class="availability"><a class="status">In Stock</a></p>
								@else
									<p class="availability"><a class="status-out">Out of Stock</a></p>
								@endif

                            </div>
							@if ($data->product_status == 1)
							<form action="{{ route('cart') }}" method="POST" >
								@csrf
								@method('PUT')
								
								<div class="quantity">
									<span>Quantity:</span>
									<div class="quantity-input">
										
										<input type="number" name="cart_quantity" class="" value="1" min="1" max="10">

									</div>
								</div>

								<div class="wrap-butons">
                                            <button class="btn add-to-cart_Shop" type="submit" ><i class="fa fa-shopping-basket" aria-hidden="true"></i> Add to Cart</button>

                                            <input type="hidden" name="product_id" value="{{ $data->id }}">
								</div>
							</form>
							@endif
							
							<form action="{{ route('favorites') }}" method="POST" >
									@csrf
									@method('PUT')

									<div class="hidden">
									<span>Quantity:</span>
									<div class="quantity-input">
										<input type="text" name="favorites_quantity" value="1" data-max="1" pattern="[0-9]*" >
									</div>
									</div>

									<div class="wrap-butons" id="get-info">
										<button  type="submit" class="btn add-to-cart_Shop"><i class="fa fa-heart" aria-hidden="true"></i> Add to Wish List</button>

										<input type="hidden" name="product_id" value="{{ $data->id }}">
									</div>
							</form>

						</div>
						<div class="advance-info">
							<div class="tab-control normal">
								<a href="#add_infomation" class="tab-control-item">Addtional Infomation</a>
								<a href="#review" class="tab-control-item">Product Reviews</a>
								<a href="#add-review" class="tab-control-item">Add a Review</a>
							</div>

							<div class="tab-contents">

								<!-- Product Add Infomation -->
								<div class="tab-content-item " id="add_infomation">
									<p>{{$data->product_description}}</p>
									</br>
									</br>

									<p>{{$data->product_add_info}}</p>
									</br>
								</div>

								<!-- Reviews -->
									<div class="tab-content-item " id="review">

										
										<div id="comments">
										@if($review_details->count() == 0 )
											<h2 class="woocommerce-Reviews-title"><span>This Product currently has No Reviews</span></h2>

										@else
											@php $rate_num = number_format($rating_value) @endphp

											<h2 class="woocommerce-Reviews-title">{{ $review_details->count() }} ratings for - <span>{{ $data->product_title }}</span></h2>
											
											<div class="star-rating">
											<span class="width-{{$rate_num}}-percent"><strong class="rating"></strong></span>
											</div>
											</br>
											</br>
											</br>
											
											@foreach($review_details as $review)
												
												<ol class="commentlist">
													<li class="comment byuser comment-author-admin bypostauthor even thread-even depth-1" id="li-comment-20">
														<div id="comment-20" class="comment_container"> 
															<img alt="" src="{{ asset('storage/images/user/' . $review->user_image_review) }}" height="80" width="80">
															<div class="comment-text">

																<div class="star-rating">
																	<span class="width-{{$review->stars_rated}}-percent"><strong class="rating"></strong></span>
																</div>

																<p class="meta"> 
																	<strong class="woocommerce-review__author">{{ $review->user_first_name }} {{ $review->user_last_name }}</strong> 
																	<span class="woocommerce-review__dash">–</span>
																	<time class="woocommerce-review__published-date" datetime="2008-02-14 20:00" >{{$review->created_at}}</time>
																</p>
																<div class="description">
																	<p>{{$review->user_review}}</p>
																</div>
															</div>
														</div>
													</li>
												</ol>
											@endforeach
										@endif
										</div>
									</div>

								@if(empty($user->id))
									<!-- Add Review -->
									<div class="tab-content-item " id="add-review">
										<div class="wrap-review-form">
												<div id="review_form_wrapper">
													<div id="review_form">

														<div id="respond" class="comment-respond"> 

															<div class="lefter">
																<div class="wrap-iten-in-cart">
																	<h4 class="">You must be Logged-In to review a Product</h4>
																	<ul class="products-cart">

																		<li class="pr-cart-item">
																			<a class="link-to-shop" href="{{ route ('login') }}">Login <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
																		</li>

																	</ul>
																	<h4 class="">If you dont have an Account use the Link below</h4>
																	<ul class="products-cart">

																		<li class="pr-cart-item">
																			<a class="link-to-shop" href="{{ route ('register') }}">Register an Account <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
																		</li>
												
																	</ul>
																</div>
															</div>
														</div><!-- .comment-respond-->
													</div><!-- #review_form -->
												</div><!-- #review_form_wrapper -->
										</div>
									</div>

								@else
									<!-- Add Review -->
									<div class="tab-content-item " id="add-review">
										<div class="wrap-review-form">
												<div id="review_form_wrapper">
													<div id="review_form">

														<div id="respond" class="comment-respond"> 

															<form action="{{ route('add.review') }}" method="POST" id="commentform" class="comment-form" novalidate="">
																@csrf
																
																<p class="comment-notes">
																	<span id="email-notes">Your Email and Phone # will not be published.</span> Required fields are marked <a class="red-star">*</a>
																</p>
																
																<div class="comment-form-rating">
																	<span>Your Rating</span>
																	<p class="stars">
																		
																		<label for="rated-1"></label>
																		<input type="radio" id="rated-1" name="stars_rated" value="1">
																		<label for="rated-2"></label>
																		<input type="radio" id="rated-2" name="stars_rated" value="2">
																		<label for="rated-3"></label>
																		<input type="radio" id="rated-3" name="stars_rated" value="3">
																		<label for="rated-4"></label>
																		<input type="radio" id="rated-4" name="stars_rated" value="4">
																		<label for="rated-5"></label>
																		<input type="radio" id="rated-5" name="stars_rated" value="5" checked="checked">
																		
																	</p>
																</div>

																<p class="hidden">
																	<input id="user_id" name="user_id" type="text" value="{{ $user->id }}">
																</p>

																<p class="hidden">
																	<input id="user_image_review" name="user_image_review" type="text" value="{{ $user->user_image }}">
																</p>

																<p class="hidden">
																	<input id="product_id" name="product_id" type="text" value="{{ $data->id }}">
																</p>

																<p class="hidden">
																	<input id="product_title" name="product_title" type="text" value="{{ $data->product_title }}">
																</p>

																<p class="hidden">
																	<input id="product_image1" name="product_image1" type="text" value="{{ $data->product_image1 }}">
																</p>

																<p class="comment-form-author">
																	<label for="user_first_name">First Name <a class="red-star">*</a></label> 
																	<input id="user_first_name" name="user_first_name" type="text" value="{{ $user->first_name}}">
																</p>

																<p class="comment-form-email">
																	<label for="user_last_name">Last Name <a class="red-star">*</a></label> 
																	<input id="user_last_name" name="user_last_name" type="text" value="{{ $user->last_name}}">
																</p>

																<p class="comment-form-author">
																	<label for="user_phone_number">Phone # <a class="red-star">*</a></label> 
																	<input id="user_phone_number" name="user_phone_number" type="text" value="{{ $user->phone_number}}" >
																</p>

																<p class="comment-form-email">
																	<label for="user_email">Email <a class="red-star">*</a></label> 
																	<input id="user_email" name="user_email" type="email" value="{{ $user->email}}" >
																</p>


																<p class="comment-form-comment">
																	<label for="user_review">Your Review <a class="red-star">*</a></label>
																	<textarea id="user_review" name="user_review" cols="105" rows="8"></textarea>
																</p>
																<p class="form-submit">
																	<input name="submit" type="submit" id="submit" class="submit" value="Submit">
																</p>
															</form>

														</div><!-- .comment-respond-->
													</div><!-- #review_form -->
												</div><!-- #review_form_wrapper -->
										</div>
									</div>
								

								@endif

							</div>
						</div>
					</div>
				</div><!--end main products area-->

				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
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
					</div><!-- Categories widget-->

					<div class="widget mercado-widget widget-product">
						<h2 class="widget-title">Popular Products</h2>
						<div class="widget-content">
							<ul class="products">
  
							@foreach ($bestSellingProducts as $data)

								<li class="product-item">
									<div class="product product-widget-style">
										<div class="thumbnnail">
											<a href="{{ route ('store.details', ['id' => $data->id]) }}" title="{{ $data->product_title }}">
												<figure><img src="{{ asset('storage/images/product/' . $data->product_image1) }}" alt=""></figure>
											</a>
										</div>
										<div class="product-info">
											<a href="{{ route ('store.details', ['id' => $data->id]) }}" class="product-name"><span>{{ $data->product_title }}</span></a>
											<div class="wrap-price"><span class="product-price">${{ $data->product_price }}</span></div>
										</div>
									</div>
								</li>

							@endforeach
							
							</ul>
						</div>
					</div>
				</div><!--end sitebar-->

				<div class="single-advance-box col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="wrap-show-advance-info-box style-1 box-in-site">
						<h3 class="title-box">Related Products</h3>
						<div class="wrap-products">
							<div class="products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"3"},"1200":{"items":"5"}}' >
								
									@foreach ($recommendedProducts as $data)

											<div class="product product-style-2 equal-elem ">
												<div class="product-thumnail">
													<a href="{{ route ('store.details', ['id' => $data->id]) }}" title="{{ $data->product_title }}">
														<figure><img src="{{ asset('storage/images/product/' . $data->product_image1) }}" width="214" height="214" alt="T-Shirt Raw Hem Organic Boro Constrast Denim"></figure>
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
				</div>
			</div><!--end row-->
		</div><!--end container-->
	</main>
	<!--main area-->
	
</x-layouts.layout-template0-home>