@extends('layouts.main')
@section('content')
<div>



    <form id="regForm" action="/action_page.php">
        <h1>Specimen Information</h1>
        <!-- One "tab" for each step in the form: -->
        <div class="tab">
            <div style="text-align: left; margin-left: 45%">
                <label class="container radio-inline">Tree
                    <input type="radio" checked="checked" name="radio">
                    <span class="checkmark"></span>
                </label>
                <label class="container">Shrub
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
                <label class="container">Herb
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
                <label class="container">Climber/Creeper
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
            </div>
            <p><input placeholder="Scientific Name*" oninput="this.className = ''" name="fname"></p>
            <p><input placeholder="Local Name" oninput="this.className = ''" name="fname"></p>
            <p><input placeholder="Family*" oninput="this.className = ''" name="fname"></p>
            <p><input placeholder="Leaf Description" oninput="this.className = ''" name="fname"></p>
            <p><input placeholder="Flower Color" oninput="this.className = ''" name="lname"></p>
            <p><input placeholder="Fruit Description" oninput="this.className = ''" name="lname"></p>
            <p><input placeholder="Ethnobotanical Use(s)" oninput="this.className = ''" name="lname"></p>
            <p><input placeholder="Habitat" oninput="this.className = ''" name="lname"></p>
            <label for="image">Attach Image</label>
            <p><input type="file"></p>
            <p><input type="file"></p>




        </div>

        <div class="tab">
            <p><input placeholder="Collector's Name*" oninput="this.className = ''" name="fname"></p>
            <p><input placeholder="Purpose of Accession Number*" oninput="this.className = ''" name="fname"></p>
            <p><input placeholder="Collection date" oninput="this.className = ''" id="datepicker"></p>
            <label for="image">Plage of Collection*</label>
            <p><input placeholder="Village/Mojja*" oninput="this.className = ''" name="fname"></p>
            <p><input placeholder="Upazila*" oninput="this.className = ''" name="lname"></p>
            <p><input placeholder="Upazila*" oninput="this.className = ''" name="lname"></p>
            <p><input placeholder="Post Office*" oninput="this.className = ''" name="lname"></p>
            <p><input placeholder="District" oninput="this.className = ''" name="lname"></p>
            <label for="image">Medium of Sending Specimen(s)</label>
            <p>
                <div style="text-align: left; margin-left: 45%">
                    <label class="container">Physically
                        <input type="radio" checked="checked" name="radio">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">Courier
                        <input type="radio" name="radio">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container">Post
                        <input type="radio" name="radio">
                        <span class="checkmark"></span>
                    </label>
                </div>
            </p>



        </div>
        <div style="overflow:auto;">
            <div style="float:right;">

                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
            <div style="float:right;">

                <button type="button" id="prevBtn" onclick="nextPrev(1)">Prev</button>
            </div>
        </div>

        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px; ">
            <span class="step"></span>
            <span class="step"></span>

        </div>
    </form>
</div>
@endsection