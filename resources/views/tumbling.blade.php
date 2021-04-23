@extends('layouts.app')
@section('content')

    @include('mobiles')
    @include('headers')

    <div class="container my-5" id="class-schedule">
        <div class="row">
            <div class="col-sm">
                <img src="/images/norcal-tumbling.png" alt="tumblers" class="img-fluid shadow rounded">
            </div>
            <div class="col-sm d-flex align-items-center">
                <div>
                    <h2 class="text-uppercase">NORCAL Tumbling</h2>
                    <p>
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
