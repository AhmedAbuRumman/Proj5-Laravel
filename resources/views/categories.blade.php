@extends('main')
@section('section1')
<section class="py-5 bg-dark inner-header">
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<h1 class="mt-0 mb-3 text-white">Categories</h1>
<div class="breadcrumbs">
<p class="mb-0 text-white"><a class="text-white" href="/">Home</a> / <span class="text-success">Categories</span></p>
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
                 @foreach($categories as $categorie )
            
                <div class="col-md-3">
                       <img  class="img-fluid  mt-2 " src="{{asset('uploads/photo/'.$categorie->image)}}" alt="image" style="width:270px;" alt="Responsive image" >   

                    <div class="inner-slider">
                        <div class="inner-wrapper">
                            
                        <a href="#">{{$categorie->job_cat}}</a><br>


                        <a href="PostsCategories/{{$categorie->id}}">View Details</a>


                        <h3>
                        Contrary to popular belief, Lorem Ipsum is not simply...
                        </h3>
                        </div>
                    </div>
                </div>
                @endforeach
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