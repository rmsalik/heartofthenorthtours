@extends('layouts.app')

@section('content')
@php 
$pdf_file_stored = explode('/',$flayers->pdfFile);
$pdf_file_name = $pdf_file_stored[2];

@endphp 
 <div class="row">
        <div class="col-12">
            <div class="card">
                <h4 class="card-title m-1">Edit Flayer</h4>
                <div class="card-header text-right">
                    <a href="{{ route('admin.flayers.index') }}" type="button" class="btn btn-rounded btn-primary">
                        <span class="btn-icon-left text-white">
                            <i class="fa fa-arrow-left" aria-hidden="true"></i>
                        </span>
                        Back
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.flayers.update', $flayers->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="title">Name:</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ $flayers->title }}" required>
                        </div>
                        <div class="form-group">
                            <label for="image_url">Image:</label>
                            <input type="file" name="image_url" id="image_url">
                            <img src="{{ asset($flayers->image_url) }}" alt="Image" style="max-width: 200px;">
                        </div>
						
						<div class="form-group">
                            <label for="image_url">Pdf File:</label>
                            <input type="file" name="pdf_url" id="pdf_url">
							<a href="{{ asset($flayers->pdfFile) }}" target="_blank">{{$pdf_file_name}}</a>
                            
                        </div>

                        <div class="form-group">
                            <label for="info">Info:</label>
                            <input type="text" name="info" id="info" class="form-control" value="{{ $flayers->info }}" required>
                        </div>
						
                        
						
						
					
						
					
						
						
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea name="description" id="description" class="form-control" required>{{ $flayers->description }}</textarea>
                        </div>
                       
						
						
						
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
