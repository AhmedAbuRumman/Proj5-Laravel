@extends('main')



@section('section2')


    <div class="box-body p-3" xmlns="http://www.w3.org/1999/html">
        <section>
            <div class="main-page best-selling">
                <div class="view_slider recommended pt-5">
                    <div class="container">

                        <center><img src="{{asset('public_theme/images/logo.png')}}"></center)

                    </div>
                    <div class="container">
                        <div class="row text-center">

                            <div class="jumbotron" style="margin-top: 20px; background-color: honeydew">
                                <h1 class="display-4">Welcome To Our Family</h1>
                                <p class="lead">Find your dream Job. This great website will help you to post and find job easily. Just in a seconds you can view millions of best people to work in your company . Also, If you are a job seeker you will find your dream job here.</p>
                                <hr class="my-4">
                                <div style="margin-bottom: 50px"></div>
                                <p class="lead">
                                <p class="lead">Login as a:</p>
                                <div style="margin-bottom: 50px"></div>
                                    <a class="btn btn-success btn-lg mr-5" style="width: 200px" href="{{ route('recruiter.login') }}" role="button">Recruiter</a>
                                    <a class="btn btn-success btn-lg ml-5" style="width: 200px" href="{{ route('login') }}" role="button">User</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


@endsection






