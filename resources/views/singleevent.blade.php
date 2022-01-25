@extends('layouts.front_master')

@section('content')
<div class="dashboard " style="background:black;padding-top:70px"></div>
<div class="container" id="singleDetails">
    <h1>{{ $eventDetails->title }}</h1>
    <div class="row">
        
        <div class="col-md-7" >
            <img src="{{ asset('images/event/'.$eventDetails->image) }}" alt="{{ $eventDetails->image }}">
        </div>
        <div class="col-md-5">
            <div class="shortDetails">
                <p><span>{{ $eventDetails->price }}৳</span> Per Person</p>
                <hr>
                @if($eventDetails->seat ==0)
                <p><em class="lni-cross-circle">Seat Not Available</em></p>
                @else
                <p>Seat Available</p>
                @endif
                
                <p>Start Date:<?php echo date('d F',strtotime($eventDetails->start_date));?></p>
                <p>End Date:<?php echo date('d F',strtotime($eventDetails->end_date));?></p>
                

            </div>
            <div class="cover">
                <h1>Book your Event</h1>
                <p>Feel Free & Enjoy More</p>
            </div>
            <div class="booking">
                
                <form action="{{ url('cart/'.$eventDetails->id) }}">
            
                    <table id="tickets" class="table">
                        <thead>
                            <tr>
                                <th>Tickets</th>
                                <th>Amount</th>
                                <th>Quantity</th>
                                <th class="text-center"><span class="subtotal">Subtotal</span>

                                </th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr class="total_row">
                                <td colspan="2"><strong>TOTAL</strong>
                                </td>
                                <td class="text-center">
                                    <input name="amount" id="total" value="" disabled>
                                </td>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td><strong>Adult</strong><a href="#" class="tooltip-1" data-placement="top" title="" data-original-title="16 - 65 years old"><sup class="icon-info-4"></sup></a>
                                   
                                </td>
                                <td> <span class="price">{{ $eventDetails->price }}</span></td>
                                <td>
                                    <div class="styled-select">
                                        <select class="form-control"  id="adults" name="seat">
                                            <option value="">Select</option>
                        
                                            <option selected value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </div>
                                </td>
                                <td class="text-center"><span class="subtotal">0</span>
                                </td>
                            </tr>
                            
                            {{-- <tr>
                                <td><strong>Children</strong><a href="#" class="tooltip-1" data-placement="top" title="" data-original-title="Over 65 years old"><sup class="icon-info-4"></sup></a>
                                </td>
                                <td> <span class="price">1290</span></td>
                                <td>
                                    <div class="styled-select">
                                        <select class="form-control"  id="children">
                                            <option value="">Select</option>
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </div>
                                </td>
                                <td class="text-center"><span class="subtotal">0</span>
                                </td>
                            </tr>
                            <tr>
                                <td><strong>Infant</strong> </td>
                                <td> <span class="price">1290</span></td>
                                <td>
                                    <div class="styled-select">
                                        <select class="form-control"  id="infant">
                                            <option value="">Select</option>
                                            <option  value="0">0</option>
                                            <option  value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                        </select>
                                    </div>
                                </td>
                                <td class="text-center"><span class="subtotal">0</span>
                                </td>
                            </tr> --}}
                        </tbody>
                    </table>
                    @if($eventDetails->seat != 0 || $eventDetails->seat === null )
                    <button class="btn btn-common btn-rm" >Book Now</button>
                    @else
                        <button type="button" class="product-addCart-btn  to-cart btn-danger" disabled><i class="fa fa-cart-plus"></i>Seat Not Available</button>
                    @endif
                </form>
            </div>
        </div>
    </div>
    <div class="details">
        <div class="card">
            <div class="card-title">
                <h3>Event Details</h3>
            </div>
            <div class="card-body">
                {!! $eventDetails->detail !!}
            </div>
        </div>
    </div>
</div>

@endsection
