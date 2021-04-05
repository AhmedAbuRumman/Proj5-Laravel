@extends('main')

@section('section1')
<section class="cover has-attachments" style="background-image:url(https://images.pexels.com/photos/443383/pexels-photo-443383.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940); opacity:0.8; text-align:center;" data-viewsize='{ "m":{ "height": { "min": 0.25}}, "d":{ "height": { "min": 0.25}} }'>
    <div class="py-5">
        <div class="container">
            <div class="row vertical-center-row">
               
                <aside class="col-md-4 align-items-center">
                    <div class="box mb-3 centered shadow-sm rounded bg-white profile-box text-center">
                        <div class="py-4 px-3 border-bottom">
                            <img src="{{asset('public_theme/images/user/s4.png')}}" class="img-fluid mt-2 rounded-circle" alt="Responsive image">
                            <h5 class="font-weight-bold text-dark mb-1 mt-4"></h5>
                            <p class="mb-0 text-muted">{{$view->name}} </p>

                        </div>
                        <div class="p-4">

                            <a href="http://127.0.0.1:8000/job_post"><button type="submit" class="btn btn-success"><i></i>Add New Job</button> </a>
                        </div>
                    </div>
                    <div class="shadow-sm rounded bg-white mb-3">
                        <div class="box-title border-bottom p-3 mt-2 text-center">
                            <h6 class="m-1">Phone Number</h6>
                            <p class="mb-0 mt-0 small">{{$view->recruiter_number}}</p>
                            <h6 class="m-1">Email</h6>
                            <p class="mb-0 mt-0 small">{{$view->email}}</p>

                            <a href="http://127.0.0.1:8000/view_post"><button type="submit" class="btn btn-success"><i></i>View All Jobs</button> </a>
                        </div>


                        <!-- <div class="box-body">
<div class="p-3">
<div class="form-group mb-4">
<label class="mb-1">BIO</label>
<div class="position-relative">
<textarea class="form-control" rows="4" name="text" placeholder="Enter Bio">{{$view->company_name}}</textarea>
</div>
</div>

</div>
</div> -->
                    </div>
                    <!-- <div class="shadow-sm rounded bg-white mb-3">
<div class="box-title border-bottom p-3">
<h6 class="m-0">Social profiles</h6>
<p class="mb-0 mt-0 small">Add elsewhere links to your profile.
</p>
</div>
<div class="box-body">
<div class="p-3">
<div class="position-relative icon-form-control mb-2">
<i class="mdi mdi-instagram position-absolute text-muted"></i>
 <input placeholder="Add Instagram link" type="text" class="form-control">
</div>
<div class="position-relative icon-form-control mb-2">
<i class="mdi mdi-facebook position-absolute text-muted"></i>
<input placeholder="Add Facebook link" type="text" class="form-control">
</div>
<div class="position-relative icon-form-control mb-2">
<i class="mdi mdi-twitter position-absolute text-muted"></i>
<input placeholder="Add Twitter link" type="text" class="form-control">
</div>
</div>
</div>
</div> -->
                </aside>

              

            </div>

        </div>
    </div>

    </form>
    @endsection