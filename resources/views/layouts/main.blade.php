<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
  crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('css/main.css')}}">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns"
  crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
{{-- <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script> --}}

{{-- <script src="http://maps.googleapis.com/maps/api/js?sensor=false&amp;libraries=places"></script> --}}
<script type="text/javascript" src='https://maps.googleapis.com/maps/api/js?key=AIzaSyBcVQO3dxqUFjgjyWh51BKqD1Bj87-TgV8&amp;libraries=places'></script>

<script src="{{asset('js/locationpicker.jquery.js')}}"></script>


</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #4CAF50;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01"
      aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <a class="navbar-brand" style="color:#ffffff" href="{{url('/')}}">BNH</a>
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" style="color:#ffffff" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">

        </li>
        {{-- <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li> --}}
      </ul>
      <ul class="navbar-nav mt-2 mt-lg-0">
        <li class="nav-item">
          <a class="nav-link" style="color:#ffffff" href="{{url('/notification')}}">
            <h4><i class="fas fa-bell 3x"></i></h4>

          </a>
        </li>

        <li class="nav-item">


        </li>

      </ul>
    </div>
  </nav>

  @yield('content')


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
      if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Submit";
        document.getElementById("prevBtn").style.display = "none";

      } else {
        document.getElementById("prevBtn").style.display = "none";

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
        document.getElementById("regForm").submit();
        return false;
      }
      // Otherwise, display the correct tab:
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

</body>

</html>