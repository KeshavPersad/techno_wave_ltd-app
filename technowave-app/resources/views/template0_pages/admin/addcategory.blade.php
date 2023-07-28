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
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">							
					<div class=" main-content-area">
						<div class="wrap-login-item ">
							<div class="register-form form-item ">

								<form class="form-stl" method="POST" action="{{ route('insert.category') }}" enctype="multipart/form-data">
                                    @csrf
									

									<fieldset class="wrap-title">
										<h3 class="form-title">Add New Category</h3>
									</fieldset>		

									<fieldset class="wrap-input">
										<label for="category_title">Title<a class="red-star">*</a></label>
										<input type="text" class="form-control" name="category_title"  required autocomplete="category_title" autofocus>
                                            @error('category_title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </fieldset>

                                    <fieldset class="wrap-input">
										<label for="category_description">Description<a class="red-star">*</a></label>
										<input type="text" class="form-control " name="category_description" required autocomplete="category_description" autofocus>
                                            @error('category_description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </fieldset>

									<fieldset class="wrap-input">
										<label for="category_status">Status<a class="red-star">*</a></label>
                                        
										<div class="wrap-search-form">
                                        <div class="wrap-list-cate">
										<select class="outline_select" style="width:200px;" type="hidden" name="category_status" id="category_status">
																				
                                                    <option value="1">- Active</option>
													<option value="0">- Inactive</option>
																			
                                        </select>
                                        </div>
                                        </div>
                                        
                                            @error('category_status')
                                                <span class="invalid-feedback" role="alert"></span>
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
									</fieldset>

                                    <fieldset class="wrap-input">
										<label for="category_image1">Image<a class="red-star">*</a></label>
                                        <input type="file" class="form-control" name="category_image1">
                                            @error('category_image1')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
									</fieldset>
                                    

                                            <button type="submit" name="submit" class="btn btn-sign">{{ __('Add Category') }}</button>
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