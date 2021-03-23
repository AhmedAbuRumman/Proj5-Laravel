@extends('dashborad')

@section('contant')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                        <div class="card-header">Manage Major</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Update Major</h3>
                            </div>
                            <hr>
                            <form action="/Major/{{$majors->id}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')

                                <div class="form-group">
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1"> Major Name</label>
                                    <input id="cc-pament" name="major_name" type="text" value="{{$majors->major_name}}" class="form-control">
                                </div>

                            </div>
                            <div>
                                <button id="payment-button" type="submit " class="btn " name="submit">
                                    <span id="payment-button-amount">Update</span>
                                </button>
                            </div>
                        </form>
                </div>
            </div>
@endsection

