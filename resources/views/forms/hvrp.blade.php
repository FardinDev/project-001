@extends('layouts.main')
@section('content')

<div>



    <form id="regForm" action="http://cp.mcc.com.bd/herbarium/set_applicant_visit" method="POST">
        <h1>Herbarium Visit/Reasearch Permission</h1>
        <!-- One "tab" for each step in the form: -->
        <div class="tab">
            <input type="hidden" name="appkey" value="bnh_mcc&ltd$@">
            <input type="hidden" name="mobile" value="01795514777">
            <p><input placeholder="Student/Researcher's Name*" oninput="this.className = ''" name="applicant_name"></p>
            <p><input placeholder="Name of Institution" oninput="this.className = ''" name="institute_name"></p>
            <p><input placeholder="Adress*" oninput="this.className = ''" name="applicant_address"></p>
            <p><input placeholder="Mobile Number*" oninput="this.className = ''" name="applicant_mobile"></p>
            <p><input placeholder="Phone Number" oninput="this.className = ''" name="applicant_phone"></p>
            <p><input placeholder="Email" oninput="this.className = ''" name="applicant_email"></p>
            <div style="text-align: left; margin-left: 45%">
                <label class="container radio-inline">Visit
                    <input type="radio" id="radio" name="applicant_purpose" value="visit">
                    <span class="checkmark"></span>
                </label>
                <label class="container radio-inline">Research
                    <input type="radio" id="radio2" name="applicant_purpose" value="research">
                    <span class="checkmark"></span>
                </label>

            </div>
        </div>


        <div class="tab">
            <p>visit</p>
            <p><input placeholder="Name of Institution" oninput="this.className = ''" name="fname"></p>

            <p><input placeholder="Collection date" oninput="this.className = ''" id="datepicker"></p>

            <p><input placeholder="Time of Visit*" oninput="this.className = ''" name="fname"></p>
            <p><input placeholder="Number of Visitors*" oninput="this.className = ''" name="lname"></p>
            <p><input placeholder="Upazila*" oninput="this.className = ''" name="lname"></p>
            <p><input placeholder="Post Office*" oninput="this.className = ''" name="lname"></p>
            <p><input placeholder="District" oninput="this.className = ''" name="lname"></p>
            <label for=""> Forwarded Application Of Head of The Department*</label>
            <p><input type="file" name="" id=""></p>

            <div style="overflow:auto;">
                    <div style="float:right;">
        
                        <button type="submit">submit</button>
                    </div>
                    
                </div>

        </div>


        <div class="tab">
            <p>research</p>
            
                <p><input placeholder="research_level" oninput="this.className = ''" name="research_level"></p>
                <p><input placeholder="Collection date" oninput="this.className = ''" id="datepicker1" name="visit_date"></p>
                <p><input placeholder="research_topic" oninput="this.className = ''" name="research_topic"></p>
                <p><input placeholder="research_expiration" oninput="this.className = ''" name="research_expiration"></p>
                <div style="overflow:auto;">
                        <div style="float:right;">
            
                            <button type="submit">submit</button>
                        </div>
                        
                    </div>
            </div>


        <div style="overflow:auto;">
            <div style="float:right;">

                <button type="button" id="nextBtn" onclick="next()">Next</button>
            </div>
            <div style="float:right;">

                <button type="button" id="prevBtn" onclick="next()">Prev</button>
            </div>
        </div>

        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px; ">
            <span class="step"></span>
            <span class="step"></span>


        </div>
    </form>
</div>
<script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the crurrent tab

       


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
          if (n == (x.length - 2)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
            document.getElementById("prevBtn").style.display = "none";
    
          } else {
            document.getElementById("prevBtn").style.display = "none";
    
            document.getElementById("nextBtn").innerHTML = "Next";
          }
          //... and run a function that will display the correct step indicator:
          fixStepIndicator(n)
        }
    
        function next() {
            
          if(document.getElementById("radio").checked == true){

             var n = 1;

          }
          else if(document.getElementById("radio2").checked == true){

              var n = 2;

          }

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
            document.getElementById("regForm").submit();
            return false;
          }
          // Otherwise, display the correct tab:
          document.getElementById("nextBtn").style.display = "none";

          showTab(currentTab);
        }
    
        function validateForm() {
          // This function deals with validation of the form fields
          var x, y, i, valid = true;
          // x = document.getElementsByClassName("tab");
          // y = x[currentTab].getElementsByTagName("input");
          // // A loop that checks every input field in the current tab:
          // for (i = 0; i < y.length; i++) {
          //     // If a field is empty...
          //     if (y[i].value == "") {
          //         // add an "invalid" class to the field:
          //         y[i].className += " invalid";
          //         // and set the current valid status to false
          //         valid = false;
          //     }
          // }
          // // If the valid status is true, mark the step as finished and valid:
          // if (valid) {
          //     document.getElementsByClassName("step")[currentTab].className += " finish";
          // }
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