@extends('main')

@section('section1')

<div class="py-5">
<div class="container">
<div class="row">


<main class="col-md-12">
<div class="shadow-sm rounded bg-white mb-3">
<div class="box-title border-bottom p-3">
<h6 class="m-0">Edit Job Post</h6>

</div>
<div class="box-body p-3">
<form method="POST" action="view_post/{{$recruiterEdit['id']}}"   enctype="multipart/form-data">
<div class="row">
@csrf



<div class="col-sm-6 mb-2">
<div class="js-form-message">
<label id="usernameLabel" class="form-label">
Job Tittle
<span class="text-danger">*</span>
</label>
<div class="form-group">
<input type="text" class="form-control" name="job_title" value="{{$recruiterEdit['job_title']}}" placeholder="Enter the job title" aria-label="Enter the job title" required="" aria-describedby="usernameLabel" data-msg="Please enter the job title." data-error-class="u-has-error" data-success-class="u-has-success">
@error('job_title')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>
</div>
</div>

<div class="col-sm-6 mb-2">
<div class="js-form-message">
<label id="nameLabel" class="form-label">
Job Description
<span class="text-danger">*</span>
</label>
<div class="form-group">
<input type="textarea" class="form-control" name="job_desc" value="{{$recruiterEdit['job_desc']}}" placeholder="Enter the Job Description" aria-label="Enter the Job Description" required="" aria-describedby="nameLabel" data-msg="Please Enter the Job Description." data-error-class="u-has-error" data-success-class="u-has-success">
@error('job_desc')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>
</div>
</div>


</div>
<div class="row">

<div class="col-sm-6 mb-2">
<div class="js-form-message">
<label id="phoneNumberLabel" class="form-label">
Job Category
<span class="text-danger">*</span>
</label>
<div class="form-group">
<select name="category_id" class="form-control" data-msg="Please select Job Category." data-error-class="u-has-error" data-success-class="u-has-success">
<option value="">Select Category</option>
<option value="birthMonthSelect1">Back end </option>
<option value="birthMonthSelect2">Front end</option>
<option value="birthMonthSelect3">UX/UI</option>
</select>
@error('category_id')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>
</div>
</div>

<div class="col-sm-6 mb-2">
<div class="js-form-message">
<label id="websiteLabel" class="form-label">
Company Name
<span class="text-danger">*</span>
</label>
<div class="form-group">
<input class="form-control" type="text" name="company_name" value="{{$recruiterEdit['company_name']}}" placeholder="Enter company name" aria-label="Enter company name" required="" aria-describedby="websiteLabel" data-msg="Password enter a valid website" data-error-class="u-has-error" data-success-class="u-has-success">
@error('company_name')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>
</div>
</div>







</div>
<div class="row">


<div class="col-sm-6 mb-2">
<div class="js-form-message">
<label id="organizationLabel" class="form-label">
City	
<span class="text-danger">*</span>
</label>
<div class="form-group">
<input type="text" class="form-control" name="job_city" value="{{$recruiterEdit['job_city']}}" placeholder="Enter the Job City " aria-label="Enter the Job City" required="" aria-describedby="organizationLabel" data-msg="Please enter job city" data-error-class="u-has-error" data-success-class="u-has-success">
@error('job_city')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>
</div>
</div>

<div class="col-sm-6 mb-2">
<div class="js-form-message">
<label id="organizationLabel" class="form-label">
company logo
<span class="text-danger">*</span>
</label>
<div class="form-group">
    <input type="file" class="form-control" id="exampleInputEmail1" name="company_logo" >
    {{-- <div>{{$errors->first('company_logo')}}</div>
    @error('company_logo')
<span class="text-danger">{{ $message }}</span>
@enderror --}}
</div>
</div>
</div>
</div>

<div class="row">

<div class="col-sm-6 mb-2">
<div class="js-form-message">
<label id="emailLabel" class="form-label">
Email
<span class="text-danger">*</span>
</label>
<div class="form-group">
<input class="form-control" type="text" name="email" value="{{$recruiterEdit['email']}}" placeholder="Enter your Email" aria-label="Enter your Email" required="" aria-describedby="phoneNumberLabel" data-msg="Enter your Email" data-error-class="u-has-error" data-success-class="u-has-success">
@error('email')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>
</div>
</div>

<div class="col-sm-6 mb-2">
<div class="js-form-message">
<label id="phoneNumberLabel" class="form-label">
Phone Number
<span class="text-danger">*</span>
</label>
<div class="form-group">
<input class="form-control" type="text" name="phone" value="{{$recruiterEdit['phone']}}" placeholder="Enter your phone number" aria-label="Enter your phone number" required="" aria-describedby="phoneNumberLabel" data-msg="Please enter a valid phone number" data-error-class="u-has-error" data-success-class="u-has-success">
@error('phone')
<span class="text-danger">{{ $message }}</span>
@enderror
</div>
</div>
</div> 

</div>


<div class="mb-3 text-right">
<button type="submit" class="btn btn-outline-success">Cancel</button>
<button type="submit" class="btn btn-success">Update</button>
</div>
</main>
</div>

</div>
</div>

@endsection