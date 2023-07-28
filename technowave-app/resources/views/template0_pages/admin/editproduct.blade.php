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
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">							
					<div class=" main-content-area">
						<div class="wrap-login-item ">
							<div class="register-form form-item ">

								<form class="form-stl" method="PUT" action="{{ route('update.product', ['id' => $data->id]) }}">
                                    @csrf
                                    @method('PUT')

									<fieldset class="wrap-title">
										<h3 class="form-title">Edit Product</h3>
										
									</fieldset>		

									<fieldset class="wrap-input">
										<label for="product_title">Title</label>
										<input type="text" class="form-control" name="product_title"  value="{{ $data->product_title}}" required autocomplete="product_title" autofocus>
                                            @error('product_title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </fieldset>

                                    <fieldset class="wrap-input">
										<label for="product_description">Description</label>
										<input type="text" class="form-control " name="product_description" value="{{ $data->product_description}}" required autocomplete="product_description" autofocus>
                                            @error('product_description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </fieldset>

                                    <fieldset class="wrap-input">
										<label for="product_add_info">Changeitional Information</label>
										<input type="text" class="form-control " name="product_add_info" value="{{ $data->product_add_info}}" required autocomplete="product_add_info" autofocus>
                                            @error('product_add_info')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </fieldset>

                                    <fieldset class="wrap-input">
										<label for="product_price">Price</label>
										<input type="double" class="form-control " name="product_price" value="{{ $data->product_price}}" required autocomplete="product_price" autofocus>
                                            @error('product_price')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </fieldset>

                                    @if($data->product_image1)
                                        <fieldset class="wrap-input">
                                        <img src="{{ asset('storage/' . $data->product_image1) }}" width="150" alt="product_image1">
                                        </fieldset>
                                    @else
                                    <fieldset class="wrap-input">
										<label for="product_image1">Change Image 1</label>
                                        <input type="file" class="form-control" name="product_image1">
                                            @error('product_image1')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
									</fieldset>
                                    @endif
                                    

                                    @if($data->product_image2)
                                        <fieldset class="wrap-input">
                                        <img src="{{ asset('storage/' . $data->product_image2) }}" width="150" alt="product_image1">
                                        </fieldset>
                                    @else
                                    <fieldset class="wrap-input">
										<label for="product_image2">Change Image 2</label>
                                        <input type="file" class="form-control" name="product_image2">
                                            @error('product_image2')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
									</fieldset>
                                    @endif

                                    @if($data->product_image3)
                                        <fieldset class="wrap-input">
                                        <img src="{{ asset('storage/' . $data->product_image3) }}" width="150" alt="product_image1">
                                        </fieldset>
                                    @else
                                    <fieldset class="wrap-input">
										<label for="product_image3">Add Image 3</label>
                                        <input type="file" class="form-control" name="product_image3">
                                            @error('product_image3')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
									</fieldset>
                                    @endif

                                    @if($data->product_image4)
                                        <fieldset class="wrap-input">
                                        <img src="{{ asset('storage/' . $data->product_image4) }}" width="150" alt="product_image1">
                                        </fieldset>
                                    @else
                                    <fieldset class="wrap-input">
										<label for="product_image4">Change Image 4</label>
                                        <input type="file" class="form-control" name="product_image4">
                                            @error('product_image4')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
									</fieldset>
                                    @endif

                                    <fieldset class="wrap-input">
										<label for="product_quantity">Update Quantity</label>
										<input type="number" min="0" max="1000" class="form-control " name="product_quantity" value="{{ $data->product_quantity}}" required autocomplete="product_quantity" autofocus>
                                            @error('product_quantity')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </fieldset>
                                    
                                    <fieldset class="wrap-input">
										<label for="product_status">Change Status<a class="red-star">*</a></label>
                                        
										<div class="wrap-search-form">
                                        <div class="wrap-list-cate">
										<select class="outline_select" style="width:200px;" type="hidden" name="product_status" id="product_status">
													@if($data->product_status == 1)							
                                                        <option value="1" selected>- In Stock</option>
                                                        <option value="0">- Out of Stock</option>
                                                    @elseif($data->product_status == 0)
                                                        <option value="1">- In Stock</option>
                                                        <option value="0"selected>- Out of Stock</option>
                                                    @endif
																			
                                        </select>
                                        </div>
                                        </div>
                                            @error('product_status')
                                                <span class="invalid-feedback" role="alert"></span>
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
									</fieldset>

                                    <fieldset class="wrap-input">
										<label for="category_id">Product Category<a class="red-star">*</a></label>
										<div class="wrap-search-form">
                                        <div class="wrap-list-cate">
										<select class="outline_select" style="width:200px;" type="hidden" name="category_id" id="category_id">
                                                    
                                                <option class="level-1" value="{{ $data->category->id}}">- {{$data->category->category_title}}</option>
                                                    
                                        </select>
                                        </div>
                                        </div>
                                            @error('category_id')
                                                <span class="invalid-feedback" role="alert"></span>
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
									</fieldset>

                                    <fieldset class="wrap-input">
										<label for="brand_id">Product Brand<a class="red-star">*</a></label>
										<div class="wrap-search-form">
                                        <div class="wrap-list-cate">
                                        <select class="outline_select" style="width:200px;" value="{{$data->brand_title}}" type="hidden" name="brand_id" id="brand_id">

                                                <option class="level-1" value="{{ $data->brand->id}}">- {{$data->brand->brand_title}}</option>
                                                
                                        </select>
                                        </div>
                                        </div>
                                            @error('brand_id')
                                                <span class="invalid-feedback" role="alert"></span>
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
									</fieldset>
                                   
                                        <button type="submit" name="submit" class="btn btn-sign">{{ __('Edit Product') }}</button>
								
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