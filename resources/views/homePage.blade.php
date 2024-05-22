@extends('layouts.app')

@section('content')
<?php //echo'<pre>'; print_r($featured['heading']);die;?>

<!-- tabs start  -->
@if (Session::has('success'))
<div class="row" id="successMessage">
	<div class="col-lg-12 col-md-12 col-sm-12">
		<div class="alert alert-success">{{ Session::get('success') }}</div>
	</div>
</div>
@endif
<div class="tabs-sention mt-5">

	<div class="container">

		<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
			
			<li class="nav-item" role="presentation">
				<button class="nav-link active" id="about_us" data-bs-toggle="pill"
				data-bs-target="#pills-about_us" type="button" role="tab" aria-controls="pills-profile"
				aria-selected="false">About Us</button>
			</li>
			
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="trip_protection" data-bs-toggle="pill"
				data-bs-target="#pills-trip" type="button" role="tab" aria-controls="pills-blog"
				aria-selected="false">Trip Protection</button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="quick_links" data-bs-toggle="pill"
				data-bs-target="#pills-quick_links" type="button" role="tab" aria-controls="pills-about"
				aria-selected="false">Footer & Quick Links</button>
			</li>
		</ul>
		<div class="tab-content" id="pills-tabContent">

			<!-- About us start  -->
			<div class="tab-pane fade show active" id="pills-about_us" role="tabpanel" aria-labelledby="featured">

				<form class="form-sec" action="{{url('savePage')}}" method="post" enctype="multipart/form-data">
					{!! csrf_field() !!}
					<input type="text" class="form-control bg-light mb-4"  name="settings_value[]" value="{{@$aboutUs['about_us_heading']}}" placeholder="About Us Heading">
					<input type="hidden" name="settings_name[]" value="about_us_heading">
					
					<textarea  class="form-control bg-light mb-4" name="settings_value[]" id="about_us_description" rows="7" cols="10" placeholder="Detail Description">{{@$aboutUs['about_us_description']}}</textarea>
					

					<input type="hidden" name="settings_name[]" value="about_us_description">

					<input type="file" class="form-control bg-light mb-4" name="about_us_img" />
                    <img src="{{ asset($aboutUs['about_us_img'] ?? 'path/to/default-image.jpg') }}" class="form-control bg-light mb-4 about-us-image-size" alt="Image" style="max-width: 200px;">

					<button type="submit"  class="btn btn-primary">Save</button>
					<input type="hidden" name="formtype" value="about_us">
				</form>

			</div>
			<!-- About us  End  -->


			<!-- Trip Protection  start  -->
			<div class="tab-pane fade show " id="pills-trip" role="tabpanel" aria-labelledby="featured">

				<form class="form-sec" action="{{url('savePage')}}" method="post" enctype="multipart/form-data">
					{!! csrf_field() !!}
					<input type="text" class="form-control bg-light mb-4"  name="settings_value[]" value="{{@$trip['trip_heading']}}" placeholder=" Heading">
					<input type="hidden" name="settings_name[]" value="trip_heading">
					
					<textarea  class="form-control bg-light mb-4" id="trip_descript_detail" name="settings_value[]"  placeholder="Detail Description">{{@$trip['trip_description']}}</textarea>
					
					<input type="hidden" name="settings_name[]" value="trip_description">
					
					<input type="text" class="form-control bg-light mb-4"  name="settings_value[]" value="{{@$trip['trip_tool_free_text']}}" placeholder="Too Free Paragraph">
					<input type="hidden" name="settings_name[]" value="trip_tool_free_text">

					<input type="text" class="form-control bg-light mb-4"  name="settings_value[]" value="{{@$trip['trip_cell_no']}}" placeholder="Cell No">
					<input type="hidden" name="settings_name[]" value="trip_cell_no">

                    <input type="text" class="form-control bg-light mb-4" name="settings_value[]" value="{{@$trip['trip_info_url']}}" placeholder="Information Button Page URL">
                    <input type="hidden" name="settings_name[]" value="trip_info_url">

                    <input type="text" class="form-control bg-light mb-4" name="settings_value[]" value="{{@$trip['trip_claims_url']}}" placeholder="Claims Button URL">
                    <input type="hidden" name="settings_name[]" value="trip_claims_url">

                    <input type="file" class="form-control bg-light mb-4" name="trip_img" />
                    <img src="{{ asset($trip['trip_img'] ?? 'path/to/default-image.jpg') }}" class="form-control bg-light mb-4 about-us-image-size" alt="Image" style="max-width: 200px;">

                    <button type="submit" class="btn btn-primary">Save</button>
                    <input type="hidden" name="formtype" value="trip">
                </form>

			</div>
			<!-- Trip Protection  End  -->


			<!-- Quick Links  start  -->
			<div class="tab-pane fade show " id="pills-quick_links" role="tabpanel" aria-labelledby="featured">

				<form class="form-sec" action="{{url('savePage')}}" method="post" enctype="multipart/form-data">
					{!! csrf_field() !!}
					<input type="file" class="form-control bg-light mb-4"  name="quick_links_logo" />

					<img src="{{ asset($quick_links['quick_links_logo'] ?? 'path/to/default-image.jpg') }}" class="form-control bg-light mb-4 about-us-image-size" alt="Image" style="max-width: 200px;">

					<textarea  class="form-control bg-light mb-4" id="quick_links_des" name="settings_value[]"  placeholder=" Description">{{@$quick_links['quick_links_description']}}</textarea>
					
					<input type="hidden" name="settings_name[]" value="quick_links_description">
					
					<input type="text" class="form-control bg-light mb-4"  name="settings_value[]" value="{{@$quick_links['quick_links_tool_free_text']}}" placeholder="Too Free Paragraph">
					<input type="hidden" name="settings_name[]" value="quick_links_tool_free_text">

					<input type="text" class="form-control bg-light mb-4"  name="settings_value[]" value="{{@$quick_links['quick_links_cell_no']}}" placeholder="Cell No">
					<input type="hidden" name="settings_name[]" value="quick_links_cell_no">

					<input type="text" class="form-control bg-light mb-4"  name="settings_value[]" value="{{@$quick_links['quick_links_info_email']}}" placeholder="Email">
					<input type="hidden" name="settings_name[]" value="quick_links_info_email">

					

					<button type="submit"  class="btn btn-primary">Save</button>
					<input type="hidden" name="formtype" value="quick_links">
				</form>

			</div>
			<!-- Quick Links  End  -->


		</div>
	</div>



	<!-- tabs end -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
	crossorigin="anonymous"></script>

	<script>
		ClassicEditor
		.create( document.querySelector( '#about_us_description' ) )
		.catch( error => {
			console.error( error );
		} );
		
		ClassicEditor
		.create( document.querySelector( '#trip_descript_detail' ) )
		.catch( error => {
			console.error( error );
		} );

		ClassicEditor
		.create( document.querySelector( '#quick_links_des' ) )
		.catch( error => {
			console.error( error );
		} );
	</script>


		
	@endsection
