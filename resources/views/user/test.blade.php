@extends('main')

@section('section1')

<div class="py-5">
   <div class="container">
      <div class="row">

         <aside class="col-md-4">
            <div class="box mb-3 shadow-sm rounded bg-white profile-box text-center">
               <div class="py-4 px-3 border-bottom">
                  <img src='' class="img-fluid mt-2 rounded-circle" style="width:150px;" alt="Responsive image">

                  <h5 class="font-weight-bold text-dark mb-1 mt-4">{{$edit->name}}</h5>
                  <p class="mb-0 text-muted">{{$edit->ex_job_title}}r</p>
               </div>

            </div>
         </aside>
         <main class="col-md-8">
            <form class="js-validate" novalidate="novalidate" method="post" action="/update/{Auth::user()->id}" enctype="multipart/form-data">
               @csrf
               @method('POST')
               <div class="shadow-sm rounded bg-white mb-3">
                  <div class="box-title border-bottom p-3">
                     <h6 class="m-0">Edit Basic Info</h6>
                  </div>
                  <div class="box-body p-3">

                  


                     <div class="row">
                        <div class="col-sm-6 mb-2">
                           <div class="js-form-message">
                              <label id="nameLabel" class="form-label">
                                 First Name
                                 <span class="text-danger">*</span>
                              </label>
                              <div class="form-group">
                                 <input type="text" class="form-control" name="first_name" value="" placeholder="" aria-label="Enter your name" required="" aria-describedby="nameLabel" data-msg="Please enter your name." data-error-class="u-has-error" data-success-class="u-has-success">
                              </div>
                           </div>
                        </div>


                        <div class="col-sm-6 mb-2">
                           <div class="js-form-message">
                              <label id="usernameLabel" class="form-label">
                                 last Name
                                 <span class="text-danger">*</span>
                              </label>
                              <div class="form-group">
                                 <input type="text" class="form-control" name="last_name" value="" placeholder="" aria-label="Enter your username" required="" aria-describedby="usernameLabel" data-msg="Please enter your username." data-error-class="u-has-error" data-success-class="u-has-success">
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="row">
                        <div class="col-sm-6 mb-2">
                           <div class="js-form-message">
                              <label id="emailLabel" class="form-label">
                                 Email address
                                 <span class="text-danger">*</span>
                              </label>
                              <div class="form-group">
                                 <input type="email" class="form-control" name="email" value="{{$edit->email}}" placeholder="" aria-label="Enter your email address" required="" aria-describedby="emailLabel" data-msg="Please enter a valid email address." data-error-class="u-has-error" data-success-class="u-has-success">
                              </div>
                           </div>
                        </div>

                        <div class="col-sm-6 mb-2">
                           <div class="js-form-message">
                              <label id="phoneNumberLabel" class="form-label">
                                 Phone number
                                 <span class="text-danger">*</span>
                              </label>
                              <div class="form-group">
                                 <input class="form-control" type="tel" name="number" value="+91 85680 79956" placeholder="Enter your phone number" aria-label="Enter your phone number" required="" aria-describedby="phoneNumberLabel" data-msg="Please enter a valid phone number" data-error-class="u-has-error" data-success-class="u-has-success">
                              </div>
                           </div>
                        </div>
                     </div>

                  </div>
               </div>


               <div class="shadow-sm rounded bg-white mb-3">
                  <div class="box-title border-bottom p-3">
                     <h6 class="m-0">Education</h6>
                  </div>
                  <div class="box-body p-3">
                     <div class="row">
                        <div class="col-sm-6 mb-2">
                           <div class="js-form-message">
                              <label id="FROM" class="form-label">University</label>
                              <div class="input-group">
                                 <input type="text" class="form-control" name="university" placeholder="University" aria-label="FROM" aria-describedby="FROM">
                              </div>
                           </div>
                        </div>




                        <div class="col-sm-6 mb-4" style="display:none">
                           <label for="cc-payment" class="control-label mb-1"> Select Category</label>
                           <select name="category_id" class="form-control" data-msg="Please select Job Category." data-error-class="u-has-error" data-success-class="u-has-success">
                              <option value="">Select Category</option>

                              @foreach($categories as $category)
                              <option value={{$category->id}}>{{$category->job_cat}}</option>
                              @endforeach

                           </select>
                        </div>
                     </div>

                     <div class="row" style="display:none">
                        <div class="col-sm-6 mb-4" id="major">
                           <label for="cc-payment" class="control-label mb-1">Select Major</label>
                           <select name="major_id" class="form-control" data-msg="Please select Job Category." data-error-class="u-has-error" data-success-class="u-has-success">
                              <option value="">Select Major</option>

                              @foreach($majors as $major)
                              <option value={{$major->id}}>{{$major->major_name}}</option>
                              @endforeach

                           </select>
                        </div>
                        <div class="col-sm-6 mb-4" id="skill">
                           <label for="cc-payment" class="control-label mb-1">Select Skill</label>
                           <select name="skill_id" class="form-control" data-msg="Please select Job Category." data-error-class="u-has-error" data-success-class="u-has-success">
                              <option value="">Select Skill</option>

                              @foreach($skills as $skill)
                              <option value={{$skill->id}}>{{$skill->skill_name}}</option>
                              @endforeach

                           </select>
                        </div>

                     </div>
                     <div class="row" style="display:none">
                        
                        
                        <div class="col-sm-6 mb-4">
                           <label id="companyLabel" class="form-label">GPA Degree</label>

                           <div class="input-group">
                              <input type="text" class="form-control" name="degree" placeholder="degree" aria-label="Enter your company title" aria-describedby="companyLabel">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="shadow-sm rounded bg-white mb-3">
                  <div class="box-title border-bottom p-3">
                     <h6 class="m-0">Experience</h6>
                  </div>
                  <div class="box-body p-3">
                     <div class="row">
                        <div class="col-sm-6 mb-4">
                           <label id="FROM" class="form-label">Job Title</label>
                           <div class="input-group">
                              <input type="text" class="form-control" name="ex_job_title" placeholder="Job Title" aria-label="FROM" aria-describedby="FROM">
                           </div>

                        </div>
                        <div class="col-sm-6 mb-4">
                           <label id="TO" class="form-label">Company Name</label>
                           <div class="input-group">
                              <input type="text" class="form-control" name="ex_company_name" placeholder="Company Name">
                           </div>
                        </div>
                     </div>

                     <div class="mb-3 text-right">
                        <button type="submit" class="btn btn-outline-success">Cancel</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                     </div>

                  </div>
               </div>
            </form>
         </main>
      </div>
   </div>
   </form>





   
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $('#category_id').change(function() {
        $('#major_id, #skill_id').val("");
        if($('#category_id option:selected').text() == "it") {
            $('#skill_id').html('<option value="" selected>Choose Skill</option>');
            $('#major, #skill').show(150);
        } else {
            $('#major, #skill').hide(150);
        }
    });
    $('#major_id').change(function() {
        var $skill = $('#skill_id');
        $.ajax({
            url: "{edit/{user}}",
            data: {
                major_id: $(this).val()
            },
            success: function(data) {
                $skill.html('<option value="" selected>Choose skill</option>');
                $.each(data, function(id, value) {
                    $skill.append('<option value="'+id+'">'+value+'</option>');
                });
                $('#skill').show(150);
            }
        });
    });
});
</script>


   @endsection


   