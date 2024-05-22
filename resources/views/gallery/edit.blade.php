@extends('layouts.app')

@section('content')

@php 
@$gallery_images = explode(',',$gallery->images_url);

@endphp
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h4 class="card-title m-1">Edit Image</h4>
                <div class="card-header text-right">
                    <a href="{{ route('admin.gallery.index') }}" type="button" class="btn btn-rounded btn-primary">
                        <span class="btn-icon-left text-white">
                            <i class="fa fa-arrow-left" aria-hidden="true"></i>
                        </span>
                        Back
                    </a>
                </div>
                <div class="card-body">
                    <!-- resources/views/edit.blade.php -->
                    <div class="card-body">
                        <form action="{{ route('admin.gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                        <div class="form-group ">
                        <label for="name">Tour:</label>
                        <select class="form-group form-control" id="slide_type" name="tour" required>
							
                           @foreach($tours as $tour)
							 <option value="{{$tour->id}}" {{$tour->id==$gallery->tour_id?"selected":""}}>{{$tour->title}}</option>
						   @endforeach
                        </select>
                    </div>

                        <div class="form-group">
                            <label for="href_link">Images:  
									@foreach(@$gallery_images as $image)
                                   <img src="{{ asset($image) }}" alt="Image" style="max-width: 50px;">

                                   @endforeach</label>
							
							<input {{(!empty($gallery->images_url)?"":"required")}} type="file" class="form-control" name="images_url[]" placeholder="Images" multiple>
                        </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
