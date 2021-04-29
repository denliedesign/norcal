@extends('layouts.app')
@section('content')

     @include('mobile')
     @include('header')

    <div id="head-title" class="pt-5 mt-5">
        <h2 class="text-uppercase text-center">Be A Part Of</h2>
        <h1 class="text-uppercase text-center">Something Great</h1>
        <div class="d-flex justify-content-center mt-4">
            <a href="https://app.thestudiodirector.com/norcalcheer/portal.sd?page=Enroll&meth=search" target="_blank"><div class="btn btn-outline-primary">Enroll Now</div></a>
        </div>
    </div>
    </div>

    <div id="stoplight">
        <img src="/images/yellow-light.png" alt="yellow smiley" class="img-fluid" style="width: 75px; height: auto;">
    </div>
    </div>

    <div class="container">
        <div class="d-none d-md-block">
            <div id="colored-boxes" class="d-flex justify-content-center">

                <div id="box-one" class="flip-card mr-1">
                    <div class="flip-card-inner">
                        <div class="box-one flip-card-front d-flex align-items-center justify-content-center text-center">
                            <div>
{{--                                <ion-icon name="business-outline"></ion-icon>--}}
                                <p>Cheer and Tumbling Classes</p>
                            </div>
                        </div>
                        <div class="box-one flip-card-back d-flex align-items-center justify-content-center text-center">
                            <p>
                                Cheer & Dance in person with us confidently. We follow the Safer Studio Standards.
                            </p>
                        </div>
                    </div>
                </div>

                <div id="box-two" class="flip-card ml-1">
                    <div class="flip-card-inner">
                        <div class="box-two flip-card-front d-flex align-items-center justify-content-center text-center">
                            <div>
{{--                                <ion-icon name="videocam-outline"></ion-icon>--}}
                                <p>Competitive Cheer and Hip Hop</p>
                            </div>
                        </div>
                        <div class="box-two flip-card-back d-flex align-items-center justify-content-center text-center">
                            <p>
                                In case you have to stay home, all our classes are up on Live Stream.
                            </p>
                        </div>
                    </div>
                </div>

                <div id="box-three" class="flip-card ml-1">
                    <div class="flip-card-inner">
                        <div class="box-three flip-card-front d-flex align-items-center justify-content-center text-center">
                            <div>
{{--                                <ion-icon name="person-circle-outline"></ion-icon>--}}
                                <p>Camps and Events</p>
                            </div>
                        </div>
                        <div class="box-three flip-card-back d-flex align-items-center justify-content-center text-center">
                            <p>
                                We offer socially distanced private lessons or semi-private lessons with your social bubble.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

