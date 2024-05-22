@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <h4 class="card-title m-1">Add flayer</h4>
            <div class="card-header text-right">
                <a href="{{ route('admin.flyers.index') }}" type="button" class="btn btn-rounded btn-primary ">
                    <span class="btn-icon-left text-white">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                    </span>
                    Back
                </a>
            </div>
            <div class="card-body">
                <!-- resources/views/create.blade.php -->
				
			
			
			

                <form class="uploadForm" action="{{ route('admin.flyers.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    

                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" name="title" id="title" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="image_url">Image:</label>
                        <input type="file" name="image_url" id="image_url" required>
                    </div>
                    <div class="form-group">
                        <label for="pdf_url">PDF File:</label>
                        <input type="file" name="pdf_url" id="pdf_url" required>
                    </div>

                    <div class="form-group " >
                        <label for="info">Info:</label>
                        <input type="text" name="info" id="info" class="form-control" required>
                    </div>


                    <div class="form-group " >
                        <label for="Book Now Link">Book Now Link:</label>
                        <input type="text" name="book_now_link" id="book_now_link" class="form-control" required>
                    </div>
                    {{-- <div class="form-group " >
                        <label for="video_link">Video Link:</label>
                        <input type="text" name="video_link" id="video_link" class="form-control" >
                    </div> --}}

                    <div class="form-group">
                        <label for="video_link">Video</label>
                        <input type="file" name="video_link" id="video_link" >
                    </div>

                    <div class="form-group">
                        <label for="description"> Description:</label>
                        <textarea name="description" id="description" class="form-control" required></textarea>
                    </div>
					
					
					

	
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>



<script>
    ClassicEditor
    .create( document.querySelector( '#detail_description' ) )
    .catch( error => {
        console.error( error );
    } );

 document.querySelector('.uploadForm').addEventListener('submit', function () {
            document.querySelector('.loader-sec').style.display = 'block';
        });

</script>
@endsection
