@extends('layouts.app')
@section('userList')
   <div class="container mt-4">
    <h1>Users list App</h1><br>
        <div class="offset-md-2 col-md-8">
            <!-- New Users Card -->
            <div class="card"> 
                <!-- Update Users name -->
                @if (isset($user))
                <div class="card-header">
                Update Users 
                </div>
                <div class="card-body">
                    <!-- Update Users Form -->
                    <form action="{{url('updateusers')}}" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{$user ->id}}">
                        <!-- teacher name -->
                        <div class="mb-3">
                            <label for="User-name" class="form-label">User</label>
                            <input type="text" name="name" id="User-name" class="form-control" value="{{$user ->name  }}" >
                        </div>

                        <!-- Update user button -->
                        <div>
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-plus me-2"></i>Update User
                            </button>
                        </div>
                    </form>
                </div>
                @else
                <div class="card-header">
                    New Users
                </div>
                <div class="card-body">
                    <!-- New user Form -->
                    <form action="createusers" method="POST">
                        @csrf
                        <!-- user name -->
                        <div class="mb-3">
                            <label for="User-name" class="form-label">User</label>
                            <input type="text" name="name" id="User-name" class="form-control" placeholder="Enter a new User">
                        </div>

                        <!-- add user button -->
                        <div>
                            <button type="submit" class="btn btn-primary">
                                <i class="fa fa-plus me-2"></i>Add User
                            </button>
                        </div>
                    </form>
                </div>
                @endif
            </div>

            <div class="card mt-4">
                <div class="card-header">
                    Current User
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td> {{$user->name}} </td>
                                <td>
                                    <form action="/deleteusers/{{$user -> id}}" method="POST" class="d-inline">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">
                                            <i class="fa fa-trash me-2"></i>Delete
                                        </button>
                                    </form>
                                    <form action="/editusers/{{$user -> id}}" method="POST" class="d-inline">
                                        @csrf
                                        <button type="submit" class="btn btn-info">
                                            <i class="fa fa-info me-2"></i>Edit
                                        </button>
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

@endsection 