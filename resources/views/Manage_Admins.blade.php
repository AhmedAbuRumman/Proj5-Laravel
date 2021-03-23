@extends('dashborad')

@section('contant')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-header">Manage Admin</div>
                    <div class="card-body">
                        <div class="card-title">
                            <h3 class="text-center title-2">Create Admin</h3>
                        </div>
                        <hr>
                        <form action="{{route('Admin.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Admin Fullname</label>
                                <input id="cc-pament" name="name" type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Admin Email</label>
                                <input id="cc-pament" name="email" type="text" class="form-control">
                            </div>


                            <div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Admin Password</label>
                                <input id="cc-pament" name="password" type="password" class="form-control">
                            </div>
                    </div>
                    <div class="text-center">
                        <button id="payment-button" type="submit" class="btn " name="submit">
                            <span id="payment-button-amount">Create</span>
                        </button>
                    </div>
                    </form>
                </div>
            </div>
            <div class="row m-t-30">
                <div class="col-md-12">
                    
                <div class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card strpied-tabled-with-hover">
                                    <div class="card-header ">
                                        <h4 class="card-title">Show Admin</h4>
                                    </div>
                                    <div class="card-body table-full-width table-responsive">
                                        <table class="table table-hover table-striped">
                                            <thead>
                                                <th>#</th>
                                                <th>Full Name</th>
                                                <th> Email</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </thead>
                                            <tbody>
                                                <tr>

                                                    @foreach($admins as $admin )
                                                    <td>{{$admin->id}}</td>
                                                    <td>{{$admin->name}}</td>
                                                    <td>{{$admin->email}}</td>


                                                    <td><a href="Admin/{{$admin->id}}/edit" class='btn btn-primary'>Edit</a></td>
                                                    <form method="post" action="{{route('Admin.destroy',$admin->id)}}">
                                                        @csrf
                                                        @method('delete')
                                                        <!-- <input type="hidden" name="_method" value="DELETE"> -->
                                                        <td><button href="" class='btn btn-danger'>Delete</button></td>
                                                    </form>
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
                @endsection