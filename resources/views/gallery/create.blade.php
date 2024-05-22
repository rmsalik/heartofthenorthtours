@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h4 class="card-title m-1">Add Image</h4>
                <div class="card-header text-right">
                    <a href="{{ route('admin.gallery.index') }}" type="button" class="btn btn-rounded btn-primary ">
                        <span class="btn-icon-left text-white">
                            <i class="fa fa-arrow-left" aria-hidden="true"></i>
                        </span>
                        Back
                    </a>
                </div>
                <div class="card-body">
                    <!-- resources/views/create.blade.php -->
                    <div class="card-body">
		
                    <form action="{{ route('admin.gallery.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group ">
                        <label for="name">Tour:</label>
                        <select class="form-group form-control" id="slide_type" name="tour" required>
							<option value="">Select Tour</option>
                           @foreach($tours as $tour)
							 <option value="{{$tour->id}}">{{$tour->title}}</option>
						   @endforeach
                        </select>
                    </div>

                        <div class="form-group">
                            <label for="href_link">Images:</label>
							
							<input required type="file" class="form-control" name="images_url[]" placeholder="Images" multiple>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
