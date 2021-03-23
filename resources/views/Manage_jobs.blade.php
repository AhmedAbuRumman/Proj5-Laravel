@extends('dashborad')
@section('contant')
<br> <br> <br>
<div class="container">
    <div class="row justify-content-center">
            <div class="col-lg-12">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                     </div>
                </div>
            </div>
 <div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card strpied-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title">Show Jobs</h4>
                    </div>
                    <div class="card-body table-full-width table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>job title</th>
                                <th>company name</th>
                                <th>Delete</th>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach($posts as $post )
                                    <tr>
                                        <td>{{$post->job_title}}</td>
                                         <td>{{$post->company_name}}</td>
                                        <td><a href="/Jobs/{{$post->id}}/delete" class='btn btn-danger'>Delete</a></td>
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