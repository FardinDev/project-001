@extends('layouts.main')
@section('content')

  <div class="container">

    <div class="row">

      <div class="card" style="width: 18rem;">
        <a href="{{asset("/ipsi")}}"> 
          <img class="card-img-top" src="{{asset("/images/plant.jpeg")}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Indegenous Plant Specimen(s) Identification</h5>
          
          {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
        </div>
       </a>
      </div>

      <div class="card" style="width: 18rem;">
        <a href="{{asset("/anr")}}"> 
          <img class="card-img-top" src="{{asset("/images/plant.jpeg")}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Accession Number Reciept</h5>
          
          {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
        </div>
        </a>
      </div>

      <div class="card" style="width: 18rem;">
        <a href="{{asset("/hvrp")}}"> 
          <img class="card-img-top" src="{{asset("/images/plant.jpeg")}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Herbarium Visit/Reasearch Permission</h5>
          
          {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
        </div>
       </a>
      </div>

    </div>


    <div class="row">

      <div class="card" style="width: 18rem;">
        <a href="{{asset("/anv")}}"> 
        <img class="card-img-top" src="{{asset("/images/plant.jpeg")}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Accession Number Verification</h5>
          
          {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
        </div>
       </a>
      </div>

      <div class="card" style="width: 18rem;">
       <a href="{{asset("/psiv")}}"> 
        <img class="card-img-top" src="{{asset("/images/plant.jpeg")}}" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Plant Specimen Identification Verification</h5>
         
          {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
        </div>
       </a>
      </div>

    </div>


  </div>

@endsection