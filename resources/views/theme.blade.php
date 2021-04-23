@extends('layouts.app')
@section('content')

    @include('mobiles')
    @include('headers')

    <div class="container my-5" id="class-schedule">
        <div class="row">
            <div class="col-sm">
                <img src="/images/norcal-theme.png" alt="theme dance performers" class="img-fluid shadow rounded">
            </div>
            <div class="col-sm d-flex align-items-center">
                <div>
                    <h2 class="text-uppercase">NORCAL Theme Dance</h2>
                    <p>
                        The focus of this performance is audience entertainment. With no spoken word by the athlete, this routine tells the story of the selected theme or era. Through the selection of music, costuming and dance the audience is drawn into your theme. This routine should encompass and express one predominate theme and/or era. Theme dance incorporates novelty movements into elegant, athletic theatre capable of captivating audiences. This performance should additionally focus on athletic skills such as jumps, combo jumps, tricks, trick variations and/or illusions. Technical skills (i.e. pirouettes/ leaps) will be credited toward degree of difficulty. Dance style must emphasize uniformity, rhythm, creativity, and execution. Costuming is required to reflect the routine’s theme/era. Props are highly recommended, however not mandatory. See Youth General Dance Routine Guidelines for prop specifics.
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
