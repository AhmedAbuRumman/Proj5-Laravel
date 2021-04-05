@extends('main')

@section('section1')

<section class="py-5 homepage-search-block position-relative">
    <div class="container">
        <div class="row py-lg-5">
            <div class="col-lg-7">
                <div class="homepage-search-title">
                    <h1 class="mb-3 text-shadow text-gray-900 font-weight-bold">Find Best job you deserve and looking for</h1>
                    <h5 class="mb-5 text-shadow text-gray-800 font-weight-normal">Millions of people use miver to turn their ideas into reality.
                    </h5>
                </div>
                <div class="homepage-search-form">
                    <form class="form-noborder" method="POST" action="search_post">
                        @csrf
                        <div class="form-row">

                            <div class="col-lg-7 col-md-7 col-sm-12 form-group">
                                <input type="text" name="job_post_title" placeholder="Find jobs by name..." class="form-control border-0 form-control-lg shadow-sm">
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-12 form-group">
                                <button type="submit" class="btn btn-success btn-block btn-lg btn-gradient shadow-sm"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <div class="col-lg-5">
                <img class="img-fluid" src="{{asset('public_theme/images/banner.svg')}}" alt='' />
            </div>
        </div>
    </div>
</section>

<ul class="trusted-by bg-white border-bottom">
    <li><img src="{{asset('public_theme/images/facebook.png')}}"></li>
    <li><img src="{{asset('public_theme/images/google.png')}}"></li>
    <li><img src="{{asset('public_theme/images/mit.png')}}"></li>
    <li><img src="{{asset('public_theme/images/netflix.png')}}"></li>
    <li><img src="{{asset('public_theme/images/paypal.png')}}"></li>
    <li><img src="{{asset('public_theme/images/intuit.png')}}"></li>
    <li><img src="{{asset('public_theme/images/facebook.png')}}"></li>
</ul>


@endsection

@section('section2')


<div class="box-body p-3">
    <section>
        <div class="main-page best-selling">
            <div class="view_slider recommended pt-5">
                <div class="container">



                </div>
                <div class="container">
                    <div class="row text-center">
                   
                        @foreach($all_posts1 as $key => $value)
                        <div class="col-md-3">
                            {{-- <a href="single/{{$all_posts2['id']}}"> --}}
                            <div class="sorting-div d-flex align-items-center justify-content-between">
                                <p class="mb-2">{{$value["job_cat"]}}</p>
                            </div>
                            <img class="img-fluid" src="{{asset('uploads/logo/'.$value['company_logo'])}}" width="248px" height="100px" />
                            <div class="inner-slider">
                                <div class="inner-wrapper">
                                    <h6 style="color:#20CCC6 ; font-weight: 900">{{$value["job_title"]}}</h6>
                                    <h6>{{$value["company_name"]}}</h6>
                                    {{-- <h6>{{$value["job_city"]}}</h6>
                                    <h6 class="mb-2">Contact Us:</h6>
                                    <p>{{$value["email"]}}</p>
                                    <p>{{$value["phone"]}}</p> --}}
                                    {{-- <a href="" ><button type="submit" class="btn btn-info m-0"><i class="mdi mdi-image"></i> Apply</button> </a> --}}
                                    {{-- </a> --}}

                                    <a href="http://127.0.0.1:8000/single/{{$value['id']}}"><button type="submit" class="btn btn-success mt-1"><i></i> View details</button> </a>

                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>



    </section>
</div>
</div>




@endsection


@section('section3')

@endsection




@section('section4')

<div class="guide-wrapper py-5">
    <div class="container">
        <h2>
            itPath
            Guides
            <a href="#" class="float-right">See More guides></a>
        </h2>
        <div class="row">
            <div class="col-md-4">
                <a href="https://www.thebalancecareers.com/top-job-interview-tips-2061331" class="guide">
                    <img src="{{asset('public_theme/images/guide-01.jpg')}}"> </a>
                <div class="content">
                    <h6>Tips for a Successful Job Interview</h6>
                    <p>These interview techniques cover all the basics you need to know polish up your interview technique and ace a job interview</p>
                </div>

            </div>
            <div class="col-md-4">
                <a href="https://www.marketo.com/digital-marketing/" class="guide">
                    <img src="{{asset('public_theme/images/guide-02.jpg')}}"></a>
                <div class="content">
                    <h6>Grow With Digital Marketing</h6>
                    <p>At a high level, digital marketing refers to advertising delivered through digital channels such as search engines, websites, social media, email, and mobile apps. Using these online media channels, digital marketing</p>
                </div>

            </div>
            <div class="col-md-4">
                <a href="https://www.forbes.com/sites/jiawertz/2017/06/02/7-principles-to-building-a-strong-brand/?sh=2edc7507781a" class="guide">
                    <img src="{{asset('public_theme/images/guide-03.jpg')}}"></a>
                <div class="content">
                    <h6>Build a Strong Brand</h6>
                    <p>Branding your business is one of the most important steps in building a company. It gives your company a unique personality, and establishes a differentiated position in the market that attracts the right customers.</p>
                </div>

            </div>
        </div>
    </div>
</div>


<div>
    <div class="get-started">
        <div class="content">
            <h2>Find Freelance Services For Your Business Today</h2>
            <p>We've got you covered for all your business needs</p>
            <a href="#" class="c-btn c-fill-color-btn">Get Started</a>
        </div>
    </div>
</div>
@endsection