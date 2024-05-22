@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <h4 class="card-title m-1">Add Tour</h4>
            <div class="card-header text-right">
                <a href="{{ route('admin.tours.index') }}" type="button" class="btn btn-rounded btn-primary ">
                    <span class="btn-icon-left text-white">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                    </span>
                    Back
                </a>
            </div>
            <div class="card-body">
                <!-- resources/views/create.blade.php -->

                <form  id="uploadForm" action="{{ route('admin.tours.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    

                    <div class="form-group">
                        <label for="title">Title:</label>
                        <input type="text" name="title" id="title" value="{{old('title')}}" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="image_url">Image:</label>
                        <input type="file" name="image_url" id="image_url" required>
                    </div>

                    <div class="form-group " >
                        <label for="info">Info:</label>
                        <input type="text" name="info" value="{{old('info')}}"  id="info" class="form-control" required>
                    </div>


                    <div class="form-group">
                        <label for="description"> Description:</label>
                        <textarea name="description"   id="description" class="form-control" required>{{old('description')}}</textarea>
                    </div>
					
					
					<div class="form-group ">
                        <label for="name">Category:</label>
                        <select class="form-group form-control" id="slide_type" name="category" required>
							<option value="">Select category</option>
                           @foreach($categories as $category)
							 <option value="{{$category->name}}">{{$category->name}}</option>
						   @endforeach
                        </select>
                    </div>
					
					<!-- <div class="form-group ">
                        <label for="name">Type:</label>
                        <select class="form-group form-control" name="type" required>
							 <option value="bus">Coach Tours</option>
							 <option value="plane">Fly-Away Tours</option>
							 <option value="cruise">Cruises</option>
                        </select>
                    </div> -->
					
					<div class="form-group ">
                        <label for="name">Featued:</label>
                         <input type="checkbox" id="is_featured_box"  value="0"  />
						 <input type="hidden" name="is_featured" value="{{old('is_featured')}}"  id="is_featured" value="0"/>
                    </div>
					
					 <div class="form-group " >
                        <label for="name">Start Date:</label>
                        <input type="date" name="start_date" id="start_date" value="{{old('start_date')}}"  min={new Date().toISOString().split('T')[0]} class="form-control" required>
                    </div>
					
					<div class="form-group " >
                        <label for="name">End Date:</label>
                        <input type="date" name="end_date" value="{{old('end_date')}}"  id="end_date" min={new Date().toISOString().split('T')[0]} class="form-control" required>
                    </div>
					
					<div class="form-group " >
                        <label for="name">No of days:</label>
                        <input type="number" name="no_of_days" value="{{old('no_of_days')}}"  id="no_of_days" class="form-control" required>
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

</script> 
@endsection
