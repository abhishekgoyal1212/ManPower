@extends('admin/index')
@section('title','Privacy Policy')
@section('content')
<div class="content-wrapper">


	<section class="content-header">

		<div class="container-fluid">

			<div class="row mb-2">

				<div class="col-sm-6">


					<h1>Privacy Policy</h1>
				</div>

				<div class="col-sm-6">

					<ol class="breadcrumb float-sm-right">

						<li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>

						<li class="breadcrumb-item active">Privacy Policy</li>

					</ol>

				</div>

			</div>

		</div>

	</section>


	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<!-- left column -->
				<div class="col-md-12">
					<!-- general form elements -->
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Privacy Policy</h3>
						</div>
						<!-- form start -->
						<form role="form" method="post" action="{{route('admin.page.addOrEdit',['privacy'])}}" enctype="multipart/form-data">
							@csrf
							<div class="card-body">
								<div class="category-img-section">
									<div class="row category-img-block0">
										<div class="col-md-12">
											<div class="form-group">
												<label for="heading">heading</label>
												<input class="form-control" name="heading" placeholder="heading-3" value="{{old('heading',$all_data->heading)}}">
												@error('heading')
												<div class="form-valid-error" style="color: red;">{{ $message }}</div>
												@enderror
											</div>
											<div class="form-group">
												<label for="content">Content</label>
												<textarea class="form-control textarea" name="content" placeholder="Content">{{old('content',$all_data->content)}}</textarea>
												@error('content')
												<div class="form-valid-error" style="color: red;">{{ $message }}</div>
												@enderror
											</div>
<!-- 											<label for="icon">Image</label>
											<div class="row category-img-block0">
												<div class="col-md-12">
													<div class="form-group">
														<div class="input-group">
															<div class="custom-file">
																<input type="file" name="image" class="custom-file-input" 
																id="icon">
																<label class="custom-file-label" for="icon">Choose file</label>
															</div>
														</div>
														@error('image')
														<div class="form-valid-error"  style="color: red;">{{ $message }}</div>
														@enderror
														<img src="{{$all_data->image}}" class="sm-img" >
													</div>
												</div>
											</div> -->
											<div class="form-group">
												<label for="story_heading">Meta Key</label>
												<input class="form-control" name="meta_key" placeholder="Meta Key" value="{{old('meta_key',$all_data->meta_key)}}">
												@error('meta_key')
												<div class="form-valid-error" style="color: red;">{{ $message }}</div>
												@enderror
											</div>
											<div class="form-group">
												<label for="story_heading">Meta Value</label>
												<input class="form-control" name="meta_value" placeholder="Meta Value" value="{{old('meta_value',$all_data->meta_value)}}">
												@error('meta_values')
												<div class="form-valid-error" style="color: red;">{{ $message }}</div>
												@enderror
											</div>
											<div class="form-group">
												<label for="content3">Meta Description</label>
												<textarea class="form-control" name="meta_description" placeholder="Meta Description">{{old('content3',$all_data->meta_value)}}</textarea>
												@error('meta_description')
												<div class="form-valid-error" style="color: red;">{{ $message }}</div>
												@enderror
											</div>
										</div>
									</div>
									<div class="card-footer">
										<button type="submit" class="btn btn-primary">Submit</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>

		@stop