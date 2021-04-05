@extends('main')

@section('section1')

<div class="py-5">
    <div class="container">
        <div class="row">

            <main class="col-md-12">
                <div class="shadow-sm rounded bg-white mb-3">
                    <div class="box-title border-bottom p-3">
                        <h6 class="m-0">Add New Job Post</h6>

                    </div>
                    <div class="box-body p-3">
                        <form method="POST" action="view_post" enctype="multipart/form-data">
                            <div class="row">
                                @csrf



                                <div class="col-sm-6 mb-2">
                                    <div class="js-form-message">
                                        <label id="usernameLabel" class="form-label">
                                            Job Tittle
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="job_title" value="" placeholder="Enter the job title" aria-label="Enter the job title" required="" aria-describedby="usernameLabel" data-msg="Please enter the job title." data-error-class="u-has-error" data-success-class="u-has-success">
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
                                            <input type="textarea" class="form-control" name="job_desc" value="" placeholder="Enter the Job Description" aria-label="Enter the Job Description" required="" aria-describedby="nameLabel" data-msg="Please Enter the Job Description." data-error-class="u-has-error" data-success-class="u-has-success">
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

                                                @foreach($categories as $categorie )
                                                <option value={{$categorie->id}}>{{$categorie->job_cat}}</option>
                                                @endforeach

                                            </select>
                                            @error('category')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 mb-2">
                                    <div class="js-form-message">
                                        <label id="phoneNumberLabel" class="form-label">
                                            Job Major
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="form-group">
                                            <select name="major_id" class="form-control" data-msg="Please select Job Category." data-error-class="u-has-error" data-success-class="u-has-success">
                                                <option value="">Select Major</option>

                                                @foreach($majors as $major )
                                                <option value={{$major->id}}>{{$major->major_name}}</option>
                                                @endforeach

                                            </select>
                                            @error('major')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>








                            </div>
                            <div class="row">

                                <div class="col-sm-6 mb-2">
                                    <div class="js-form-message">
                                        <label id="websiteLabel" class="form-label">
                                            Company Name
                                            <span class="text-danger">*</span>
                                        </label>
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="company_name" value="" placeholder="Enter company name" aria-label="Enter company name" required="" aria-describedby="websiteLabel" data-msg="Password enter a valid website" data-error-class="u-has-error" data-success-class="u-has-success">
                                            @error('company_name')
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
                                            <input type="file" class="form-control" id="exampleInputphone1" name="company_logo">
                                            {{-- <div>{{$errors->first('company_logo')}}
                                        </div>
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
                                <label id="phoneLabel" class="form-label">
                                    phone
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="phone" value="" placeholder="Enter your phone" aria-label="Enter your phone" required="" aria-describedby="phoneNumberLabel" data-msg="Enter your phone" data-error-class="u-has-error" data-success-class="u-has-success">
                                    @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 mb-2">
                            <div class="js-form-message">
                                <label id="organizationLabel" class="form-label">
                                    City
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="job_city" value="" placeholder="Enter the Job City " aria-label="Enter the Job City" required="" aria-describedby="organizationLabel" data-msg="Please enter job city" data-error-class="u-has-error" data-success-class="u-has-success">
                                    @error('job_city')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="row">

                        <div class="col-sm-6 mb-2">
                            <div class="js-form-message">
                                <label id="phoneLabel" class="form-label">
                                        Email
                                    <span class="text-danger">*</span>
                                </label>
                                <div class="form-group">
                                    <input class="form-control" type="text" name="email" value="" placeholder="Enter your email" aria-label="Enter your email" required="" aria-describedby="emailNumberLabel" data-msg="Enter your email" data-error-class="u-has-error" data-success-class="u-has-success">
                                    @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                       


                    </div>
                    <div class="mb-3 text-right">
                        <button type="submit" class="btn btn-outline-success">Cancel</button>
                        <button type="submit" class="btn btn-success">Add</button>
                    </div>
            </main>
        </div>

    </div>
</div>

</form>


<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {

        $('select[name="category_id"]').on('change', function() {

            // console.log("hi")
            var category_id = $(this).val();

            if (category_id) {

                $.ajax({

                    url: '/showMajor/' + category_id,
                    type: 'GET',
                    dataType: 'json',
                    success: function(data) {
                        console.log(data);

                        $('select[name="major_id"]').empty();
                        $('select[name="major_id"]').append('<option selected hidden> Select Major  </option>');
                        $.each(data, function(key, value) {

                            $('select[name="major_id"]').append('<option value="' + key + '">' + value + '</option>');


                        });
                    }



                })
            }

        });



    });
</script>
@endsection