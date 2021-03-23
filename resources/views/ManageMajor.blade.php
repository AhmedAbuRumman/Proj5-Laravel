@extends('dashborad')

@section('contant')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-header">Manage Majors</div>
                    <div class="card-body">
                        <div class="card-title">
                            <h3 class="text-center title-2">Create Major</h3>
                        </div>
                        <hr>
                        <form action="{{route('Major.store')}}" method="post" enctype="multipart/form-data">
                            @csrf


                            <div class="form-group">
                                <select name="category_id" class="form-control" data-msg="Please select Job Category." data-error-class="u-has-error" data-success-class="u-has-success">
                                    <option value="">Select Category</option>

                                    @foreach($categories as $category)
                                    <option value={{$category->id}}>{{$category->job_cat}}</option>
                                    @endforeach

                                </select>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1"> Major Name</label>
                                    <input id="cc-pament" name="major_name" type="text" class="form-control">
                                </div>

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
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card strpied-tabled-with-hover">
                                <div class="card-header ">
                                    <h4 class="card-title">Show Majors</h4>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover table-striped">
                                        <thead>
                                            <th>id</th>
                                            <th>Category Name</th>
                                            <th>Major name</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                @foreach($majors as $major)
                                                <td>{{$major->id}}</td>
                                                <td>{{$major->category->job_cat}}</td>
                                                <td>{{$major->major_name}}</td>
                                                <td><a href="/Major/{{$major->id}}/edit" class='btn btn-primary'>Edit</a></td>
                                                <form method="post" action="{{route('Major.destroy',$major->id)}}">
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