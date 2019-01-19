@extends('layouts.main')
@section('content')
<div>



    <form id="regForm" action="{{asset('store')}}" method="POST">

        {{ csrf_field() }}

        
        <h1>Specimen Information</h1>
        <!-- One "tab" for each step in the form: -->
        <div class="tab">


            <div style="text-align: left; margin-left: 45%">
                <label class="container radio-inline">Tree
                    <input type="radio" checked="checked" name="pid_type" value="tree">
                    <span class="checkmark"></span>
                </label>
                <label class="container radio-inline">Shrub
                    <input type="radio" name="pid_type" value="shurb">
                    <span class="checkmark"></span>
                </label>
                <label class="container radio-inline">Herb
                    <input type="radio" name="pid_type" value="herb">
                    <span class="checkmark"></span>
                </label>
                <label class="container radio-inline">Climber/Creeper
                    <input type="radio" name="pid_type" value="climber/creeper">
                    <span class="checkmark"></span>
                </label>
            </div>


            <input type="hidden" name="id" value="8">
            <input type="hidden" name="user_id" value="8">
            <input type="hidden" name="appkey" value="bnh_mcc&ltd$@">
            <input type="hidden" name="mobile" value="01795514777">
            <input type="hidden" name="language_status" value=2>
            <input type="hidden" name="is_identification" value=1>


            <p><input placeholder="Local Name" oninput="this.className = ''" name="pid_local_name"></p>
            <p><input placeholder="Leaf Description" oninput="this.className = ''" name="pid_details"></p>
            <p><input placeholder="Flower Color" oninput="this.className = ''" name="pid_flower_details"></p>
            <p><input placeholder="Fruit Description" oninput="this.className = ''" name="pid_fruto_details"></p>
            <p><input placeholder="Ethnobotanical Use(s)" oninput="this.className = ''" name="pid_folk_use"></p>
            <p><input placeholder="Habitat" oninput="this.className = ''" name="pid_abstention"></p>
            <label for="image">Attach Image</label>
            <p><input type="file" name="pid_image"></p>
            <p><input type="file" name="pid_file"></p>
        </div>

        <div class="tab">
            <h5>Location</h5>


            <p><input type="text" id="us2-address" name="pid_collect_google_address"></p>
            <div id="us2"></div>

            <p>
                <input type="hidden" id="us2-lat" />
            </p>
            <p>
                <input type="hidden" id="us2-lon" />


            </p>


            <script>

                $('#us2').locationpicker({
                    enableAutocomplete: true,
                    enableReverseGeocode: true,
                    radius: 0,
                    inputBinding: {
                        latitudeInput: $('#us2-lat'),
                        longitudeInput: $('#us2-lon'),
                        radiusInput: $('#us2-radius'),
                        locationNameInput: $('#us2-address')
                    },
                    onchanged: function (currentLocation, radius, isMarkerDropped) {
                        var addressComponents = $(this).locationpicker('map').location.addressComponents;

                        updateControls(addressComponents); //Data
                    }
                });

                function updateControls(addressComponents) {

                }




            </script>


        </div>


        <div class="tab">
            <p><input placeholder="Collector's Name*" oninput="this.className = ''" name="pid_collector_name"></p>
            <p><input placeholder="Purpose of Identification*" oninput="this.className = ''" name="pid_collect_objective"></p>
            <p><input placeholder="Collection date" oninput="this.className = ''" id="datepicker" name="pid_collect_date"></p>
            <label for="image">Plage of Collection*</label>
            <p><input placeholder="Village/Mojja*" oninput="this.className = ''" name="pid_collect_place_village"></p>
            <p><input placeholder="Upazila*" oninput="this.className = ''" name="pid_collect_place_union"></p>
            <p><input placeholder="Thana*" oninput="this.className = ''" name="pid_collect_place_thana"></p>
            <p><input placeholder="Post Office*" oninput="this.className = ''" name="pid_collect_place_postoffice"></p>
            <p><input placeholder="District" oninput="this.className = ''" name="pid_collect_place_district"></p>
            <label for="image">Medium of Sending Specimen(s)</label>
            <p>
                <div style="text-align: left; margin-left: 45%">
                    <label class="container radio-inline">Physically
                        <input type="radio" checked="checked" name="pid_send_media" value="physically">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container radio-inline">Courier
                        <input type="radio" name="pid_send_media" value="courier">
                        <span class="checkmark"></span>
                    </label>
                    <label class="container radio-inline">Post
                        <input type="radio" name="pid_send_media" value="post">
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
            <span class="step"></span>

        </div>
    </form>
</div>

<script> 


$( document ).ready(function() {
    $( "#datepicker" ).datepicker({ dateFormat: 'yy-mm-dd' });
});


 

</script>
@endsection