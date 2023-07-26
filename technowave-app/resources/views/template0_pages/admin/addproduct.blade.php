<x-layouts.layout-template0-home>
<title>Techno Wave Ltd. || {{''}}Add Product Page || Admin</title>	

<main id="main" class="main-site left-sidebar">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="{{ route('dashboard') }}" class="link">Dashboard</a></li>
					<li class="item-link"><a href="{{ route('allproducts') }}" class="link">All Products</a></li>
					<li class="item-link"><span>Add Product</span></li>
				</ul>
			</div>
			<div class="row">
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">							
					<div class=" main-content-area">
						<div class="wrap-login-item ">
							<div class="register-form form-item ">

								<form class="form-stl" method="POST" action="{{ route('insert.product') }}">
                                    @csrf

									<fieldset class="wrap-title">
										<h3 class="form-title">Add New Product</h3>
										
									</fieldset>		

									<fieldset class="wrap-input">
										<label for="product_title">Title<a class="red-star">*</a></label>
										<input type="text" class="form-control" name="product_title"  required autocomplete="product_title" autofocus>
                                            @error('product_title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </fieldset>

                                    <fieldset class="wrap-input">
										<label for="product_description">Description<a class="red-star">*</a></label>
										<input type="text" class="form-control " name="product_description" required autocomplete="product_description" autofocus>
                                            @error('product_description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </fieldset>

                                    <fieldset class="wrap-input">
										<label for="product_add_info">Additional Information<a class="red-star">*</a></label>
										<input type="text" class="form-control " name="product_add_info" required autocomplete="product_add_info" autofocus>
                                            @error('product_add_info')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </fieldset>

                                    <fieldset class="wrap-input">
										<label for="product_price">Price<a class="red-star">*</a></label>
										<input type="double" class="form-control " name="product_price" required autocomplete="product_price" autofocus>
                                            @error('product_price')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </fieldset>

                                    <fieldset class="wrap-input">
										<label for="product_quantity">Quantity<a class="red-star">*</a></label>
										<input type="number" min="1" max="1000" class="form-control " name="product_quantity" required autocomplete="product_quantity" autofocus>
                                            @error('product_quantity')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </fieldset>

                                    <fieldset class="wrap-input">
										<label for="product_image1">Image 1<a class="red-star">*</a></label>
                                        <input type="file" class="form-control" name="product_image1">
                                            @error('product_image1')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
									</fieldset>

                                    <fieldset class="wrap-input">
										<label for="product_image1">Image 2<a class="red-star">*</a></label>
                                        <input type="file" class="form-control" name="product_image2">
                                            @error('product_image1')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
									</fieldset>

                                    <fieldset class="wrap-input">
										<label for="product_image1">Image 3<a class="red-star">*</a></label>
                                        <input type="file" class="form-control" name="product_image3">
                                            @error('product_image1')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
									</fieldset>

                                    <fieldset class="wrap-input">
										<label for="product_image1">Image 4<a class="red-star">*</a></label>
                                        <input type="file" class="form-control" name="product_image4">
                                            @error('product_image1')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
									</fieldset>

									<fieldset class="wrap-input">
										<label for="product_status">Status<a class="red-star">*</a></label>
                                        <div class="wrap-search center-section">
										<div class="wrap-search-form">
                                        <div class="wrap-list-cate">
										<input type="hidden" name="product_status" value="0" id="product_status">
																			<a class="link-control"> - - - - - - - - - </a>
																			<ul class="list-cate">
                                                                                <li class="level-0"></li>
                                                                                <li class="level-0"></li>
																					<li class="level-1">-In Stock</li>
																					<li class="level-1">-Out of Stock</li>
																			</ul>
                                        </div>
                                        </div>
                                        </div>
                                            @error('product_status')
                                                <span class="invalid-feedback" role="alert"></span>
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
									</fieldset>

                                    <fieldset class="wrap-input">
										<label for="product_category">Product Category<a class="red-star">*</a></label>
                                        <div class="wrap-search center-section">
										<div class="wrap-search-form">
                                        <div class="wrap-list-cate">
										<input type="hidden" name="product_category" value="0" id="product_category">
																			<a class="link-control"> - - - - - - - - - </a>
																			<ul class="list-cate">
                                                                                <li class="level-0"></li>
                                                                                <li class="level-0"></li>
                                                                                    <li class="level-1">-Laptop</li>
																					<li class="level-1">-Desktop</li>
																					<li class="level-1">-Gaming PC</li>
                                                                                    <li class="level-1">-Tablet</li>
																					<li class="level-1">-Monitor</li>
																					<li class="level-1">-Speacker</li>
																					<li class="level-1">-Mouse and Keyboard</li>
																					<li class="level-1">-Tech Accessory</li>
																					<li class="level-1">-PC Part</li>
																			</ul>
                                        </div>
                                        </div>
                                        </div>
                                            @error('product_category')
                                                <span class="invalid-feedback" role="alert"></span>
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
									</fieldset>

                                    <fieldset class="wrap-input">
										<label for="product_brand">Product Brand<a class="red-star">*</a></label>
                                        <div class="wrap-search center-section">
										<div class="wrap-search-form">
                                        <div class="wrap-list-cate">
                                            <input type="hidden" name="product_brand" value="0" id="product_brand">
                                                                                <a class="link-control"> - - - - - - - - - </a>
                                                                                <ul class="list-cate">
                                                                                    <li class="level-0"></li>
                                                                                    <li class="level-0"></li>
                                                                                        <li class="level-1">-APPLE</li>
                                                                                        <li class="level-1">-HP</li>
                                                                                        <li class="level-1">-DELL</li>
                                                                                        <li class="level-1">-ASUS</li>
                                                                                        <li class="level-1">-LENOVO</li>
                                                                                        <li class="level-1">-ACER</li>
                                                                                        <li class="level-1">-LOGITECH</li>
                                                                                        <li class="level-1">-RAZER</li>
                                                                                        <li class="level-1">-JBL</li>
                                                                                        <li class="level-1">-INTEL</li>
                                                                                </ul>
                                        </div>
                                        </div>
                                        </div>
                                            @error('product_brand')
                                                <span class="invalid-feedback" role="alert"></span>
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
									</fieldset>

                                   
                                    

                                            <button type="submit" name="submit" class="btn btn-sign">{{ __('Add Product') }}</button>
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