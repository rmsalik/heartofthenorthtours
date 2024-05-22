@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h4 class="card-title m-1"> Categories</h4>
                <div class="card-header text-right">
                    <a href="{{ route('admin.categories.create') }}" type="button" class="btn btn-rounded btn-primary">
                        <span class="btn-icon-left text-white">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </span>
                        Add Category
                    </a>
                </div>
                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" id="successMessage">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="table-responsive table-bordered table-striped">
                        <table class="table" id="categories">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <!-- <th width="40%">Link</th> -->
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $categoy)
                                    <tr>
                                        <td>{{ $categoy->id }}</td>
                                        <td>{{ $categoy->name }}</td>
                                        <!-- <td width="40%"> {{$categoy->href_link}}</td> -->

                                        <td>
                                            <a href="{{ route('admin.categories.edit', $categoy->id) }}" class="btn btn-sm btn-success"><i class="fa fa-wrench" ></i></a>
                                            <form action="{{ route('admin.categories.destroy', $categoy->id) }}" method="POST" style="display: inline-block;">
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
