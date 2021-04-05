@extends('main')

@section('section1')

<section class="py-5 homepage-search-block position-relative">
    <div class="container">
    <div class="row py-lg-5">
    <div class="col-lg-7">
    <div class="homepage-search-title">
    <h1 class="mb-3 text-shadow text-gray-900 font-weight-bold">Find  Best job you deserve and looking for</h1>
    <h5 class="mb-5 text-shadow text-gray-800 font-weight-normal">Millions of people use miver to turn their ideas into reality.
    </h5>
    </div>
    <div class="homepage-search-form">
    <form class="form-noborder">
    <div class="form-row">
    <div class="col-lg-3 col-md-3 col-sm-12 form-group">
    <div class="location-dropdown">
   
    </div>
    </div>
     {{-- <div class="col-lg-7 col-md-7 col-sm-12 form-group">
    <input type="text" placeholder="Find Services..." class="form-control border-0 form-control-lg shadow-sm">
    </div>
    <div class="col-lg-2 col-md-2 col-sm-12 form-group">
    <button type="submit" class="btn btn-success btn-block btn-lg btn-gradient shadow-sm"><i class="fa fa-search"></i></button>
    </div>
    </div>
    </form>
    </div>

    </div> --}}

    
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
<section>
    <div class="main-page best-selling">
    <div class="view_slider recommended pt-5">
    <div class="container">
    <div class="sorting-div d-flex align-items-center justify-content-between">
    <p class="mb-2">463 Services available</p>
    </div>
    <h3>Services In Web &amp; Mobile Design</h3>
    </div>
    <div class="container">
    <div class="row">
    <div class="col-md-3">
    <a href="product-detail.html">
    <img class="img-fluid" src="{{asset('public_theme/images/list/v1.png')}}" />
    </a>
    <div class="inner-slider">
    <div class="inner-wrapper">
    <h3>
    Contrary to popular belief, Lorem Ipsum is not simply...
    </h3>
    
    </div>
    </div>
    </div>
    </div>
    </div>
    <div class="footer-pagination text-center">
    <nav aria-label="Page navigation example">
    <ul class="pagination">
    <li class="page-item">
    <a class="page-link" href="#" aria-label="Previous">
    <span aria-hidden="true"><i class="fa fa-chevron-left" aria-hidden="true"></i></span>
    
    </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item active"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">4</a></li>
    <li class="page-item"><a class="page-link" href="#">5</a></li>
    <li class="page-item">
    <a class="page-link" href="#" aria-label="Next">
    <span aria-hidden="true"><i class="fa fa-chevron-right" aria-hidden="true"></i></span>
    
    </a>
    </li>
    </ul>
    </nav>
    </div>
    </section>
@endsection


@section('section3')
    
@endsection




@section('section4')
    
<div class="guide-wrapper py-5">
    <div class="container">
    <h2>
    Miver
    Guides
    <a href="#" class="float-right">See More guides></a>
    </h2>
    <div class="row">
    <div class="col-md-4">
    <a href="#" class="guide">
    <img src="{{asset('public_theme/images/guide-01.jpg')}}">
    <div class="content">
    <h6>Create a Website</h6>
    <p>Building a stunning website from A to Z</p>
    </div>
    </a>
    </div>
    <div class="col-md-4">
    <a href="#" class="guide">
    <img src="{{asset('public_theme/images/guide-02.jpg')}}">
    <div class="content">
    <h6>Grow With Digital Marketing</h6>
    <p>Promoting your business online</p>
    </div>
    </a>
    </div>
    <div class="col-md-4">
    <a href="#" class="guide">
    <img src="{{asset('public_theme/images/guide-03.jpg')}}">
    <div class="content">
    <h6>Build a Strong Brand</h6>
    <p>Differentiating yourself from the competition</p>
    </div>
    </a>
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