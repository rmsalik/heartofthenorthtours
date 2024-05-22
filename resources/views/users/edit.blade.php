@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <h4 class="card-title m-1">Edit User</h4>
            <div class="card-header text-right">
                <a href="{{ route('admin.users.index') }}" type="button" class="btn btn-rounded btn-primary ">
                    <span class="btn-icon-left text-white">
                        <i class="fa fa-arrow-left" aria-hidden="true"></i>
                    </span>
                    Back
                </a>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Update User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
