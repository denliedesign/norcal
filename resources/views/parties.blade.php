@extends('layouts.app')
@section('content')

    @include('mobiles')
    @include('headers-party')

    <div class="container my-5" id="class-schedule">
        <h2 class="text-center text-uppercase">Parties!</h2>
        <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4">
            <div class="col-sm">
                <div class="party-item shadow rounded">
                    <p class="big-gold-text text-center rounded-top">Value Party</p>
                    <p class="px-3">
                        $125
                        <br>
                        &middot; Full Service Party Host
                        <br>
                        &middot; Up to 10 Guests (including Birthday child)
                        <br>
                        &middot; 30 minutes of cheer and tumbling
                        <br>
                        &middot; 30 minutes cake and presents
                    </p>
                    <hr>
                    <div class="text-center">
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLScjbPbQEyFLbLnAfaBLPRAwg2t_fdAkHzAjBZGsTOr4UTabBQ/viewform" target="_blank"><div class="btn btn-pink text-center text-uppercase mb-3">Book Now!</div></a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="party-item shadow rounded">
                    <p class="big-gold-text text-center rounded-top">Deluxe Party</p>
                    <p class="px-3">
                        $250
                        <br>
                        &middot; Full Service Party Host
                        <br>
                        &middot; Up to 15 Guests (including Birthday child)
                        <br>
                        &middot; 45 minutes of cheer and tumbling
                        <br>
                        &middot; 15 minutes of a craft
                        <br>
                        &middot; 30 minutes cake and presents
                    </p>
                    <hr>
                    <div class="text-center">
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLScjbPbQEyFLbLnAfaBLPRAwg2t_fdAkHzAjBZGsTOr4UTabBQ/viewform" target="_blank"><div class="btn btn-pink text-center text-uppercase mb-3">Book Now!</div></a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="party-item shadow rounded">
                    <p class="big-gold-text text-center rounded-top">Premium Party</p>
                    <p class="px-3">
                        $375
                        <br>
                        &middot; Full Service Party Host
                        <br>
                        &middot; Up to 15 Guests (including Birthday child)
                        <br>
                        &middot; 45 minutes of cheer and tumbling
                        <br>
                        &middot; 15 minutes of a craft
                        <br>
                        &middot; 30 minutes cake and presents
                        <br>
                        &middot; 3 Pizzas
                    </p>
                    <hr>
                    <div class="text-center">
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLScjbPbQEyFLbLnAfaBLPRAwg2t_fdAkHzAjBZGsTOr4UTabBQ/viewform" target="_blank"><div class="btn btn-pink text-center text-uppercase mb-3">Book Now!</div></a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="party-item shadow rounded">
                    <p class="big-gold-text text-center rounded-top">Party Add Ons</p>
                    <p class="px-3 pb-3">
                        &middot; Additional time $20/15 minutes
                        <br>
                        &middot; Pizza $10
                        <br>
                        &middot; Indoor Bounce House $50
                        <br>
                        Rental- $100/hour
                        <br>
                        Air-conditioned
                        <br>
                        42x42 spring floor
                        <br>
                        1 bathroom
                        <br>
                        Waiting area
                    </p>
                </div>
            </div>
        </div>



    </div>

@endsection
