@extends('main')

@section('section1')
<div class="py-5">

<div class="container">
<a style="padding-bottom:40px; display:block;" href="http://127.0.0.1:8000/user_profile/{{Auth::user()->id}}">Go back </a>

<div class="row">


<main class="col col-xl-12 order-xl-2 col-lg-12 order-lg-2 col-md-12 col-sm-12 col-12">
<div class="box shadow-sm rounded bg-white mb-3">
<div class="box-title border-bottom p-3">
<h6 class="m-0">Applied jobs</h6>
</div>
@foreach($seek->jobpost as $s)
<div class="box-body p-3">
<p>{{$s->job_title}}
</p>

<p class="mb-0">{{$s->job_desc}}
</p>
</div>
<br>
<hr>
@endforeach
</div>

</main>

</div>
</div>
</div>
@endsection