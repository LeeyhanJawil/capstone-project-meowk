@extends('layouts.apps')

@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" style="background-color: grey" >

            <div class="carousel-item active">
                <div class="d-flex justify-content-between">
                    <div class="w-75 p-2">
                        <h2 class="text-center text-white">Banlasan Profile</h2> <br>
                        <p class="text-white">
                            Total Land Area:            270.9274 <br>       
                            Total Population:           1,090 <br>
                            Total No. of Household:     228<br>
                            Total of Families:          299<br>
                            Total No. of Water Consumer: 110<br>
                            Total No. of Electric Consumer: 274
            
                        </p>
                    </div>
                    <div>
                        <img src="{{ URL::asset('images/bg2.jpg') }}" style="width:100%;">

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex justify-content-between">
                    <div class="w-75 p-2">
                        <h2 class="text-center text-white">Vision</h2> <br>
                        <p class="text-white">A progressive barangay with good perseverance lead by competent and
                            responsible barangay leaders with the support and unity of the constituent working hand 
                            in hand resulting to a progressive suitable form of living prompting the barangay livelihood
                            programs.</p>
                    </div>
                    <div>
                        <img src="{{ URL::asset('images/bg2.jpg') }}" style="width:100%;">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex justify-content-between">
                    <div class="w-75 p-2">
                        <h2 class="text-center text-white">Mission</h2> <br>
                        <p class="text-white">To deliver efficient quality and productive service to the constituents.</p>
                    </div>
                    <div>
                        <img src="{{ URL::asset('images/bg2.jpg') }}" style="width:100%;">

                    </div>
                </div>
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>
    <div class="card mt-3" style="width: 100%;height: 100%;">
        <div class="card-body shadow-lg" style="background-color:grey; color:white;">
            <strong><h3 class="card-title text-center">THIS IS A CHILD-FRIENDLY BARANGAY.</h3></strong>
        </div>
    </div>
@endsection
