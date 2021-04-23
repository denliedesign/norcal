@extends('layouts.app')
@section('content')

    @include('mobiles')
    @include('headers')

    <div class="container my-5" id="class-schedule">
        <div class="row">
            <div class="col-sm">
                <img src="/images/norcal-cheer.png" alt="cheerleaders" class="img-fluid shadow rounded">
            </div>
            <div class="col-sm d-flex align-items-center">
                <div>
                    <h2 class="text-uppercase">NORCAL Cheer</h2>
                    <p>
                        Performance using music, cheer or any combination thereof. Music is required in this category. Music may be incorporated for a segment,half, or the entire performance. Failure to perform required skills will result in a 0. Poms, megaphones, signs, flags and banners are allowed. Please refer to the youth cheer rules and scoring for complete details on Show Cheer routine requirements.
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
