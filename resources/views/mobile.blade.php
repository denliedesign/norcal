<div class="d-block d-md-none" id="contact-nav">
    <ul class="nav flex-column" id="top-nav" style="width: 100%;">
        @include('nav-top')
    </ul>
</div>

<div id="head-section" class="d-block d-md-none">
    <div class="container">
        <div class="d-flex justify-content-center">
            <a class="navbar-brand" href="/"><img src="images/norcal-cheer-logo.png" alt="" id="logo"></a>
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark d-flex justify-content-center">
            <button style="background: black; border: 1px solid white;" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navigation" aria-controls="main-navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main-navigation" style="background: black;">
                <ul class="navbar-nav" id="nav-mobile">
                    @include('nav')
                </ul>
            </div>
        </nav>
        <div id="head-title" class="mt-5 pt-5">
            <h2 class="text-uppercase text-center">Be A Part Of</h2>
            <h1 class="text-uppercase text-center">Something Great</h1>
            <div class="d-flex justify-content-center mt-4">
                <a href="https://app.thestudiodirector.com/norcalcheer/portal.sd?page=Enroll&meth=search" target="_blank"><div class="btn btn-outline-primary">Enroll Now</div></a>
            </div>
        </div>
    </div>
    <div id="stoplight">
        <div class="row">
            <div class="col stoplight-col">
                <div class="yellow-light light-circle"></div>
            </div>
        </div>
    </div>
</div>

<div id="mobile-class-types" class="text-white text-center d-block d-md-none">
    <div class="box-one py-2">
        <div>
            <ion-icon name="business-outline"></ion-icon>
            <p>In-Gym Classes</p>
        </div>
    </div>
    <div class="box-two py-2">
        <div>
            <ion-icon name="videocam-outline"></ion-icon>
            <p>Live Stream</p>
        </div>
    </div>
    <div class="box-three py-2">
        <div>
            <ion-icon name="person-circle-outline"></ion-icon>
            <p>Private Lessons & Social Bubble Classes</p>
        </div>
    </div>
</div>
