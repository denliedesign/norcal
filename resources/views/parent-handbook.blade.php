@extends('layouts.app')
@section('content')

    @include('mobiles')
    @include('headers')

    <div class="container my-5" id="class-schedule">
        <h2 class="text-center text-uppercase">Parent Handbook</h2>
        <div>
            <div>
{{--                version 1////////////////////////////////////////--}}
{{--                <p>--}}
{{--                    We have weekly Tumbling classes for ages 3 and up as well as non-affiliated cheer and hip hop teams for ages 4-18.--}}
{{--                    <br>--}}
{{--                    Interested in enrolling in our weekly classes beginning August 3?--}}
{{--                    <br><br>--}}
{{--                    <em>All information below is subject to change</em>--}}
{{--                    <br><br>--}}
{{--                    <span class="big-gold-text rounded-manual">What are non-affiliated Cheer and Hip Hop teams?</span>--}}
{{--                    <br>--}}
{{--                    A non-affiliated cheer and hip hop team does not represent a sports team and is not an “all-star” team.--}}
{{--                    <br><br>--}}
{{--                    What are the benefits of joining an unaffiliated team vs an all-star or sports affiliated team?--}}
{{--                    <br>--}}
{{--                    A non-affiliated team is half the cost of an all-star team (with all-star level training)  and the season runs from August-January instead of year-round. Less commitment, half the cost, all the fun!--}}
{{--                    <br><br>--}}
{{--                    What to bring for evaluations--}}
{{--                    <br>--}}
{{--                    Everyone makes a team!--}}
{{--                    <br>--}}
{{--                    Athletes must wear form-fitting clothing that will not impede tumbling or stunting skills.  Please have hair pulled back and bring water.--}}
{{--                    <br><br>--}}
{{--                    <span class="medium-gold-text">Practice Commitment</span>--}}
{{--                    <br>--}}
{{--                    Each team will practice twice a week for 1.5 hours during the weekdays--}}
{{--                    <br>--}}
{{--                    The season runs August 3-Jan 24--}}
{{--                    <br>--}}
{{--                    All practices are mandatory--}}
{{--                    <br>--}}
{{--                    Athletes are encouraged to continue training during the offseason February-July--}}
{{--                    <br><br>--}}
{{--                    <span class="medium-gold-text">Tuition</span>--}}
{{--                    <br>--}}
{{--                    Tuition includes fees for practices, uniform top and bow for cheer teams, choreography, music, regional competition fees, and any additional practices (does not include uniform for hip hop teams)--}}
{{--                    <br>--}}
{{--                    Cost- $250/month--}}
{{--                    <br>--}}
{{--                    Tuition is due on the 1st of the month June - January--}}
{{--                    <br>--}}
{{--                    Other costs not included in tuition:--}}
{{--                    <br>--}}
{{--                    Hip Hop Team Uniform- $150--}}
{{--                    <br>--}}
{{--                    Cheer teams- You will be responsible to get Nike pro shorts, socks and shoes: approx $200--}}
{{--                    <br><br>--}}
{{--                    You will be required to purchase your own performance makeup- Cost- $50--}}
{{--                    <br><br>--}}
{{--                    Optional items--}}
{{--                    <br>--}}
{{--                    Team Bag- $100--}}
{{--                    <br>--}}
{{--                    Team jacket- optional $100--}}
{{--                    <br><br>--}}
{{--                    All fees are paid via autopay. Families will need to have a card or checking account on file. If you wish to pay by cash or check you may do so before the due date.  If payment has not been made by the due date we will charge the card or checking account on file.--}}
{{--                    <br>--}}
{{--                    Competition schedule (3 of these are included in your tuition)--}}
{{--                    <br>--}}
{{--                    10/25/20 - Stockton - Jamz reload--}}
{{--                    <br>--}}
{{--                    11/15/20 - Stockton - Capital City Championship--}}
{{--                    <br>--}}
{{--                    11/21/20- Anaheim - Bid challenge (advanced teams only)--}}
{{--                    <br>--}}
{{--                    12/5/20 Northern Ca Slam City--}}
{{--                    <br><br>--}}
{{--                    Jan 22-24- Jamz Nationals- Las Vegas, Orleans Arena (additional participation fees apply)--}}
{{--                    <br><br>--}}
{{--                    Mandatory Choreography Dates TBD--}}
{{--                    <br><br>--}}
{{--                    More important dates--}}
{{--                    <br>--}}
{{--                    Contract signing day- June 1 Everyone needs to be prepared to make their first tuition payment and Cheer Team please be prepared to pay your uniform deposit $100--}}
{{--                    <br>--}}
{{--                    Hip Hop Teams- Final uniform payment June 30--}}
{{--                    <br>--}}
{{--                    July 17-Team swim party- Nina’s House--}}
{{--                    <br><br>--}}
{{--                    More important policies--}}
{{--                    <br>--}}
{{--                    Tuition is non-refundable--}}
{{--                    <br>--}}
{{--                    All athletes must have a waiver signed by a parent or guardian to participate--}}
{{--                    <br>--}}
{{--                    All prices and dates are subject to change--}}
{{--                    <br>--}}
{{--                    Cross over and multi-team discounts--}}
{{--                    <br>--}}
{{--                    Add an additional team for $115 per month (does not include an additional uniform or comp fees)--}}
{{--                    <br>--}}
{{--                    Additional teams must be in equal or lower levels--}}
{{--                    <br><br>--}}
{{--                    <span class="big-gold-text rounded-manual">Norcal Tiny Team</span>--}}
{{--                    <br>--}}
{{--                    Our Tiny Team is a great alternative for athletes who just can't wait to compete!--}}
{{--                    <br>--}}
{{--                    Ages 4-6--}}
{{--                    <br><br>--}}
{{--                    Monthly tuition- $155 (June-Jan)--}}
{{--                    <br>--}}
{{--                    2  45 minute practices a week--}}
{{--                    <br>--}}
{{--                    Includes, shell and bow and in- house showcase--}}
{{--                    <br>--}}
{{--                    Possible exhibition or Jan competition--}}
{{--                </p>--}}
{{--                version 2///////////////////////////////////////////////////////////////////--}}
{{--                <a href="https://docs.google.com/document/d/176S1qacF6T8cDufDAmjG_1KYsjd_M5mZ9ELek3cI9Ic/edit?usp=sharing" target="_blank">Download Your Parent Handbook Here</a>--}}
{{--                <p>--}}
{{--                    We have weekly Tumbling classes for ages 3 and up as well as non-affiliated cheer and hip hop teams for ages 4-18.--}}
{{--                    <br><br>--}}
{{--                    Interested in enrolling in our weekly classes beginning August 3?--}}
{{--                    <br><br>--}}
{{--                    <small><em>All information below is subject to change</em></small>--}}
{{--                    <br><br>--}}
{{--                    <span class="big-gold-text rounded-manual">What are non-affiliated Cheer and Hip Hop teams?</span>--}}
{{--                    <br><br>--}}
{{--                    A non-affiliated cheer and hip hop team does not represent a sports team and is not an “all-star” team.--}}
{{--                    <br><br>--}}
{{--                    <strong>What are the benefits of joining an unaffiliated team vs an all-star or sports affiliated team?</strong>--}}
{{--                    <br>--}}
{{--                    A non-affiliated team is half the cost of an all-star team (with all-star level training)  and the season runs from August-January instead of year-round. Less commitment, half the cost, all the fun!--}}
{{--                    <br><br>--}}
{{--                    <strong>What to bring for evaluations</strong>--}}
{{--                    <br>Everyone makes a team!--}}
{{--                    <br>Athletes must wear form-fitting clothing that will not impede tumbling or stunting skills.  Please have hair pulled back and bring water.--}}
{{--                    <br><br>--}}
{{--                    <span class="big-gold-text rounded-manual">Practice Commitment</span>--}}
{{--                    <br><br>--}}
{{--                    Each team will practice twice a week for 1.5 hours during the weekdays--}}
{{--                    <br>The season runs June-Jan--}}
{{--                    <br>All practices are mandatory--}}
{{--                    <br>Athletes are encouraged to continue training during the offseason February-July--}}
{{--                    <br><br>--}}
{{--                    <span class="big-gold-text rounded-manual">Tuition</span>--}}
{{--                    <br><br>--}}
{{--                    Please see our <a href="https://docs.google.com/document/d/176S1qacF6T8cDufDAmjG_1KYsjd_M5mZ9ELek3cI9Ic/edit?usp=sharing" target="_blank">Parent Handbook</a> for detailed price information--}}
{{--                    <br><br>--}}
{{--                    All fees are paid via autopay. Families will need to have a card or checking account on file. If you wish to pay by cash or check you may do so before the due date.  If payment has not been made by the due date we will charge the card or checking account on file.--}}
{{--                    <br><br>--}}
{{--                    <strong>More important policies</strong>--}}
{{--                    <br>Tuition is non-refundable--}}
{{--                    <br>All athletes must have a waiver signed by a parent or guardian to participate--}}
{{--                    <br>All prices and dates are subject to change--}}
{{--                    <br>Cross over and multi-team discounts--}}
{{--                </p>--}}
{{--                <a href="https://docs.google.com/document/d/176S1qacF6T8cDufDAmjG_1KYsjd_M5mZ9ELek3cI9Ic/edit?usp=sharing" target="_blank">Download Your Parent Handbook Here</a>--}}
{{--            version 3//////////////////////////////////////--}}

                <p class="my-5">
                    <strong>Required Clothes and Shoes:</strong> Athletes must wear form fitting athletic attire and either sneakers or barefoot.  Please bring a water bottle to class.
                    <br><br>
                    <strong>Tuition:</strong> First-month tuition is due at the time of registration.  Tuition payments are due by the 1st  of the month for the next month by Monthly Auto-Pay.   Monthly Auto-Pay, means your monthly tuition payments are automatically deducted from your credit, debit card, or checking account.  There is a $15.00 fee for returned auto-payments.  We do not prorate or refund tuition for missed classes, vacations or studio closures.  Monthly tuition payments are required to keep your account in good standing and to reserve your athlete’s spot in class.  NorCal can not extend any credits or allow any account to go 30 days past due.  We do accept full year payments, with a 5% discount.  If you should choose to withdraw, tuition is not refunded.
                    <br><br>
                    <strong>Withdrawal:</strong> We require a 30 day notice with completion of our Withdrawal Form
                    <br><br>
                    <strong>Missed Classes:</strong> If a student misses class he/she should come to a make-up class. We do not issue refunds for missed classes.  If an instructor is unable to teach and a substitute is not available you will be notified and given a date for a make-up class or a credit to your account for that class.
                    <br><br>
                    <strong>Parent Viewing:</strong> We welcome parents to view most recreational classes from our lobby
                    <br><br>
                    <strong>Pick Up And Drop Off:</strong> Please do not drop your child off more than 5 minutes early or pick up more than 5 minutes late
                    <br><br>
                    <strong>Showcases:</strong> We offer 2 showcases each year for our tumbling and recreational cheer classes; December and June/July.  Participation is optional and there may be additional fees to participate.
                    <br><br>
                    <strong>Bathroom Policy:</strong>  Please have your child use the restroom before class.  Instructors will not be able to leave the gym floor to assist your child.
                    <br><br>
                    <strong>Leaving The Premise:</strong> Athletes should not leave the studio without adult supervision.  If you choose to allow your child to leave the studio you are accepting all responsibility for any occurrences.
                    <br><br>
                    <strong>Food And Drink:</strong> All food and drinks must be kept in the lobby.  Water is allowed in the dance rooms. Athletes are not allowed to chew gum in class.
                    <br><br>
                    <strong>Conduct:</strong> If a student or parent conducts themselves in a manner that is obscene, offensive, violent, aggressive, demeaning or disrespectful we reserve the right to refuse service.

                </p>

            </div>
        </div>
    </div>

@endsection
