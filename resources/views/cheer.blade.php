@extends('layouts.app')
@section('content')

    @include('mobiles')
    @include('headers')

    <div class="container my-5" id="class-schedule">
        <div class="row">
            <div class="col-sm">
                <img src="/images/cheer-at-norcal.jpg" alt="cheerleaders" class="img-fluid shadow rounded">
            </div>
            <div class="col-sm d-flex align-items-center">
                <div>
                    <h2 class="text-uppercase">NORCAL Cheer</h2>
                    <p>
                        <strong>What are cheer classes?</strong>
                        <br>
                        Learn the basics.  Cheer classes are great for new athletes.  We will teach cheer motions, jumps, and basic stunting (how to base, fly or back spot)
                        <br>
                        <br>
                        <strong>What do they do in class?</strong>
                        <br>
                        Our classes begin with a proper warm up to protect our athletes’ bodies.  Then we teach and develop body positions, jumps and stunts according to the ability level of the athletes.
                        <br>
                        <br>
                        <strong>Do they learn a routine?</strong>
                        <br>
                        Yes they learn a routine and have the opportunity to participate in multiple showcases during the year.
                    </p>
                    <a href="https://app.thestudiodirector.com/norcalcheer/portal.sd?page=Enroll&meth=search" target="_blank"><div class="btn btn-pink text-center text-uppercase mb-3">Enroll</div></a>
                </div>
            </div>
        </div>
        <div class="row mt-4">
            @include('private-lessons')
        </div>
    </div>

@endsection
