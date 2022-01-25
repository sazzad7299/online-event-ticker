@extends('layouts.front_master')

@section('content')
<div class="dashboard " style="background:black;padding-top:70px"></div>

<section id="cart_items">
    <div class="container">
        <div class="breadcrumbs">
            <ol class="breadcrumb">
              <li><a href="{{ url('/') }}">Home</a></li>
              <li class="active"> / Shopping Cart</li>
            </ol>
        </div>
        @if(Cart::count() > 0)
        <div class="table-responsive cart_info">
            <table class="table table-condensed">
                <thead>
                    <tr class="cart_menu">
                        <td class="image">Item</td>
                        <td class="description">Event</td>
                        <td class="price">Price</td>
                        <td class="quantity">Quantity</td>
                        <td class="total">Total</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach(Cart::content() as $row)
                    <tr>
                        <td class="cart_product">
                            <a ><img src="{{ asset('images/event/'.$row->model->image) }}" alt="" style="width:100px"></a>
                        </td>
                        <td class="cart_description">
                            <h4><a href="{{ url('event/'.$row->model->id) }}">{{ $row->name }}</a></h4>
                            <p>{{ $row->model->venue }}</p>
                        </td>
                        <td class="cart_price">
                            <p>৳{{ $row->price; }}</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="cart_quantity_button">
                                <a class="cart_quantity_up" href="{{ url('cart/increment/'.$row->rowId) }}"> + </a>
                                <input class="cart_quantity_input" type="text" name="quantity" value="{{ $row->qty }}" autocomplete="off" size="2" disabled style="text-align: center">
                                @if($row->qty > 1)
                                <a class="cart_quantity_down" href="{{ url('cart/decrement/'.$row->rowId) }}"  disabled> - </a>
                                @endif
                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">৳{{ $row->total; }}</p>
                            <a class="cartDelete" href="{{ url('cart/delete/'.$row->rowId) }}">x</a>
                        </td>
                        <td class="cart_delete">
                            <a class="cart_quantity_delete" href=""><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <hr>
            <div class="total_area" style="float:right">
                <ul>
                    <li>Cart Sub Total <span>৳{{ Cart::subtotal() }}</span></li>
                    <li>Eco Tax <span>৳0</span></li>
                    {{-- <li>Shipping Cost <span>Free</span></li> --}}
                    <li>Total <span>৳{{ Cart::total() }}</span></li>
                </ul>
                    <a class="btn btn-default check_out" href="{{ url('checkout') }}" style="background:rgb(25, 41, 187)">Check Out</a>
            </div>           
        </div>
        @else
        <p>Cart Item empty <a href="{{ url('/') }}">Continue Booking</a></p>
        @endif
    </div>
</section> <!--/#cart_items-->


@endsection
