@extends('layouts.app')

@section('content')
@php 
$pdf_file_stored = explode('/',$flyers->pdfFile);
$pdf_file_name = $pdf_file_stored[2];
$img_req = $flyers->image_url==''?'required':'';
$pdf_req = $flyers->pdfFile==''?'required':'';

@endphp 
 <div class="row">
        <div class="col-12">
            <div class="card">
                <h4 class="card-title m-1">Edit Flyer</h4>
                <div class="card-header text-right">
                    <a href="{{ route('admin.flyers.index') }}" type="button" class="btn btn-rounded btn-primary">
                        <span class="btn-icon-left text-white">
                            <i class="fa fa-arrow-left" aria-hidden="true"></i>
                        </span>
                        Back
                    </a>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.flyers.update', $flyers->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="title">Name:</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ $flyers->title }}" required>
                        </div>
                        <div class="form-group">
                            <label for="image_url">Image:</label>
                            <input type="file" name="image_url" id="image_url" {{$img_req}}>
                            <img src="{{ asset($flyers->image_url) }}" alt="Image" style="max-width: 200px;">
                        </div>
						
						<div class="form-group">
                            <label for="image_url">Pdf File:</label>
                            <input type="file" name="pdf_url" id="pdf_url" {{$pdf_req}}>
							<a href="{{ asset($flyers->pdfFile) }}" target="_blank">{{$pdf_file_name}}</a>
                            
                        </div>

                        <div class="form-group">
                            <label for="info">Info:</label>
                            <input type="text" name="info" id="info" class="form-control" value="{{ $flyers->info }}" required>
                        </div>
						
                        
						<div class="form-group">
                            <label for="Book Now Link">Book Now Link:</label>
                            <input type="text" name="book_now_link" id="book_now_link" class="form-control" value="{{ $flyers->book_now_link }}" required>
                        </div>

                        {{-- <div class="form-group " >
                            <label for="video_link">Video Link:</label>
                            <input type="text" name="video_link" id="video_link" class="form-control"  value="{{ $flyers->video_link }}">
                        </div> --}}

                        <div class="form-group">
                            <label for="video_link">Video</label>
                            <input type="file" name="video_link" id="video_link" >
                           
                        </div>

                        <div class="form-group">
                            <label for="description">Description:</label>
                            <textarea name="description" id="description" class="form-control" required>{{ $flyers->description }}</textarea>
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
