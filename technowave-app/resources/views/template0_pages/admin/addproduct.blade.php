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
                <!-- side bar start -->
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="account-settings">
                                <div class="user-profile">
                                    <h5 class="user-name" >{{ $user_details->first_name}} {{ $user_details->last_name}}</h5>
                                    <h6 class="user-email" >{{ $user_details->email}}</h6>
                                    
                                    <div class="widget mercado-widget filter-widget brand-widget">
                                    <a class="widget-title"></a>
                                </div>
                                </div>

                                <div class="widget mercado-widget filter-widget brand-widget">
                                    <a class="widget-title" href="{{ route('allproducts') }}"><i class="fa-solid fa-rectangle-list"></i> All Products</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- side bar end -->

				<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                    <div class="card h-100">
                        <div class="card-body">
                            <div class="row gutters">

                            <div class="wrap-shop-control">

                            <h1 class="shop-title">Add New Product</h1>

                            </div><!--end wrap shop control-->
                                </br>
                                </br>

								<form class="form-stl" method="POST" action="{{ route('insert.product') }}">
                                    @csrf

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                        <label for="product_title">Title<a class="red-star">*</a></label>
										<input type="text" class="form-control" name="product_title"  required autocomplete="product_title" autofocus>
                                            @error('product_title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                        <label for="product_title" class="white">Title</label>
                                        </br>
                                        <label for="product_title" class="white">Title</label>
                                        </br>
                                        <label for="product_title" class="white">Title</label>
                                        </br>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                        <label for="product_description">Description<a class="red-star">*</a></label>
										<textarea type="text" class="form-control" id="product_description" name="product_description" rows="5"></textarea>
                                            @error('product_description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                        <label for="product_add_info">Additional Information<a class="red-star">*</a></label>
										<textarea type="text" class="form-control" id="product_add_info" name="product_add_info" rows="5"></textarea>
                                            @error('product_add_info')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                        <label for="category_id">Product Category<a class="red-star">*</a></label>
                                                <select class="form-control" type="hidden" name="category_id" id="category_id">

                                                            @foreach ($category_details as $data)
                                                                <option class="level-1" value="{{ $data->id}}">- {{$data->category_title}}</option>
                                                            @endforeach  

                                                </select>
                                            @error('category_id')
                                                <span class="invalid-feedback" role="alert"></span>
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                        <label for="brand_id">Product Brand<a class="red-star">*</a></label>
                                                <select class="form-control" type="hidden" name="brand_id" id="brand_id">

                                                            @foreach ($brand_details as $data)
                                                            <option class="level-1" value="{{ $data->id}}">- {{$data->brand_title}}</option>
                                                            @endforeach  

                                                </select>
                                            @error('brand_id')
                                                <span class="invalid-feedback" role="alert"></span>
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                        <label for="product_purchase_price">Purchase Price<a class="red-star">*</a></label>
										<input type="double" class="form-control " name="product_purchase_price" required autocomplete="product_purchase_price" autofocus>
                                            @error('product_purchase_price')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                        <label for="product_price">Selling Price<a class="red-star">*</a></label>
										<input type="double" class="form-control " name="product_price" required autocomplete="product_price" autofocus>
                                            @error('product_price')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                        <label for="product_image1">Image 1<a class="red-star">*</a></label>
                                        <input type="file" class="form-control" name="product_image1">
                                            @error('product_image1')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                        <label for="product_image2">Image 2<a class="red-star">*</a></label>
                                        <input type="file" class="form-control" name="product_image2">
                                            @error('product_image2')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                        <label for="product_image3">Image 3<a class="red-star">*</a></label>
                                        <input type="file" class="form-control" name="product_image3">
                                            @error('product_image3')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                        <label for="product_image4">Image 4<a class="red-star">*</a></label>
                                        <input type="file" class="form-control" name="product_image4">
                                            @error('product_image4')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                        <label for="product_quantity">Quantity<a class="red-star">*</a></label>
										<input type="number" min="1" max="1000" class="form-control" name="product_quantity" required autocomplete="product_quantity" autofocus>
                                            @error('product_quantity')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                        <label for="product_status">Status<a class="red-star">*</a></label>
                                        
                                                <select class="form-control" type="hidden" name="product_status" id="product_status">                        
                                                            <option value="1" selected>- In Stock</option>
                                                            <option value="0">- Out of Stock</option>                    
                                                </select>
                                            @error('product_status')
                                                <span class="invalid-feedback" role="alert"></span>
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="wrap-butons">
                                    <button  type="submit" name="submit" class="btn add-to-cart_Shop"><i class="fa-solid fa-file-circle-plus"></i> {{ __('Add Product') }}</button>
                                    </div>
								</form>

							</div>
                        </div>   
					</div>	
				</div><!--end add products area-->	

			</div><!--end row-->

		</div><!--end container-->

	</main>
	<!--main area-->

</br>
</br>
</br>
</br>
</br>
</br>


</x-layouts.layout-template0-home>
