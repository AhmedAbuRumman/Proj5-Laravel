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
            <form id="regform1" class="js-validate" novalidate="novalidate" method="post" action="/update/{{Auth::user()->id}}" enctype="multipart/form-data">
               @csrf
               @method('POST')
               <div class="tab">
                  <div class="shadow-sm rounded bg-white mb-3">
                     <div class="box-title border-bottom p-3">
                        <h6 class="m-0">Edit Basic Info</h6>
                     </div>
                     <div class="box-body p-3">




                        <div class="row">
                           <div class="col-sm-6 mb-2">
                              <div class="js-form-message">

                                 <label id="nameLabel" class="form-label">
                                    Full Name
                                    <span class="text-danger">*</span>
                                 </label>
                                 <div class="form-group">
                                    <input type="text" class="form-control" name="name" value="" placeholder="" aria-label="Enter your name" required="" aria-describedby="nameLabel" data-msg="Please enter your name." data-error-class="u-has-error" data-success-class="u-has-success">
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


                        </div>

                     </div>
                  </div>
               </div>

               <div class="tab">
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





                           <div class="col-sm-6 mb-4">

                              <label for="cc-payment" class="control-label mb-1"> Select Category</label>
                              <select name="category" class="form-control" data-msg="Please select Job Category." data-error-class="u-has-error" data-success-class="u-has-success">
                                 <option value="">Select Category</option>

                                 @foreach($categories as $category)
                                 <option value={{$category->id}}>{{$category->job_cat}}</option>
                                 @endforeach

                              </select>

                           </div>
                        </div>

                        <div class="row">
                           <div class="col-sm-6 mb-4">
                              <label for="cc-payment" class="control-label mb-1">Select Major</label>
                              <select name="major" class="form-control" data-msg="Please select Job Category." data-error-class="u-has-error" data-success-class="u-has-success">
                                 <option value="">Select Major</option>



                              </select>
                           </div>
                           <div class="col-sm-6 mb-4">
                              <div id=skill>
                                 <label for="cc-payment" class="control-label mb-1">Select Skill</label>

                                 <select multiple name="skill[]" class="form-control " data-msg="Please select Job Category." data-error-class="u-has-error" data-success-class="u-has-success">
                                    <option selected hidden>Select Skill</option>

                                 </select>

                                 <!-- <label class="col-sm-2">
                                    Multiple Select
                                 </label>

                                 <div class="col-sm-10">
                                    <select multiple="multiple" class="multiple-select">
                                       <option value="1">January</option>
                                       <option value="2">February</option>
                                       <option value="3">March</option>
                                       <option value="4">April</option>
                                       <option value="5">May</option>
                                       <option value="6">June</option>
                                       <option value="7">July</option>
                                       <option value="8">August</option>
                                       <option value="9">September</option>
                                       <option value="10">October</option>
                                       <option value="11">November</option>
                                       <option value="12">December</option>
                                    </select>
                                 </div> -->

                              </div>
                           </div>
                        </div>
                        <div class="row">


                           <div class="col-sm-6 mb-4">
                              <label id="companyLabel" class="form-label">GPA Degree</label>

                              <div class="input-group">
                                 <input type="text" class="form-control" name="degree" placeholder="degree" aria-label="Enter your company title" aria-describedby="companyLabel">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="tab">
                  <div class="shadow-sm rounded bg-white mb-3">
                     <div class="box-title border-bottom p-3">
                        <h6 class="m-0">Experience</h6>
                     </div>
                     <div class="box-body p-3">
                        <div class="row">
                           <div class="col-sm-6 mb-4">
                              <label id="FROM" class="form-label">Job Title</label>
                              <div class="input-group">
                                 <input type="text" class="form-control" name="job_title" placeholder="Job Title" aria-label="FROM" aria-describedby="FROM">
                              </div>

                           </div>
                           <div class="col-sm-6 mb-4">
                              <label id="TO" class="form-label">Company Name</label>
                              <div class="input-group">
                                 <input type="text" class="form-control" name="company_name" placeholder="Company Name">
                              </div>
                           </div>
                        </div>
                     </div>

                     <!-- <div class="mb-3 text-right">
                        <button type="submit" class="btn btn-outline-success">Cancel</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                     </div> -->

                  </div>
               </div>
               <div class="tab">
                  <div class="shadow-sm rounded bg-white mb-3">
                     <div class="box-title border-bottom p-3">
                        <h6 class="m-0">Projects</h6>
                     </div>
                     <div class="box-body p-3">
                        <div class="row">
                           <div class="col-sm-6 mb-4">
                              <label id="FROM" class="form-label">Description</label>
                              <div class="input-group">
                                 <input type="text" class="form-control" name="desc" placeholder="Job Title" aria-label="FROM" aria-describedby="FROM">
                              </div>

                           </div>
                           <div class="col-sm-6 mb-4">
                              <label id="TO" class="form-label">Github Link</label>
                              <div class="input-group">
                                 <input type="text" class="form-control" name="github_link" placeholder="Company Name">
                              </div>
                           </div>
                        </div>
                     </div>

                     <!-- <div class="mb-3 text-right">
                        <button type="submit" class="btn btn-outline-success">Cancel</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                     </div> -->

                  </div>
               </div>
               <div class="tab">
                  <div class="shadow-sm rounded bg-white mb-3">
                     <div class="box-title border-bottom p-3">
                        <h6 class="m-0">Upload Files</h6>
                     </div>
                     <div class="box-body p-3">
                        <div class="row">
                           <div class="col-sm-6 mb-4">
                              <label id="FROM" class="form-label">Upload Image</label>
                              <div class="input-group">
                                 <input type="file" class="form-control" name="image" placeholder="upload image" aria-label="FROM" aria-describedby="FROM">
                              </div>

                           </div>
                           <div class="col-sm-6 mb-4">
                              <label id="TO" class="form-label">Upload Video</label>
                              <div class="input-group">
                                 <input type="file" class="form-control" name="video" placeholder="Upload video">
                              </div>
                           </div>
                        </div>
                     </div>

                     <!-- <div class="mb-3 text-right">
                        <button type="submit" class="btn btn-outline-success">Cancel</button>
                        <button type="submit" class="btn btn-success">Submit</button>
                     </div> -->

                  </div>
               </div>


               <div style="overflow:auto;">
                  <div style="float:right;">
                     <button type="button" id="prevBtn" class="btn btn-outline-success" onclick="nextPrev(-1)">Previous</button>
                     <button type="button" id="nextBtn" class="btn btn-success" onclick="nextPrev(1)">Next</button>
                  </div>
               </div>
               <!-- Circles which indicates the steps of the form: -->
               <div style="text-align:center;margin-top:40px;">
                  <span class="step"></span>
                  <span class="step"></span>
                  <span class="step"></span>
                  <span class="step"></span>
                  <span class="step"></span>


               </div>
            </form>
         </main>
      </div>
   </div>




   <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
   <script>
      $(function() {
         $('.multiple-select').multipleSelect()
      })
   </script>

   <script>
      $(document).ready(function() {

         $('select[name="category"]').on('change', function() {

            // console.log("hi")
            var category_id = $(this).val();

            if (category_id) {

               $.ajax({

                  url: '/showMajor/' + category_id,
                  type: 'GET',
                  dataType: 'json',
                  success: function(data) {
                     console.log(data);

                     $('select[name="major"]').empty();
                     $('select[name="major"]').append('<option selected hidden> Select Major  </option>');
                     $.each(data, function(key, value) {

                        $('select[name="major"]').append('<option value="' + key + '">' + value + '</option>');


                     });
                  }



               })
            }

         });

         $('select[name="major"]').on('change', function() {

            // console.log("hi")
            var major_id = $(this).val();

            if (major_id) {

               $.ajax({

                  url: '/showSkill/' + major_id,
                  type: 'GET',
                  dataType: 'json',
                  success: function(data) {
                     console.log(data);
                     $.each(data, function(key, value) {

                        $('select[name="skill[]"]').append('<option value="' + key + '">' + value + '</option>');


                     });
                  }



               })
            }

         });

      });

      var expanded = false;

      $('#skill').on('click', function() {
         var checkboxes = document.getElementById("checkboxes");
         if (!expanded) {
            checkboxes.style.display = "block";
            expanded = true;
         } else {
            checkboxes.style.display = "none";
            expanded = false;
         }
      })

      var currentTab = 0; // Current tab is set to be the first tab (0)
      showTab(currentTab); // Display the current tab

      function showTab(n) {
         // This function will display the specified tab of the form...
         var x = document.getElementsByClassName("tab");
         x[n].style.display = "block";
         //... and fix the Previous/Next buttons:
         if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
         } else {
            document.getElementById("prevBtn").style.display = "inline";
         }
         if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
            //   $("#nextBtn").attr("type", "submit");
         } else {
            document.getElementById("nextBtn").innerHTML = "Next";
         }
         //... and run a function that will display the correct step indicator:
         fixStepIndicator(n)
      }

      function nextPrev(n) {
         // This function will figure out which tab to display
         var x = document.getElementsByClassName("tab");
         // Exit the function if any field in the current tab is invalid:
         if (n == 1 && !validateForm()) return false;
         // Hide the current tab:
         x[currentTab].style.display = "none";
         // Increase or decrease the current tab by 1:
         currentTab = currentTab + n;
         // if you have reached the end of the form...
         if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("regform1").submit();
            return false;
         }
         // Otherwise, display the correct tab:
         showTab(currentTab);
      }

      function validateForm() {
         // This function deals with validation of the form fields
         var x, y, i, valid = true;
         x = document.getElementsByClassName("tab");
         y = x[currentTab].getElementsByTagName("input");
         // A loop that checks every input field in the current tab:
         for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
               // add an "invalid" class to the field:
               y[i].className += " invalid";
               // and set the current valid status to false
               valid = false;
            }
         }
         // If the valid status is true, mark the step as finished and valid:
         if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
         }
         return valid; // return the valid status
      }

      function fixStepIndicator(n) {
         // This function removes the "active" class of all steps...
         var i, x = document.getElementsByClassName("step");
         for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
         }
         //... and adds the "active" class on the current step:
         x[n].className += " active";
      }
   </script>

   @endsection