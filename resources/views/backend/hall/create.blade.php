@extends('backend.layouts.master')
@section('main_content')
    <div class="container-fluid">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Add Hall/Center</h1>
        <a href="{{route('viewHall')}}"  class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" ><em class=" text-white-50"></em>All Hall/Center</a>                  
    </div>
        @if(Session::has('flash_message_error'))
        <div class="alert alert-error alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{!! session('flash_message_error') !!}</strong>
        </div>
        @endif   
        @if(Session::has('flash_message_success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button> 
                <strong>{!! session('flash_message_success') !!}</strong>
        </div>
        @endif
        <form action="{{route('addHall')}}" method="post" enctype="multipart/form-data">
            @csrf
            {{-- @include('backend.partials.messages') --}}
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" id="name"  placeholder="Enter Hall Name" required value="{{old('title')}}">

            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Description</label>
              <textarea id="summary" name="desc" rows="8" cols="80" class="form-control" value="{{old('detail')}}" required> </textarea>
            </div> 
            <div class="form-group">
                <label for="fname" class="control-label">Day Price:</label>
                 <input type="number" class="form-control" name="dPrice" min="0" required>
            </div> 
            <div class="form-group">
                <label for="fname" class="control-label">Night Price:</label>
                 <input type="number" class="form-control" name="nPrice" min="0" required >
            </div>  
            <div class="form-group">
                <label for="fname" class="control-label">Fullday Price:</label>
                 <input type="number" class="form-control" name="fPrice"  min="0" required>
            </div>      
          
            <div class="form-group">
              <label for="image">Hall/Center Image</label>
              <input type="file" class="form-control" name="image" id="image" required >
            </div>

            <div class="form-group">
                <label for="fname" class="control-label col-form-label">Enable:</label>
                <input class="mt-2" type="checkbox"  name="status" id="status" value="1">
            </div>
            <button type="submit" class="btn btn-primary">Add Hallroom</button>
          </form>
    </div>
@endsection


<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>

<script type="text/javascript">
function test()
{
  alert('tesing');
}
  $(document).ready(function() {
    $('#summary').summernote();
  });
  </script>