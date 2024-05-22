@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <h4 class="card-title m-1">Gallery</h4>
            <div class="card-header text-right">
                <a href="{{ route('admin.gallery.create') }}" type="button" class="btn btn-rounded btn-primary">
                    <span class="btn-icon-left text-white">
                        <i class="fa fa-plus" aria-hidden="true"></i>
                    </span>
                    Add Images
                </a>
            </div>


            <div class="card-body">
                @if(session('status'))
                <div class="alert alert-success" id="successMessage">
                    {{ session('status') }}
                </div>
                @endif
                <div class="table-responsive table-bordered table-striped">
                    <table class="table"  id="gallery">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Tour Name</th>
                                <th>Images</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($gallery as $gal)
                            <tr>
                                <td>{{ $gal->id }}</td>
                                <td>{{ $gal['tours']->title }}</td>
                                <td>
                                 @php 
                                 @$gallery_images = explode(',',$gal->images_url);

                                 @endphp
                                 @foreach(@$gallery_images as $image)
                                 <img src="{{ asset($image) }}" alt="Image" style="max-width: 50px;">

                                 @endforeach
                             </td>

                             <td>
                                <a href="{{ route('admin.gallery.edit', $gal->id) }}" class="btn btn-sm btn-success"><i class="fa fa-wrench" ></i></a>


                                <form action="{{ route('admin.gallery.destroy', $gal->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this item?')"><i class="fa fa-trash" ></i></button>
                                </form>

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
