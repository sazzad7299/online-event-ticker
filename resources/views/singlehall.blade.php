@extends('layouts.front_master')

@section('content')
<div class="dashboard " style="background:#000000;padding-top:70px"></div>
<div class="hall-banner" style="background-image: url('/assets/img/hall/{{ $hall->image }}')">
    <h1>{{ $hall->name }}</h1>
</div>
<div class="container">
    <div class="price-area">
        <p>Day: <span>{{ $hall->dPrice }}৳</span></p>
        <p>Night: <span>{{ $hall->nPrice }}৳</span></p>
        <p>Fullday: <span>{{ $hall->fPrice }}৳</span></p>
    </div>
    <div class="text-area">
        <h2>Details</h2>
        {!! $hall->desc !!}
    </div>
    <div class="reservation">
        <h1>Request For Reservation</h1>
        <p>If you need any hall room or anything fill up the form</p>

            <form method="POST" action="{{ route('reqHall') }}">
                @csrf
                <input type="hidden" name="hall_name" value="{{ $hall->name }}">
                <div class="row mb-3">
                    
                    <input id="name" type="text" class="form-control col-md-5" name="name" placeholder="Enter Your Name" required>
                    <input id="email" type="email" class="form-control col-md-5"  name="email" placeholder="Enter Your Email"  required>
                    <input id="contact" type="number" name="contact" class="form-control col-md-5" placeholder="Phone Number" required>
                    <input id="date" type="date" name="date" class="form-control col-md-5" placeholder="Select Date" required>
                    <select name="ocation" id="ocation" class="form-control col-md-5" required>
                        <option value="Birthday">Birthday</option>
                        <option value="Birthday">Birthday</option>
                        <option value="Birthday">Birthday</option>
                        <option value="Birthday">Birthday</option>
                        <option value="Birthday">Birthday</option>
                    </select>
                    <select name="time" id="ocation" class="form-control col-md-5" required>
                        <option value="Day">Select Time</option>
                        <option value="Day">Day</option>
                        <option value="Night">Night</option>
                        <option value="Fullday">Fullday</option>
                    </select>
                    <input id="person" type="number" class="form-control col-md-5" name="person" placeholder=" How many Person's" required>
                    <input id="budget" type="text" class="form-control col-md-5" name="budget" placeholder="Your Budget(TK)" required>
                </div>
                <div class="row mb-0" style="justify-content: center">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Send Request') }}
                    </button>
                </div>
            </form>

    </div>
    
</div>

@endsection
