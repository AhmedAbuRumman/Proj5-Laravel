@extends('main')

@section('section1')
<div class="py-5">
    <div class="container">
        <div class="row">
          
            <aside class="col col-xl-5 order-xl-1 col-lg-6 order-lg-1 col-6">
                <div class="box mb-3 shadow-sm rounded bg-white profile-box text-center">
                    <div class="py-4 px-3 border-bottom">


                        <img src='{{asset("uploads/photo/$viewProfile->image")}}' class="img-fluid mt-2 rounded-circle" style="width:150px;" alt="Responsive image">

                        <h5 class="font-weight-bold text-dark mb-1 mt-4">{{$viewProfile->name}}</h5>
                        <p class="mb-0 text-muted">{{$viewProfile->email}}</p>
                    </div>
                    <div class="container">
                        <div class="row justify-content-md-center">
                            <a class="font-weight-bold p-3 d-block" href="http://127.0.0.1:8000/edit/{{Auth::user()->id}}">
                                <button class="btn  btn-lg btn-success" type="button"> Edit profile</button> </a>

                            <a class="font-weight-bold p-3 d-block" href="http://127.0.0.1:8000/applied_job/{{Auth::user()->id}}">
                                <button class="btn  btn-lg btn-success" type="button"> Applied jobs</button> </a>
                        </div>
                    </div>
                </div>



                <div class="box shadow-sm  rounded bg-white mb-3">




                </div>
            </aside>
            <main class="col col-xl-7 order-xl-2 col-lg-12 order-lg-2 col-md-12 col-sm-12 col-12">
                

                <div class="box shadow-sm rounded bg-white mb-3">
                    <div class="box-title border-bottom p-3">
                        <h6 class="m-0">Education</h6>
                    </div>
                    <div class="box-body p-3 border-bottom">
                        <div class="d-flex align-items-top job-item-header pb-2">
                            <div class="mr-2">
                                <h6 class="font-weight-bold text-dark mb-0">{{$viewProfile->university}}</h6>
                                <div class="text-truncate text-primary">{{$viewProfile->category_id}}</div>
                                <div class="small text-gray-500">{{$viewProfile->degree}} </div>
                            </div>

                        </div>
                    </div>
                </div>


                <div class="box shadow-sm rounded bg-white mb-3">
                    <div class="box-title border-bottom p-3">
                        <h6 class="m-0">Experience</h6>
                    </div>
                    <div class="box-body p-3 border-bottom">
                        <div class="d-flex align-items-top job-item-header pb-2">
                            <div class="mr-2">
                                <h6 class="font-weight-bold text-dark mb-0">{{$viewProfile->job_title}}</h6>
                                <div class="text-truncate text-primary">{{$viewProfile->company_name}}</div>
                                

                                <div class="box-body p-3">
                                   

                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="box shadow-sm rounded bg-white mb-3">
                    <div class="box-title border-bottom p-3">
                        <h6 class="m-0">Projects</h6>
                    </div>
                    <div class="box-body p-3 border-bottom">
                        <div class="d-flex align-items-top job-item-header pb-2">
                            <div class="mr-2">
                                <h6 class="font-weight-bold text-dark mb-0">{{$viewProfile->desc}}</h6>
                                <div class="text-truncate text-primary">{{$viewProfile->github_link}}</div>
                                

                                <div class="box-body p-3">
                                   

                                </div>
                            </div>

                        </div>
                    </div>
                </div>



            </main>

        </div>
    </div>
</div>
@endsection