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
                            <h3 class="text-center title-2">Update Admin</h3>
                        </div>
                        <hr>
                        <form action="/Admin/{{$admin->id}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')

                            <div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Admin Fullname</label>
                                <input id="cc-pament" value="{{$admin->name}}" name="name" type="text" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Admin Email</label>
                                <input id="cc-pament" value="{{$admin->email}}" name="email" type="text" class="form-control">
                            </div>


                            <div class="form-group">
                                <label for="cc-payment" class="control-label mb-1">Admin Password</label>
                                <input id="cc-pament" value="{{$admin->password}}" name="password" type="password" class="form-control">
                            </div>




                            <div>
                                <button id="payment-button" type="submit " class="btn" value="{{$admin->submit}}" name="submit">
                                    <span id="payment-button-amount">Update</span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                @endsection