@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h4 class="card-title m-1">Flayers</h4>
                <div class="card-header text-right">
                    <a href="{{ route('admin.flayers.create') }}" type="button" class="btn btn-rounded btn-primary">
                        <span class="btn-icon-left text-white">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </span>
                        Add New
                    </a>
                </div>
                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" id="successMessage">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="table-responsive table-bordered table-striped">
                        <table class="table" id="Flayers" >
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    
                                    <th>Info</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th style="width: 10%;">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($flayers as $item)
                                    <tr>
                                        <td>{{ $item->title }}  </td>
                                        <td>{{ Str::limit($item->info, 50) }}</td>
                                        <td>{{ Str::limit($item->description, 100)}}</td>
                                        <td>
                                            <img src="{{ asset($item->image_url) }}" alt="Image" style="max-width: 100px;">
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.flayers.edit', $item->id) }}" class="btn btn-sm btn-success"><i class="fa fa-wrench" ></i></a>
                                            <form action="{{ route('admin.flayers.destroy', $item->id) }}" method="POST" style="display: inline-block;">
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
