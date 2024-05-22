@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-12">

        <div class="card">
            <div class="card-header">
                <div class="welcome-text text-right">
                    <a  href="{{route('admin.roles.index')}}" class="btn btn-rounded btn-primary"><span class="btn-icon-left text-white"><i class="fa fa-arrow-left"></i>
                    </span>Back</a>
                </div>
                <h4 class="card-title">Add Role</h4>
            </div>
            <div class="card-body">

                <div class="basic-form">
                <form method="POST" action="{{route('admin.roles.store')}}">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control" name="name" placeholder="Role name">
                        </div>
                    </div>

                    <div class="table-responsive mt-5">
                        <table id="" class="table table-bordered table-striped" style="min-width: 845px"
                            role="grid" aria-describedby="example_info">
                            <thead>
                                <tr role="row">
                                    <th class="text-center"> SR</th>
                                    <th class="text-center"> Permission Name</th>
                                    <th class="text-center"> Checkbox</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 0;
                                @endphp
                                @foreach ($permission as $value)
                                    <tr class="odd" role="row">
                                        <td class="text-center">{{++$i}}</td>
                                        <td class="text-center">{{ucfirst($value->name)}}</td>
                                        <td class="text-center">
                                            <div class="form-check form-check-inline">
                                                <input type="checkbox" name="permissions[]" value="{{ $value->name }}" class="form-check-input">
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <button  type="submit" class="btn btn-rounded btn-primary mt-5"><span class="btn-icon-left text-white"><i class="fa fa-plus color-info"></i>
                    </span>Add Role</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
