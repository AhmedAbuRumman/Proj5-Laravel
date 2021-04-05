@extends('main')

@section('section1')

<div class="py-5">
<div class="container">
<div class="row">
<div class="col-md-12">

<div class="shadow-sm rounded bg-white mb-3">
<div class="box-title border-bottom p-3">
<h6 class="m-0">Edit Company Informations</h6>
</div>
<div class="box-body p-3">

<form  action="job_post" method="POST" class="js-validate" novalidate="novalidate" enctype="multipart/form-data">
  @csrf
  <div class="row">


<div class="col-sm-6 mb-2">
<div class="js-form-message">
<label id="nameLabel" class="form-label">
    Company Name
<span class="text-danger">*</span>
</label>
<div class="form-group">
<input type="text" class="form-control" name="company_name" value="" placeholder="" aria-label="Enter your name" required="" aria-describedby="nameLabel" data-msg="Please enter your name." data-error-class="u-has-error" data-success-class="u-has-success">
</div>
</div>
@error('company_name')
<span class="text-danger">{{ $message }}</span>
@enderror</div>

<div class="col-sm-6 mb-2">
    <div class="js-form-message">
    <label id="usernameLabel" class="form-label">
      Company phone 
    <span class="text-danger">*</span>
    </label>
    <div class="form-group">
    <input type="text" class="form-control" name="phone" value="" placeholder="" aria-label="Enter your username" required="" aria-describedby="usernameLabel" data-msg="Please enter your username." data-error-class="u-has-error" data-success-class="u-has-success">
    @error('phone')
<span class="text-danger">{{ $message }}</span>
@enderror
  
  </div>
    </div>
    </div>
</div>

</div>

<div class="row">
<div class="col-sm-6 mb-2">
<div class="js-form-message">
  
<label id="emailLabel" class="form-label">
Company logo
<span class="text-danger">*</span>
</label>
<div class="form-group">
    <input type="file" class="form-control" id="exampleInputEmail1" name="company_logo" >
 </div>

</div>
</div>
</div>

<div class="mb-3 text-right">
    <button type="submit" class="btn btn-success">Submit</button>
    </div>
</form>
</div>
</div>

</div>
</div>
</div>


@endsection