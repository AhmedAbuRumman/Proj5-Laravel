@extends('dashborad')



@section('contant')
<br> <br>
<br>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title">Show Users</h4>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>users ID</th>
                               <th>User Name</th>
                               <th>User Email</th>
                              <th>Delete</th>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td><a href="/Users/{{$user->id}}/delete" class='btn btn-danger'>Delete</a></td>
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
                    <!-- END DATA TABLE-->
@endsection

