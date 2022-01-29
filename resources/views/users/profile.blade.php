@extends('layouts.front_master')

@section('content')
<div class="dashboard " style="background:black;padding-top:70px">
</div>
<div class="dashboard1">
  <div class="right-sidebar">
    <ul>
      <li><a href="{{ route('home') }}"  >Dashboard</a></li>
      <li><a href="{{ route('booking') }}" >Booking</a></li>
      <li><a href="#" class="active">Profile</a></li>
    </ul>
  </div>
  <div class="navb">
    <ul>
      <li><a href="{{ route('home') }}" ><em class="lni lni-home"></em></a></li>
      <li><a href="{{ route('booking') }}" ><em class="lni lni-cart-full"></em></a></li>
      <li><a href="{{ route('profile') }}" class="active"><em class="lni lni-user"></em></a></li>
    </ul>
</div>
    <div class="content">
        <div class="grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Account Informations</h4>
                @if(Session::has('flash_massage_success'))  
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong>{!! session('flash_massage_success') !!}</strong>
                    </div>
                @endif
                @if(Session::has('flash_massage_error'))  
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button> 
                        <strong>{!! session('flash_massage_error') !!}</strong>
                    </div>
                @endif
                <p class="card-description">
                 Hi, {{ $user->name }}! You can change you details here.
                </p>
                <form class="forms-sample" action="{{ route('updateDetails') }}" method="POST">
                    @csrf
                  <div class="form-group row">
                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="exampleInputUsername" name="name"  value="{{ $user->name }}" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="exampleInputEmail2" value="{{ $user->email }}" disabled style="text-transform: lowercase">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="exampleInputMobile" class="col-sm-3 col-form-label" >Mobile</label>
                    <div class="col-sm-9">
                      <input type="number" name="phone" class="form-control" id="exampleInputMobile" value="{{ $user->phone }}" required>
                    </div>
                  </div>

                  <button type="submit" class="btn btn-primary me-2">Update Account</button>
                </form>
              </div>
              <div class="card-body">
                <h4 class="card-title">Update Password</h4>
                <form class="forms-sample" method="post" action="{{ route('updatePassword')}}">
                    @csrf
                  <div class="form-group row">
                    <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Current Password</label>
                    <div class="col-sm-9">
                      <input type="password" name="current_pwd" class="form-control" id="current_pwd" placeholder="Current Password"><span id="chkPWD"></span>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">New Password</label>
                    <div class="col-sm-9">
                      <input type="password" name="new_pwd" class="form-control" id="new_pwd" placeholder="New Password">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">Confirm Password</label>
                    <div class="col-sm-9">
                      <input type="password" name="confirm_pwd" class="form-control" id="confirm_pwd" placeholder="Confirm Password">
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary me-2" id="sub">Update Password</button>
                </form>
              </div>
            </div>
        </div>
    </div>
</div>
   
@endsection
