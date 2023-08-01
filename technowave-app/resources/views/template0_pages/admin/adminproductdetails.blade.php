<x-layouts.layout-template0-home>
<title>Techno Wave Ltd. || {{''}}Product Details</title>

	<main id="main" class="main-site">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="{{ route('dashboard') }}" class="link">Dashboard</a></li>
					<li class="item-link"><a href="{{ route('allproducts') }}" class="link">All Products</a></li>
					<li class="item-link"><span>Product Details</span></li>
				</ul>
			</div>
			<div class="row">

				<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
					<div class="wrap-product-detail">
						<div class="detail-media">
							<div class="product-gallery">
								
									<ul class="slides">
										<li data-thumb="{{ asset('storage/' . $data->product_image1) }}">
											<img src="{{ asset('storage/' . $data->product_image1) }}" alt="product thumbnail" />
										</li>

										<li data-thumb="{{asset('storage/' . $data->product_image2) }}">
											<img src="{{asset('storage/' . $data->product_image2) }}" alt="product thumbnail" />
										</li>

										<li data-thumb="{{ asset('storage/' . $data->product_image3) }}">
											<img src="{{ asset('storage/' . $data->product_image3) }}" alt="product thumbnail" />
										</li>

										<li data-thumb="{{ asset('storage/' . $data->product_image4) }}">
											<img src="{{ asset('storage/' . $data->product_image4) }}" alt="product thumbnail" />
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
							</br>
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
								@if($data->product_status == 1)
                                	<p class="availability"><a class="status">In Stock</a></p>
								@else
									<p class="availability"><a class="status">Out of Stock</a></p>
								@endif
                            </div>

							<form action="{{ route('edit.product', ['id' => $data->id]) }}" method="POST" >
								@csrf
								@method('PUT')
								
								<div class="wrap-butons" id="get-info">
                                            <button class="btn add-to-cart_Shop" type="submit" ><i class="fa-solid fa-pen-to-square"></i> Edit Prodcut</button>
                                            <input type="hidden" name="product_id" value="{{ $data->id }}">
								</div>
                                
							</form>
							

						</div>
						<div class="advance-info">
							<div class="tab-control normal">
								<a href="#add_infomation" class="tab-control-item">Addtional Infomation</a>
								<a href="#reviews" class="tab-control-item">View Product Reviews</a>
							</div>
							<div class="tab-contents">

								<div class="tab-content-item active" id="description">
									<p>{{$data->product_description}}</p>
								</div>

								<!-- Product Add Infomation -->
								<div class="tab-content-item " id="add_infomation">
									<p>{{$data->product_description}}</p>
									</br>
									</br>

									<p>{{$data->product_add_info}}</p>
									</br>
								</div>


									<!-- Reviews -->
									<div class="tab-content-item " id="reviews">

										
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
															<img alt="" src="{{ asset('storage/' . $review->user_image_review) }}" height="80" width="80">
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
											<span class="subtitle">Nation Wide</span>
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


				</div><!--end sitebar-->


			</div><!--end row-->

		</div><!--end container-->

	</main>
	<!--main area-->

</x-layouts.layout-template0-home>