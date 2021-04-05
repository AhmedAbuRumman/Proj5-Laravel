@extends('main')

@section('section1')
<form method="post" action="/jobuser/{{$user['id']}}">

    @csrf
    @method('POST')

    <div class="main-page py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Post</li>
                        </ol>
                    </nav>

                    <div id="overview" class="seller-overview d-flex align-items-center">
                        <div class="user-profile-image d-flex">

                        </div>
                        <div class="col-lg-12 ">
                            <div class="stats-desc">
                                <ul class="user-stats">
                                    <li>Job Title<strong>{{$user["job_title"]}}</strong></li>
                                    <li>Company Name<strong>{{$user["company_name"]}}</strong></li>
                                    <li>City<strong>{{$user["job_city"]}}</strong></li><br>
                                </ul>

                                <ul class="user-stats">
                                    <li>Job Description<strong>{{$user["job_desc"]}}</strong></li>
                                </ul>


                                <ul class="user-stats">
                                    <li>Email<strong>{{$user["email"]}}</strong></li><br>
                                    <li>Phone<strong>{{$user["phone"]}}</strong></li>
                                    <li>Phone<strong>{{$user["street_address"]}}</strong></li>

                                </ul>
                            </div>
                            <a><button type="submit" class="btn btn-success mt-1"><i class="mdi mdi-image"></i>Apply</button></a>



                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</form>
@endsection