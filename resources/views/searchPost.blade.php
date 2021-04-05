@extends('main')

@section('section1')
<div class="py-5">
<div class="container">
<div class="row">




</aside>
<main class="col col-xl-12 order-xl-2 col-lg-12 order-lg-2 col-md-12 col-sm-12 col-12">
<div class="box shadow-sm rounded bg-white mb-3">
<div class="box-title border-bottom p-3">
<h6 class="m-0"> Job Posts</h6>
</div>
<div class="box-body p-3">
<section>
<div class="main-page best-selling">
<div class="view_slider recommended pt-5">
<div class="container">

 

</div>
<div class="container">
<div class="row">
@foreach($posts as $key => $value)
<div class="col-md-3">
<a href="product-detail.html">
<div class="sorting-div d-flex align-items-center justify-content-between">
<p class="mb-2">{{$value["category_id"]}}</p>
</div>

<img class="img-fluid" src="{{asset('public_theme/images/list/v1.png')}}" />
</a>
<div class="inner-slider">
<div class="inner-wrapper">
    <h6 style="color:#20CCC6 ; font-weight: 900">{{$value["job_title"]}}</h6> 
<h5>{{$value["company_name"]}}</h5> 
<h3>
{{$value["job_desc"]}}
</h3>
<h5>{{$value["job_city"]}}</h5> 


<p class="mb-2">Contact Us:</p>
<h6>{{$value["email"]}}</h6> 
<h5>{{$value["phone"]}}</h5> 

</div>
</div>
</div>
@endforeach
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
</div>
</div>

</main>

</div>
</div>
</div>
@endsection