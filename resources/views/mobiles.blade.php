<div class="d-block d-md-none" id="contact-nav">
    <ul class="nav flex-column" id="top-nav" style="width: 100%;">
        @include('nav-top')
    </ul>
</div>

<div class="d-block d-md-none banner pb-5">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark d-flex justify-content-center">
            <a class="navbar-brand" href="/"><img src="images/mdu-logo.png" alt="" id="logo"></a>
            <button style="background: black; border: 1px solid white;" class="navbar-toggler mt-3" type="button" data-toggle="collapse" data-target="#main-navigation" aria-controls="main-navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="main-navigation" style="background: black;">
                <ul class="navbar-nav" id="nav-mobile">
                    @include('nav')
                </ul>
            </div>
        </nav>
    </div>
</div>
