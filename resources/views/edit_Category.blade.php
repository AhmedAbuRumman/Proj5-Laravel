@extends('dashborad')

@section('contant')
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                        <div class="card-header">Manage Category</div>
                        <div class="card-body">
                            <div class="card-title">
                                <h3 class="text-center title-2">Update Category</h3>
                            </div>
                            <hr>
                            <form action="/Categories/{{$categorie->id}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')

                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="cc-payment" class="control-label mb-1">job Category</label>
                                        <input id="cc-pament" name="job_cat" type="text" value="{{$categorie->job_cat}}" class="form-control">
                                    </div>
                                    <label for="cc-payment" class="control-label mb-1">job Category</label>
                                    <!-- <select value="{{$categorie->job_Category}}" name="job_cat" class="form-control">
                                        <option value="">select job Category</option>
                                       
                                    </select>  -->

                                </div>
                            <div>
                                <button id="payment-button" type="submit " class="btn " value="{{$categorie->submit}}" name="submit">
                                    <span id="payment-button-amount">Update</span>
                                </button>
                            </div>
                        </form>
                </div>
            </div>
@endsection

