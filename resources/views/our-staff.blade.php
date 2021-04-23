@extends('layouts.app')
@section('content')

    @include('mobiles')
    @include('headers')

    <div class="container my-5" id="class-schedule">
        <h2 class="text-center text-uppercase">Our Staff</h2>

        <div class="about-teacher-wrapper row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2">
            <div class="teacher-col col-sm">
                <div class="about-teacher-card">
                    <img class="teacher-img" src="images/norcal-coach-kelly.png">
                    <button class="bioaccordion"><h4>Coach Kelly</h4></button>
                    <div class="biopanel">
                        <p>
                            Hello my name is Kelly Iserloth A.K.A Coach Kelly!
                            <br><br>
                            I have been dancing since I was 3 years old, ballet, jazz and hip-hop. I didn't start cheering until I was about 12 years old, I had to get my black belt in martial arts before my mom would let me start another sport so yes, I also have a 1st degree black belt. I have been coaching/teaching since June 2001 and started at Encore gymnastics in Pleasant Hill as soon as I started my teachers in training class I knew this was my purpose in life and never stopped. Before Owning NorCal Cheer and Dance and now taking on the position as director, I had owned a Allstar cheer and dance gym for 7 years coaching cheer and hip-hop levels 1-5, worked with children as a Gymnastics Coach specifically the boys competitive program level 3/4, Junior olympic gymnastics program assisting an olympic coach,  and worked for central medical laboratories in our local police departments as a phlebotomist in the jail and on the boats for marine patrol.
                            <br><br>
                            I realize that teaching your child is a tremendous responsibility and I will do my best to ensure that each student has a safe and motivating learning experience with me and my staff.
                            <br><br>
                            &middot; Won Multiple JAMZ National Champion titles and speciality awards
                            <br>
                            &middot; 2010  Won at large worlds hip-hop bid from JAMZ
                            <br>
                            &middot; 2011 Danced at  Hip-Hop Worlds
                            <br>
                            &middot; Head Coached NorCal for 5 years
                            <br>
                            &middot; Have been coaching for 19 years
                            <br>
                            &middot; Fun Fact: “I love camping & boating with family and friends.”
                        </p>
                    </div>
                </div>
            </div>
            <div class="teacher-col col-sm">
                <div class="about-teacher-card">
                    <img class="teacher-img" src="images/coach-lenisha.png">
                    <button class="bioaccordion"><h4>Coach Lenisha</h4></button>
                    <div class="biopanel">
                        <p>
                            Hello my name is Lenisha Williams also known as Coach Lenny !!
                            <br><br>
                            I began dancing at age 5 in San Francisco at the AAACC (African American Art & Culture Complex) where she learned the styles of HipHop and African style. I continued dancing into my youth and teenage years as well as cheerleading. I cheered for Delta Valley Wolfpack and Wolfpack Elite for 6 years doing Show Cheer, Performance Cheer , HipHop and Pom Dance. While competing competitively I was a defending champion for DVWP in Show Cheer , Performance Cheer , and HipHop. I then went to school at Deer Valley High School where I continued my passion for dance in the Performing Arts Academy. I learned all styles of dance: lyrical, ballet, jazz, contemporary, tap, and modern. I began teaching at the Antioch Recreation Department from 2016-2017 where I taught Tippy Twos Ballet , Tiny HipHop and Youth HipHop, Toddlers and Tiaras Ballet, Tiny Gymnastics and Cheerleading.
                            <br><br>
                            I resigned from my position at the Antioch Recreation Department to join the NorCal staff. I’ve been helping Coach Kelly with NorCal for almost 4-5 years now. Leading them to first place at many competitions. I understand that teaching your children is a huge responsibility and I will do my best to make sure each and everyone is safe and continuing to motivate them and aspire to be a better them.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>

@endsection
