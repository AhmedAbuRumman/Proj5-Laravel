@extends('main')
@section('section1')
<section class="py-5 bg-dark inner-header">
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<h1 class="mt-0 mb-3 text-white">Posts</h1>
<div class="breadcrumbs">
<p class="mb-0 text-white"><a class="text-white" href="/">Home</a> / <span class="text-success">Posts</span></p>
</div>
</div>
</div>
</div>
</section>
<section>

<div class="main-page best-selling">
<div class="view_slider recommended pt-5">
<div class="container">
        <div class="sorting-div d-flex align-items-center justify-content-between"></div>
        <div class="container">
            <div class="row">
            @foreach($post as $p)
            <div class="col-md-3">



<div class="sorting-div d-flex align-items-center justify-content-between">
<!-- {{-- <p class="mb-2">{{$value["category_id"]}}</p> --}} -->
</div>
<!-- 
<img class="img-fluid" src="../asset('uploads/logo/'.$value['company_logo ''])"/>
{{-- "{{asset('uploads/photo/'.$categorie->image)}}"  --}} -->
<img class="card-img-top" src="{{asset('uploads/logo/'.$p['company_logo'])}}"  style="width:248px;" alt="Responsive image" >


<div class="inner-slider">
<div class="inner-wrapper">


     <h6 style="color:#20CCC6 ; font-weight: 900">{{$p->job_title}}</h6>  

{{-- <h3>{{$p->id}}</h3>   --}}
<h5>{{$p->company_name}}</h5> 
{{-- <h3>
{{$p->job_desc}}
</h3>
<h5>{{$p->job_city}}</h5>  --}}


{{-- <p class="mb-2">Contact Us:</p>
<h6>{{$p->email}}</h6> 
<h5>{{$p->phone}}</h5>  --}}
<a href="http://127.0.0.1:8000/single/{{$p['id']}}"><button type="submit" class="btn btn-success mt-1"><i ></i> View details</button> </a>

            </div>
        </div>
</div>
@endforeach

</section>

<section class="related-links">
<h2>Explore More Web &amp; Mobile Design Services</h2>
<ul>
<li>
<a href="#" class="related-link" target="">Email Templates Design</a>
</li>
<li>
<a href="#" class="related-link" target="">Landing Pages Design</a>
</li>
<li>
<a href="#" class="related-link" target="">Mobile Apps Design</a>
</li>
</ul>
</section>
<div class="container">
<section class="faqs">
<h2>Web &amp; Mobile Design FAQs</h2>
<ul>
<li>
<h3>What is web design?</h3>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
</p>
</li>
<li>
<h3>What kinds of projects need web design?</h3>
<p>When an unknown printer took Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
</li>
<li>
<h3>What makes good web design?</h3>
<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many. </p>
</li>
<li>
<h3>How do I pick the right web designer for me?</h3>
<p>Making it look like readable English It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many.</p>
</li>
</ul>
</section>
</div>
</div>
@endsection
