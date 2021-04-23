@extends('layouts.app')
@section('content')

    @include('mobiles')
    @include('headers')

    <div class="container my-5" id="class-schedule">
        <h2 class="text-center text-uppercase">Calendar</h2>
        <table class="table d-flex justify-content-center my-5">
            <tbody>
                <tr>
                    <td>May 1</td>
                    <td class="font-weight-bold">Tuition Due</td>
                </tr>
                <tr>
                    <td>May 8</td>
                    <td class="font-weight-bold">Pinnacle Competition in Vegas</td>
                </tr>
                <tr>
                    <td>May 16</td>
                    <td class="font-weight-bold">Try-Out Prep Skills Camp</td>
                </tr>
                <tr>
                    <td>May 22-23</td>
                    <td class="font-weight-bold">Fall Season Try-Outs</td>
                </tr>
                <tr>
                    <td>June 1</td>
                    <td class="font-weight-bold">Fall Comp Season Starts</td>
                </tr>
                <tr>
                    <td>June 7-11</td>
                    <td class="font-weight-bold">Summer Camp ages 3-5</td>
                </tr>
                <tr>
                    <td>June 14-18</td>
                    <td class="font-weight-bold">Summer Camp ages 6-10</td>
                </tr>
                <tr>
                    <td>June 12-16</td>
                    <td class="font-weight-bold">Summer Camp ages 6-10</td>
                </tr>
                <tr>
                    <td>June 19-23</td>
                    <td class="font-weight-bold">Summer Camp ages 3-5</td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection
