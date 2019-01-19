@extends('layouts.main')
@section('content')


<div>

    <form id="regForm" action="/action_page.php">
        <h1>Accession Number Verrification*</h1>
        <!-- One "tab" for each step in the form: -->
        <div class="tab">

            <p><input placeholder="Accession Number" oninput="this.className = ''" name="fname"></p>
            <label for="">or</label>
            <p><input placeholder="Scientific Name" oninput="this.className = ''" name="fname"></p>
            <div style="overflow:auto;">
                <div style="float:right;">

                    <button type="submit">Search</button>
                </div>

            </div>
            {{-- <div style="overflow:auto;">
                <div style="float:right;">

                    <button type="button" id="nextBtn" onclick="nextPrev(1)">Search</button>
                </div>
                <div style="float:right;">

                    <button type="button" id="prevBtn" onclick="nextPrev(1)">Prev</button>
                </div>
            </div> --}}


    </form>
</div>
@endsection