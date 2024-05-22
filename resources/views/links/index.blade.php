@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h4 class="card-title m-1">Quick links</h4>
                <div class="card-header text-right">
                    <a href="{{ route('admin.links.create') }}" type="button" class="btn btn-rounded btn-primary">
                        <span class="btn-icon-left text-white">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                        </span>
                        Add link
                    </a>
                </div>
                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" id="successMessage">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="table-responsive table-bordered table-striped">
                        <table class="table" id="quick_links">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Links</th>

                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($links as $link)
                                    <tr>
                                        <td>{{ $link->id }}</td>
                                        <td>{{ $link->name }}</td>
                                        <td> {{ Str::limit($link->href_link, 50)}}</td>

                                        <td>
                                            <a href="{{ route('admin.links.edit', $link->id) }}" class="btn btn-sm btn-success"><i class="fa fa-wrench" ></i></a>
                                            <form action="{{ route('admin.links.destroy', $link->id) }}" method="POST" style="display: inline-block;">
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
