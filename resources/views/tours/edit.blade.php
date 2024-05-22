@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h4 class="card-title m-1">Edit Tour</h4>
                <div class="card-header text-right">
                    <a href="{{ route('admin.tours.index') }}" type="button" class="btn btn-rounded btn-primary">
                        <span class="btn-icon-left text-white">
                            <i class="fa fa-arrow-left" aria-hidden="true"></i>
                        </span>
                        Back
                    </a>
                </div>
                <div class="card-body">
                    <form class="uploadForm" action="{{ route('admin.tours.update', $tours->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="title">Name:</label>
                            <input type="text" name="title"  id="title" class="form-control" value="{{ old('title', $tours->title) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="image_url">Image:</label>
                            <input type="file" name="image_url" id="image_url">
                            <img src="{{ asset($tours->image_url) }}" alt="Image" style="max-width: 200px;">
                        </div>

                        <div class="form-group">
                            <label for="info">Info:</label>
                            <input type="text" name="info" id="info" class="form-control" value="{{ old('info', $tours->info) }}" required>
                        </div>
						
                        <div class="form-group">
                            <label for="type">Category:</label>
                            
							<select class="form-group form-control" id="slide_type" name="category" required>
							
                           @foreach($categories as $category)
							 <option value="{{$category->name}}" {{$category->name==$tours->category?"selected":""}}>{{$category->name}}</option>
						   @endforeach
                        </select>
                           
                        </div>
						
						
					<!-- 	<div class="form-group ">
                        <label for="name">Type:</label>
                        <select class="form-group form-control" name="type" required>
						
							 <option value="bus" {{$tours->type=="bus"?"selected":""}}>Coach Tours </option>
							 <option value="plane" {{$tours->type=="plane"?"selected":""}}>Fly-Away Tours</option>
							 <option value="cruise" {{$tours->type=="cruise"?"selected":""}}>Cruises</option>
                        </select>
                    </div> -->
						
					<div class="form-group ">
                        <label for="name">Featued:</label>
                         <input type="checkbox" id="is_featured_box"  value="{{ old('is_featured', $tours->is_featured_box)}}" {{$tours->is_featured==1?"checked":""}}  />
						 <input type="hidden" name="is_featured" id="is_featured" value=""/>
                    </div>
						
						
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea name="description" id="description" class="form-control" required>{{ old('description', $tours->description) }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="start_date">Satrt Date:</label>
                            <input type="date" name="start_date" id="start_date" class="form-control" value="{{ old('start_date', $tours->start_date) }}" required>
                        </div>
						
						<div class="form-group">
                            <label for="end_date">End Date:</label>
                            <input type="date" name="end_date" id="end_date" class="form-control" value="{{ old('end_date', $tours->end_date) }}" required>
                        </div>
						
						<div class="form-group">
                            <label for="no_of_days">No of days:</label>
                            <input type="text" name="no_of_days" id="no_of_days" class="form-control" value="{{ old('no_of_days', $tours->no_of_days) }}" required>
                        </div>
						
						
						
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
 
 document.querySelector('.uploadForm').addEventListener('submit', function () {
            document.querySelector('.loader-sec').style.display = 'block';
        });

</script>
@endsection
