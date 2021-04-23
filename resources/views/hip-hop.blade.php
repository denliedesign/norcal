@extends('layouts.app')
@section('content')

    @include('mobiles')
    @include('headers')

    <div class="container my-5" id="class-schedule">
        <div class="row">
            <div class="col-sm">
                <img src="/images/norcal-hip-hop-classes.png" alt="hip hop dancers" class="img-fluid shadow rounded">
            </div>
            <div class="col-sm d-flex align-items-center">
                <div>
                    <h2 class="text-uppercase">NORCAL Hip-Hop</h2>
                    <p>
                        A routine focusing on street style movements with an emphasis on variety, execution, creativity, body isolations/control, rhythm, uniformity and musical interpretation. Choreography should demonstrate various styles and elements of hip hop while incorporating athletic tricks, footwork, jumps, stalls, etc. When incorporating these skills it is very important to make sure proper technique is maintained. Improper execution of any trick, stall, etc. may negatively affect your score.
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
