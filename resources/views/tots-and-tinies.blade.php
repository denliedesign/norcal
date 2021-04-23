@extends('layouts.app')
@section('content')

    @include('mobiles')
    @include('headers')

    <div class="container my-5" id="class-schedule">
        <h2 class="text-center text-uppercase">Tots & Tinies</h2>
        <div class="row row-cols-1 row-cols-md-3">
            <div class="col-sm">
                <div class="shadow rounded">
                    <img src="/images/tumble-tots.png" alt="mom and baby" class="img-fluid">
                    <p class="lead mt-2 text-center">Tumble Tots</p>
                    <div class="row mb-3">
                        <div class="col-4 tot-icons d-flex justify-content-end">
                            <ion-icon name="body-outline"></ion-icon>
                        </div>
                        <div class="col-8">
                            18 months-2 years
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-4 tot-icons d-flex justify-content-end">
                            <ion-icon name="calendar-outline"></ion-icon>
                        </div>
                        <div class="col-8">
                            THR & FRI 9:15-9:45 AM
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 tot-icons d-flex justify-content-end align-items-center">
                            <ion-icon name="card-outline"></ion-icon>
                        </div>
                        <div class="col-8">
                            $55/mo (1 day a week)
                            <br>
                            $105/mo (2 days a week)
                        </div>
                    </div>
                    <hr>
                    <div class="text-center">
                        <a href="https://app.thestudiodirector.com/norcalcheer/portal.sd?page=Enroll&meth=search" target="_blank"><div class="btn btn-pink text-center text-uppercase mb-3">Enroll</div></a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="shadow rounded">
                    <img src="/images/tiny-tumblers.png" alt="toddler playing" class="img-fluid">
                    <p class="lead mt-2 text-center">Tiny Tumblers</p>
                    <div class="row mb-3">
                        <div class="col-4 tot-icons d-flex justify-content-end">
                            <ion-icon name="body-outline"></ion-icon>
                        </div>
                        <div class="col-8">
                            3-4 years
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-4 tot-icons d-flex justify-content-end">
                            <ion-icon name="calendar-outline"></ion-icon>
                        </div>
                        <div class="col-8">
                            THR & FRI 10:15-10:45 AM
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 tot-icons d-flex justify-content-end align-items-center">
                            <ion-icon name="card-outline"></ion-icon>
                        </div>
                        <div class="col-8">
                            $55/mo (1 day a week)
                            <br>
                            $105/mo (2 days a week)
                        </div>
                    </div>
                    <hr>
                    <div class="text-center">
                        <a href="https://app.thestudiodirector.com/norcalcheer/portal.sd?page=Enroll&meth=search" target="_blank"><div class="btn btn-pink text-center text-uppercase mb-3">Enroll</div></a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="shadow rounded">
                    <img src="/images/tiny-cheer.png" alt="toddler playing" class="img-fluid">
                    <p class="lead mt-2 text-center">Tiny Cheer & Hip-Hop</p>
                    <p class="text-center mx-3">Our Tiny Team is a great alternative for athletes who just can't wait to compete. Includes, shell and bow and in-house showcase with possible exhibition or Jan competition</p>
                    <div class="row mb-3">
                        <div class="col-4 tot-icons d-flex justify-content-end">
                            <ion-icon name="body-outline"></ion-icon>
                        </div>
                        <div class="col-8">
                            4-6 years
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-4 tot-icons d-flex justify-content-end">
                            <ion-icon name="calendar-outline"></ion-icon>
                        </div>
                        <div class="col-8">
                            June-Jan
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 tot-icons d-flex justify-content-end align-items-center">
                            <ion-icon name="card-outline"></ion-icon>
                        </div>
                        <div class="col-8">
                            $155/mo (2 days a week)
                        </div>
                    </div>
                    <hr>
                    <div class="text-center">
                        <a href="https://app.thestudiodirector.com/norcalcheer/portal.sd?page=Enroll&meth=search" target="_blank"><div class="btn btn-pink text-center text-uppercase mb-3">Enroll</div></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
