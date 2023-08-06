<x-layouts.layout-template0-home>
<title>Techno Wave Ltd. || {{''}}Add Categoty Page || Admin</title>	

<main id="main" class="main-site left-sidebar">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="{{ route('dashboard') }}" class="link">Dashboard</a></li>
					<li class="item-link"><a href="{{ route('categories') }}" class="link">All Categories</a></li>
					<li class="item-link"><span>Add Category</span></li>
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
                                    <a class="widget-title" href="{{ route('categories') }}"><i class="fa-solid fa-rectangle-list"></i> All Categories</a>
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

                            <h1 class="shop-title">Add New Category</h1>

                            </div><!--end wrap shop control-->
                                </br>
                                </br>

								<form class="form-stl" method="POST" action="{{ route('insert.category') }}" enctype="multipart/form-data">
                                    @csrf	

									<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                        <label for="category_title">Title<a class="red-star">*</a></label>
										<input type="text" class="form-control" name="category_title"  required autocomplete="category_title" autofocus>
                                            @error('category_title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                        <label for="category_title" class="white">Title</label>
                                        </br>
                                        <label for="category_title" class="white">Title</label>
                                        </br>
                                        <label for="category_title" class="white">Title</label>
                                        </br>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                        <label for="category_description">Description<a class="red-star">*</a></label>
										<textarea type="text" class="form-control" id="category_description" name="category_description" rows="5"></textarea>
											@error('category_description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

									<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
                                        <label for="category_status">Status<a class="red-star">*</a></label>
										<select class="form-control" type="hidden" name="category_status" id="category_status">
																				
                                                    <option value="1" selected>- Active</option>
													<option value="0">- Inactive</option>
																			
                                        </select>
                                            @error('category_status')
                                                <span class="invalid-feedback" role="alert"></span>
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

									<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                        <div class="form-group">
										<label for="category_image1">Image<a class="red-star">*</a></label>
                                        <input type="file" class="form-control" name="category_image1">
                                            @error('category_image1')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    
									<div class="wrap-butons">
                                    <button  type="submit" name="submit" class="btn add-to-cart_Shop"><i class="fa-solid fa-file-circle-plus"></i> {{ __('Add Category') }}</button>
                                    </div>
								</form>

							</div>
                        </div>
                           
					</div><!--end main categorys area-->		
				</div>
			</div><!--end row-->

		</div><!--end container-->

	</main>
	<!--main area-->

</x-layouts.layout-template0-home>