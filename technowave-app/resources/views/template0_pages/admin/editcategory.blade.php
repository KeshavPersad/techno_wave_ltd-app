<x-layouts.layout-template0-home>
<title>Techno Wave Ltd. || {{''}}Edit Categoty Page || Admin</title>	

<main id="main" class="main-site left-sidebar">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="{{ route('dashboard') }}" class="link">Dashboard</a></li>
                    <li class="item-link"><a href="{{ route('categories') }}" class="link">All Categories</a></li>
					<li class="item-link"><span>Edit Category</span></li>
				</ul>
			</div>
			<div class="row">
				<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">							
					<div class=" main-content-area">
						<div class="wrap-login-item ">
							<div class="register-form form-item ">

								<form class="form-stl" method="PUT" action="{{ route('update.category', ['id' => $data->id]) }}">
                                    @csrf
                                    @method('PUT')

									<fieldset class="wrap-title">
										<h3 class="form-title">Edit Category</h3>
										
									</fieldset>		

									<fieldset class="wrap-input">
										<label for="category_title">Title</label>
										<input type="text" class="form-control" name="category_title"  value="{{ $data->category_title}}" required autocomplete="category_title" autofocus>
                                            @error('category_title')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </fieldset>

                                    <fieldset class="wrap-input">
										<label for="category_description">Description</label>
										<input type="text" row="3" class="form-control " name="category_description" value="{{ $data->category_description}}" required autocomplete="category_description" autofocus>
                                            @error('category_description')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </fieldset>

                                    <fieldset class="wrap-input">
										<label for="category_status">Change Status<a class="red-star">*</a></label>
                                        
										<div class="wrap-search-form">
                                        <div class="wrap-list-cate">
										<select class="outline_select" style="width:200px;" type="hidden" name="category_status" id="category_status">
													@if($data->category_status == 1)							
                                                        <option value="1" selected>- Active</option>
                                                        <option value="0">- Inactive</option>
                                                    @elseif($data->category_status == 0)
                                                        <option value="1">- Active</option>
                                                        <option value="0"selected>- Inactive</option>
                                                    @endif
																			
                                        </select>
                                        </div>
                                        </div>
                                        
                                            @error('category_status')
                                                <span class="invalid-feedback" role="alert"></span>
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
									</fieldset>

                                    @if($data->category_image1)
                                        <fieldset class="wrap-input">
                                        <img src="{{ asset('storage/' . $data->category_image1) }}" width="150" alt="category_image1">
                                        </fieldset>

                                    @else
                                        <fieldset class="wrap-input">
                                            <label for="category_image1">Change Image</label>
                                            <input type="file" class="form-control" name="category_image1" >
                                                @error('category_image1')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                        </fieldset>
                                    @endif
                                    
                                            <button type="submit" name="submit" class="btn btn-sign">{{ __('Edit Category') }}</button>
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