{{--        <h5 class="text-center mt-3 mb-3">A class for every interest and learning preference!</h5>--}}
{{--        <div id="colored-dashes" class="d-flex justify-content-center">--}}
{{--            <div class="one-dash"></div>--}}
{{--            <div class="two-dash"></div>--}}
{{--            <div class="three-dash"></div>--}}
{{--        </div>--}}
    </div>

    <div class="my-5 text-white d-none d-md-block">
        <div class="row m-0 c-0">
            <div class="col bg-light-gray pl-5 py-5">
                <div class="container">
                    <h1 class="text-uppercase text-center">norcal is a safer studio&trade;</h1>
                    <p class="text-center">NORCAL focuses on a hierarchy of measures to create a Safer Studio&trade; environment beginning with requiring students and staff who are ill to stay home, followed by frequent hand cleansing and good hygiene practices, amplified cleaning, and making curricular and facility adaptations to minimizing contact and mingling.</p>
                    <div class="d-flex justify-content-center">
                        <img src="/images/safer-studio-logo.png" alt="" style="max-height: 200px;">
                    </div>
                </div>
            </div>
{{--            <div class="col-6 bg-mdu-gray py-2">--}}
{{--                <div class="container">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-sm">--}}
{{--                            <h1 class="text-uppercase">studio&trade;</h1>--}}
{{--                            <p class="font-weight-bold">NORCAL is working on Youth Protection Advocates in Dance&reg; Certification!</p>--}}
{{--                            <p>--}}
{{--                                <ion-icon name="checkmark"></ion-icon> Background checked and CPR certified teachers--}}
{{--                                <br><ion-icon name="checkmark"></ion-icon> Safety Studio&trade; Policy--}}
{{--                                <br><ion-icon name="checkmark"></ion-icon> Teacher training & proven curriculum--}}
{{--                                <br><ion-icon name="checkmark"></ion-icon> A focus on safety & wellness for every student--}}
{{--                                <br><ion-icon name="checkmark"></ion-icon> Secured facilities--}}
{{--                                <br><ion-icon name="checkmark"></ion-icon> Viewing windows--}}
{{--                                <br><ion-icon name="checkmark"></ion-icon> Professional sprung floors--}}
{{--                                <br><ion-icon name="checkmark"></ion-icon> Social media safety practices--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm d-flex align-items-center justify-content-center">--}}
{{--                            <img src="/images/ypad-logo-rotate.png" alt="" class="img-fluid">--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>

    <div class="my-5 p-2 text-white d-block d-md-none bg-mdu-gray text-white">
        <h2 class="text-uppercase">ecpac is a safer studio&trade;</h2>
        <p>NORCAL focuses on a hierarchy of measures to create a Safer Studio&trade; environment beginning with requiring
            students and staff who are ill to stay home, followed by frequent hand cleansing and good hygiene practices,
            amplified cleaning, and making curricular and facility adaptations to minimizing contact and mingling.</p>
        <div class="d-flex justify-content-center pb-2">
            <img src="/images/safer-studio-logo.png" alt="" style="max-height: 250px;">
        </div>
{{--        <p class="font-weight-bold">NORCAL is working on Youth Protection Advocates in Dance&reg; Certification!</p>--}}
{{--        <p>--}}
{{--            <ion-icon name="checkmark"></ion-icon>--}}
{{--            Background checked and CPR certified teachers--}}
{{--            <br>--}}
{{--            <ion-icon name="checkmark"></ion-icon>--}}
{{--            Safety Studio&trade; Policy--}}
{{--            <br>--}}
{{--            <ion-icon name="checkmark"></ion-icon>--}}
{{--            Teacher training & proven curriculum--}}
{{--            <br>--}}
{{--            <ion-icon name="checkmark"></ion-icon>--}}
{{--            A focus on safety & wellness for every student--}}
{{--            <br>--}}
{{--            <ion-icon name="checkmark"></ion-icon>--}}
{{--            Secured facilities--}}
{{--            <br>--}}
{{--            <ion-icon name="checkmark"></ion-icon>--}}
{{--            Viewing windows--}}
{{--            <br>--}}
{{--            <ion-icon name="checkmark"></ion-icon>--}}
{{--            Professional sprung floors--}}
{{--            <br>--}}
{{--            <ion-icon name="checkmark"></ion-icon>--}}
{{--            Social media safety practices--}}
{{--        </p>--}}
{{--        <div class="d-flex justify-content-center">--}}
{{--            <img src="/images/ypad-logo-rotate.png" alt="" style="height: 150px;">--}}
{{--        </div>--}}
    </div>

    <div class="container">
        <h2 class="my-5 font-weight-bold text-uppercase">Classes For All Ages</h2>
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 mb-5">
            <div class="col px-2 pb-3">
                <div class="class-card-wrap border border-muted">
                    <img src="/images/norcal-classes.png" alt="" class="img-fluid" style="object-fit: cover; object-position: 15% 0;">
                    <div class="class-card-content my-3">
                        <p class="m-0 text-center"><strong>Tumble Tots</strong> <small class="text-muted">age 18mo-3yr</small></p>
                        <hr>
                        <div class="text-center">

                            <a href="/" class="ml-2"><div class="btn btn-aqua btn-sm text-center text-uppercase">Info</div></a>
                            <a href="https://app.thestudiodirector.com/norcalcheer/portal.sd?page=Enroll&meth=search" target="_blank"><div class="btn btn-sm btn-pink text-center text-uppercase">Enroll</div></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col px-2 pb-3">
                <div class="class-card-wrap border border-muted">
                    <img src="/images/norcal-classes.png" alt="" class="img-fluid" style="object-fit: cover; object-position: 15% 0;">
                    <div class="class-card-content my-3">
                        <p class="m-0 text-center"><strong>Tiny Tumbling</strong> <small class="text-muted">age 3-6</small></p>
                        <hr>
                        <div class="text-center">

                            <a href="/" class="ml-2"><div class="btn btn-aqua btn-sm text-center text-uppercase">Info</div></a>
                            <a href="https://app.thestudiodirector.com/norcalcheer/portal.sd?page=Enroll&meth=search" target="_blank"><div class="btn btn-sm btn-pink text-center text-uppercase">Enroll</div></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col px-2 pb-3">
                <div class="class-card-wrap border border-muted">
                    <img src="/images/norcal-classes.png" alt="" class="img-fluid" style="object-fit: cover; object-position: 15% 0;">
                    <div class="class-card-content my-3">
                        <p class="m-0 text-center"><strong>Recreational Cheer Classes</strong></p>
                        <hr>
                        <div class="text-center">

                            <a href="/" class="ml-2"><div class="btn btn-aqua btn-sm text-center text-uppercase">Info</div></a>
                            <a href="https://app.thestudiodirector.com/norcalcheer/portal.sd?page=Enroll&meth=search" target="_blank"><div class="btn btn-sm btn-pink text-center text-uppercase">Enroll</div></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col px-2 pb-3">
                <div class="class-card-wrap border border-muted">
                    <img src="/images/norcal-classes.png" alt="" class="img-fluid" style="object-fit: cover; object-position: 15% 0;">
                    <div class="class-card-content my-3">
                        <p class="m-0 text-center"><strong>Beginner Tumbling</strong></p>
                        <hr>
                        <div class="text-center">

                            <a href="/" class="ml-2"><div class="btn btn-aqua btn-sm text-center text-uppercase">Info</div></a>
                            <a href="https://app.thestudiodirector.com/norcalcheer/portal.sd?page=Enroll&meth=search" target="_blank"><div class="btn btn-sm btn-pink text-center text-uppercase">Enroll</div></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col px-2 pb-3">
                <div class="class-card-wrap border border-muted">
                    <img src="/images/norcal-classes.png" alt="" class="img-fluid" style="object-fit: cover; object-position: 15% 0;">
                    <div class="class-card-content my-3">
                        <p class="m-0 text-center"><strong>Level 1-4 Tumbling</strong></p>
                        <hr>
                        <div class="text-center">

                            <a href="/" class="ml-2"><div class="btn btn-aqua btn-sm text-center text-uppercase">Info</div></a>
                            <a href="https://app.thestudiodirector.com/norcalcheer/portal.sd?page=Enroll&meth=search" target="_blank"><div class="btn btn-sm btn-pink text-center text-uppercase">Enroll</div></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div id="achievements-section" class="d-flex align-items-center">
        <div id="achievements-overlay"></div>
        <div id="achievements-content">
            <div class="row row-cols-2 row-cols-sm-2 row-cols-md-4 row-cols-lg-4 d-flex justify-content-center" style="width: 100vw;">
                <div class="col-sm-2 text-center text-white d-md-block">
                    <ion-icon name="star-outline"></ion-icon>
                    <p class="achievement-number mx-3">30+</p>
                    <p class="achievement-text">Classes Per Week</p>
                </div>
                <div class="col-sm-2 text-center text-white d-md-block">
                    <ion-icon name="people-circle-outline"></ion-icon>
                    <p class="achievement-number mx-3">6</p>
                    <p class="achievement-text">Years Serving Our Community</p>
                </div>
                <div class="col-sm-2 text-center text-white d-md-block">
                    <ion-icon name="trophy-outline"></ion-icon>
                    <p class="achievement-number mx-3">6</p>
                    <p class="achievement-text">National Titles</p>
                </div>
            </div>
        </div>
    </div>

    <div id="teacher-focus-section">
        <div class="container">
            <div class="row pt-5" id="top-teacher-focus">
                <div class="col-12 col-md-6">
                    <p class="text-uppercase my-5" id="focus-label">Teacher Feature</p>
                    <p id="focus-name" class="mt-5">Coach Kelly</p>
                    <p style="font-size: 0.8em;">
                        Hello my name is Kelly Iserloth A.K.A Coach Kelly!
                        <br><br>
                        I have been dancing since I was 3 years old, ballet, jazz and hip-hop. I didn't start cheering until I was about 12 years old, I had to get my black belt in martial arts before my mom would let me start another sport so yes, I also have a 1st degree black belt. I have been coaching/teaching since June 2001 and started at Encore gymnastics in Pleasant Hill as soon as I started my teachers in training class I knew this was my purpose in life and never stopped. Before Owning NorCal Cheer and Dance and now taking on the position as director, I had owned a Allstar cheer and dance gym for 7 years coaching cheer and hip-hop levels 1-5, worked with children as a Gymnastics Coach specifically the boys competitive program level 3/4, Junior olympic gymnastics program assisting an olympic coach,  and worked for central medical laboratories in our local police departments as a phlebotomist in the jail and on the boats for marine patrol.
                        <br><br>
                        I realize that teaching your child is a tremendous responsibility and I will do my best to ensure that each student has a safe and motivating learning experience with me and my staff.
                    </p>
                </div>
                <div class="col-6 d-flex justify-content-center">
                    <img src="images/norcal-coach-kelly-feature.png" alt="" class="img-fluid d-none d-md-block">
                </div>
            </div>
            <div class="row py-5" id="teacher-focus-classes">
                <div class="col-sm-4 mb-2">
                    <div class="class-card-wrap shadow">
                        <div id="teach-feat-card-content" class="mat-blue class-card-content rounded p-3 text-white d-flex align-items-center justify-content-center">
                            <p>
                                Won Multiple JAMZ National Champion titles and speciality awards
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mb-2">
                    <div class="class-card-wrap shadow">
                        <div id="teach-feat-card-content" class="medal-gold class-card-content rounded p-3 text-white d-flex align-items-center justify-content-center">
                            <p>
                                2010  Won at large worlds hip-hop bid from JAMZ
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mb-2">
                    <div class="class-card-wrap shadow">
                        <div id="teach-feat-card-content" class="strong-gray class-card-content rounded p-3 text-white d-flex align-items-center justify-content-center">
                            <p>
                                2011 Danced at  Hip-Hop Worlds
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mb-2">
                    <div class="class-card-wrap shadow">
                        <div id="teach-feat-card-content" class="medal-gold class-card-content rounded p-3 text-white d-flex align-items-center justify-content-center">
                            <p>
                                Head Coached NorCal for 5 years
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mb-2">
                    <div class="class-card-wrap shadow">
                        <div id="teach-feat-card-content" class="strong-gray class-card-content rounded p-3 text-white d-flex align-items-center justify-content-center">
                            <p>
                                Have been coaching for 19 years
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 mb-2">
                    <div class="class-card-wrap shadow">
                        <div id="teach-feat-card-content" class="mat-blue class-card-content rounded p-3 text-white d-flex align-items-center justify-content-center">
                            <p>
                                Fun Fact: “I love camping & boating with family and friends.”
                            </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <div id="trial-section" class="pb-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h4 class="mt-5 mb-4">We Have Built a Reputation for Excellence in Dance Instruction</h4>
                    <p class="mb-5">From your child’s first class to their graduation performance, NORCAL has a class for everyone! We specialize in beginners of all ages and offer training through pre-professional levels. But, NORCAL is More Than Just Great Dancing®! Our dancers go beyond technique to develop important life skills, learning to be respectful, confident and conscientious young people who share their gifts and talents with the community.</p>
                </div>
            </div>
        </div>
    </div>

    <div id="blog-section" class="mb-4">
        <div class="container">

            <div class="d-flex justify-content-center my-5">
{{--                <div class="blog-card col">--}}
{{--                    <a class="blog-link-img" href="https://missninak.com" target="_blank"><img src="/images/miss-nina-blog.jpg" alt="" class="img-fluid mb-4"></a>--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-9">--}}
{{--                            <a class="blog-link text-dark" href="https://missninak.com" target="_blank" style="text-decoration: none;"><h5 class="font-weight-bold">Miss Nina's Blog</h5></a>--}}
{{--                            <div class="short-divide"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="blog-card">
                    <a class="blog-link-img" href="/newsletter"><img src="/images/norcal-newsletter.png" alt="" class="img-fluid mb-4" style="height: 254.39px; width: 636px; object-fit: cover; object-position: 0 35%;"></a>
                    <div class="row">
                        <div class="col-9">
                            <a class="blog-link text-dark" href="/newsletter" style="text-decoration: none;"><h5 class="font-weight-bold">NORCAL Newsletter</h5></a>
                            <div class="short-divide"></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



@endsection
