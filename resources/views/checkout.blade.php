@extends('layouts.front_master')

@section('content')
<div class="dashboard " style="background:black;padding-top:70px"></div>

<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
              <li><a href="{{ url('/') }}">Home</a></li>
              <li class="active"> / Checkout</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-md-4 card ">
                <div class="container mt-4">
                    <h4>Cart({{ Cart::content()->count() }})</h4>
                   
                    @foreach(Cart::content() as $row)
                    <tr>
                        <td>{{ $row->name }}</td>
                        <td>৳{{ $row->subtotal }}</td>
                    </tr>
                    @endforeach
                    <hr>
                    <td>Total:{{ Cart::total() }}</td>
                </div>
            </div>
            <div class="col-md-8  card">
                <div class="container">
                   <form action="{{ url('pay') }}" class="mt-4" method="POST">
                    {{ csrf_field() }}
                    <div class="from-group">
                        <label for="name"> Name:</label>
                        <input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}"required >
                    </div>
                    <div class="from-group">
                        <label for="name"> Email:</label>
                        <input type="mail" class="form-control" name="email" value="{{ Auth::user()->email }}" style="text-transform: lowercase"required >
                    </div>
                    <div class="from-group">
                        <label for="name"> Number:</label>
                        <input type="number" class="form-control" name="phone" value="{{ Auth::user()->phone }}"required >
                    </div>
                    <div class="payment-options">
                        <span>
                            <label><strong>Select Payment Method:</strong>
                        </span>
                        <span>
                            <label><input type="radio" name="payment_method" class="payment" checked value="rocket" id="rocket"> <strong>Rocket</strong></label>
                        </span>
                        <span>
                            <label><input type="radio" name="payment_method" class="payment" value="bKash" id="bKash"><strong>bKash</strong> </label>
                        </span>
                    </div>
                    <div class="rocket">
                        Rocket Merchent AC No:
                        017867401071
                    </div>
                    <div class="bKash">
                        Bkash Merchent AC No:
                        01786740107
                    </div>
                    <div class="payment_field">
                        <input type="text" name="transaction_number" placeholder="Transaction Number" required>
                        <input type="text" name="transaction_id" placeholder="Transaction ID" required>
                    </div>
                    <button  type="submit" class="btn btn-success" onclick=" return selectPaymentMethod()">Check Out</button>
                    
                   </form>
                </div>
            </div>
        </div>
    </div>
</section> <!--/#cart_items-->


@endsection
