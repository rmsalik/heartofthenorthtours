@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                {{-- @can('role-create') --}}
                <div class="welcome-text text-right">
                    <a href="{{ route('admin.users.create') }}" type="button" class="btn btn-rounded btn-primary">
                        <span class="btn-icon-left text-white">
                            <i class="fa fa-plus color-info"></i>
                        </span>
                        Add User
                    </a>
                </div>
                {{-- @endcan --}}
                <h4 class="card-title">Users</h4>
            </div>
            <div class="card-body">
                @if(session('status'))
                    <div class="alert alert-success" id="successMessage">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="table-responsive">
                    <div id="example_wrapper" class="dataTables_wrapper">
                        <table id="example" class="table table-bordered table-striped" style="min-width: 845px" role="grid" aria-describedby="example_info">
                            <thead>
                                <tr role="row">
                                    <th> Sr#</th>
                                    <th> Name</th>
                                    <th> Email</th>

                                    <th> Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                $i = 0;
                                @endphp
                               @foreach ($users as $user)
                               <tr class="odd" role="row">
                                   <td class="sorting_1">{{ ++$i }}</td>
                                   <td> <span class="badge badge-primary">{{ $user->name }}</span> </td>
                                   <td> <span class="badge badge-primary">{{ $user->email }}</span> </td>
                                   <td>
                                       {{-- @can('role-edit') --}}
                                       <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-success"><i class="fa fa-wrench" aria-hidden="true"></i></a>
                                       {{-- @endcan --}}
                                       {{-- @can('role-delete') --}}
                                       <form action="{{ route('admin.users.destroy', $user->id) }}" method="post" style="display:inline">
                                           @csrf
                                           @method('DELETE')
                                           <button onclick="return confirm('Do you want to delete this record?')" type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                       </form>
                                       {{-- @endcan --}}
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
</div>

<!-- Add the JavaScript code for Toastr notifications here -->
{{-- <script>
    // Display Toastr notification if a message is set
    @if(session('message'))
        toastr.success('{{ session('message') }}');
    @endif
</script> --}}

@endsection
