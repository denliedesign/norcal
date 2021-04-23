@extends('layouts.app')
@section('content')

    @include('mobiles')
    @include('headers')

    <div class="container my-5" id="class-schedule">
        <div class="row">
            <div class="col-sm">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img style="height: 500px; width: 500px; object-fit: cover; object-position: 0 35%;" src="/images/norcal-1.png" class="d-block w-100 rounded shadow" alt="cheer and tumblers">
                        </div>
                        <div class="carousel-item">
                            <img style="height: 500px; width: 500px; object-fit: cover; object-position: 0 35%;" src="/images/norcal-2.png" class="d-block w-100 rounded shadow" alt="cheer and tumblers">
                        </div>
                        <div class="carousel-item">
                            <img style="height: 500px; width: 500px; object-fit: cover; object-position: 0 35%;" src="/images/norcal-3.png" class="d-block w-100 rounded shadow" alt="cheer and tumblers">
                        </div>
                        <div class="carousel-item">
                            <img style="height: 500px; width: 500px; object-fit: cover; object-position: 0 35%;" src="/images/norcal-4.png" class="d-block w-100 rounded shadow" alt="cheer and tumblers">
                        </div>
                        <div class="carousel-item">
                            <img style="height: 500px; width: 500px; object-fit: cover; object-position: 0 35%;" src="/images/norcal-5.png" class="d-block w-100 rounded shadow" alt="cheer and tumblers">
                        </div>
                        <div class="carousel-item">
                            <img style="height: 500px; width: 500px; object-fit: cover; object-position: 0 35%;" src="/images/norcal-6.png" class="d-block w-100 rounded shadow" alt="cheer and tumblers">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    </a>
                </div>
            </div>
            <div class="col-sm d-flex align-items-center">
                <div>
                    <h2 class="text-center text-uppercase">Facility Rentals</h2>
                    <p class="text-center">
                        Do you have a cheer program that needs practice space?  We rent our gym!
                        <br><br>
                        42x42 spring floor
                        <br>
                        Air conditioned and heated
                        <br>
                        Additional mats
                        <br>
                        Bathroom
                        <br>
                        Waiting area and desk
                        <br>
                        $100/hour
                        <br><br>
                        Add on- air track and trampoline $25/hour
                    </p>
                    <div class="text-center">
                        <a href="mailto:norcalcheeranddance@studiodirector.biz?subject=Facility Rental at NorCal" target="_blank">
                            <div class="btn btn-pink text-center text-uppercase mb-3">Reserve My Space!</div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
