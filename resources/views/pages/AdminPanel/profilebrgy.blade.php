@extends('layouts.apps')

@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" style="background-color: grey">

            <div class="carousel-item active">
                <div class="d-flex justify-content-between">
                    <div class="w-75 p-2">
                        <h2 class="text-center text-white">Banlasan</h2>
                        <p class="text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor deleniti
                            reprehenderit ab alias
                            suscipit aliquid nesciunt fugit incidunt soluta aperiam molestiae dolores earum vel quia nobis
                            illo, adipisci, in ut velit architecto itaque, corrupti exercitationem!</p>
                    </div>
                    <div>
                        <img src="{{ URL::asset('images/bg2.jpg') }}" style="width:100%;">

                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex justify-content-between">
                    <div class="w-75 p-2">
                        <h2 class="text-center text-white">Vission</h2>
                        <p class="text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor deleniti
                            reprehenderit ab alias
                            suscipit aliquid nesciunt fugit incidunt soluta aperiam molestiae dolores earum vel quia nobis
                            illo, adipisci, in ut velit architecto itaque, corrupti exercitationem!</p>
                    </div>
                    <div>
                        <img src="{{ URL::asset('images/bg2.jpg') }}" style="width:100%;">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="d-flex justify-content-between">
                    <div class="w-75 p-2">
                        <h2 class="text-center text-white">Mission</h2>
                        <p class="text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor deleniti
                            reprehenderit ab alias
                            suscipit aliquid nesciunt fugit incidunt soluta aperiam molestiae dolores earum vel quia nobis
                            illo, adipisci, in ut velit architecto itaque, corrupti exercitationem!</p>
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
        <div class="card-body">
            <h5 class="card-title text-center">Barangay Banlasan, Tubigon, Bohol</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                content.
                Some quick example text to build on the card title and make up the bulk of the card's
                content.Some quick example text to build on the card title and make up the bulk of the card's
                content.Some quick example text to build on the card title and make up the bulk of the card's
                content.
            </p>
        </div>
    </div>
@endsection
