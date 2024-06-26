@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h4 class="card-title m-1">Edit Image</h4>
                <div class="card-header text-right">
                    <a href="{{ route('admin.links.index') }}" type="button" class="btn btn-rounded btn-primary">
                        <span class="btn-icon-left text-white">
                            <i class="fa fa-arrow-left" aria-hidden="true"></i>
                        </span>
                        Back
                    </a>
                </div>
                <div class="card-body">
                    <!-- resources/views/edit.blade.php -->
                    <div class="card-body">
                        <form action="{{ route('admin.links.update', $link->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" name="name" id="name" class="form-control" value="{{ $link->name }}" required>
                            </div>

                            <div class="form-group">
                                <label for="href_link">Link:</label>
                                <input type="text" name="href_link" id="href_link" class="form-control" value="{{ $link->href_link }}" required>
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
