<x-layouts.layout-template0-home>
<title>Techno Wave Ltd. || {{''}}Edit Product Page || Admin</title>	

<main id="main" class="main-site left-sidebar">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="{{ route('dashboard') }}" class="link">Dashboard</a></li>
					<li class="item-link"><a href="{{ route('allproducts') }}" class="link">All Products</a></li>
					<li class="item-link"><span>Edit Product</span></li>
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

                            <h1 class="shop-title">Edit Product</h1>

                            </div><!--end wrap shop control-->
                                </br>
                                </br>

								<form class="form-stl" method="PUT" action="{{ route('update.product', ['id' => $data->id]) }}">
                                    @csrf
                                    @method('PUT')

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                        <label for="product_title">Title<a class="red-star">*</a></label>
                                        <input type="text" class="form-control" name="product_title"  value="{{ $data->product_title}}" required autocomplete="product_title" autofocus>
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
										<textarea type="text" class="form-control" id="product_description"  name="product_description" rows="5">{{ $data->product_description}}</textarea>
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
										<textarea type="text" class="form-control" id="product_add_info" name="product_add_info" rows="5">{{ $data->product_add_info}}</textarea>
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

                                                <option class="level-1" value="{{ $data->category->id}}">- {{$data->category->category_title}}</option>

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
                                        <select class="form-control" value="{{$data->brand_title}}" type="hidden" name="brand_id" id="brand_id">

                                                    <option class="level-1" value="{{ $data->brand->id}}">- {{$data->brand->brand_title}}</option>

                                                
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
										<input type="double" class="form-control " name="product_purchase_price" value="{{ $data->product_purchase_price}}" required autocomplete="product_purchase_price" autofocus>
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
										<input type="double" class="form-control " name="product_price" value="{{ $data->product_price}}" required autocomplete="product_price" autofocus>
                                            @error('product_price')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                        <img src="{{ asset('storage/' . $data->product_image1) }}" width="150" alt="product_image1">
                                        </br>
                                         <label for="product_image1">Update Image 1<a class="red-star">*</a></label>
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
                                        <img src="{{ asset('storage/' . $data->product_image2) }}" width="150" alt="product_image2">
                                        </br> 
                                        <label for="product_image2">Update Image 2<a class="red-star">*</a></label>
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
                                        <img src="{{ asset('storage/' . $data->product_image3) }}" width="150" alt="product_image3">
                                        </br> 
                                        <label for="product_image3">Update Image 3<a class="red-star">*</a></label>
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
                                        <img src="{{ asset('storage/' . $data->product_image4) }}" width="150" alt="product_image4">
                                        </br> 
                                        <label for="product_image4">Update Image 4<a class="red-star">*</a></label>
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
										<input type="number" min="1" max="1000" class="form-control" value="{{ $data->product_quantity}}" name="product_quantity" required autocomplete="product_quantity" autofocus>
                                            @error('product_quantity')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                        <label for="product_status">Change Status<a class="red-star">*</a></label>
                                        <select class="form-control" type="hidden" name="product_status" id="product_status">
                                                    @if($data->product_status == 1)                         
                                                        <option value="1" selected>- In Stock</option>
                                                        <option value="0">- Out of Stock</option>
                                                    @elseif($data->product_status == 0)
                                                        <option value="1">- In Stock</option>
                                                        <option value="0"selected>- Out of Stock</option>
                                                    @endif
                                                                            
                                        </select>
                                            @error('product_status')
                                                <span class="invalid-feedback" role="alert"></span>
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                        <label for="product_title" class="white">Quantity</label>
                                        </br>
                                        <label for="product_title" class="white">Quantity</label>

                                        </div>
                                    </div>

                                    <div class="wrap-butons">
                                    <button  type="submit" name="submit" class="btn add-to-cart_Shop"><i class="fa-solid fa-file-pen"></i> {{ __('Edit Product') }}</button>
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




