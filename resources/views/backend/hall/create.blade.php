@extends('backend.layouts.master')
@section('main_content')
    <div class="container-fluid">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Event</h1>
        <a href="{{route('allEvent')}}"  class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" ><i
                class=" text-white-50"></i>All Event</a>                  
    </div>
        <form action="{{route('storeEvent')}}" method="post" enctype="multipart/form-data">
            @csrf
            {{-- @include('backend.partials.messages') --}}
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" name="title" id="name"  placeholder="Enter Event Name" value="{{old('title')}}">
              @error('title')
              <span class="text-danger">{{$message}}</span>
            @enderror
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Description</label>
              <textarea id="summary" name="detail" rows="8" cols="80" class="form-control" value="{{old('detail')}}"> </textarea>

            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Venue</label>
              <input type="text" class="form-control" name="venue" id="name" aria-describedby="emailHelp" value="{{old('venue')}}" placeholder=" Event Venue Name">

            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Event Start Date</label>
              <input type="date" class="form-control " name="start_date" id="name" aria-describedby="emailHelp" value="{{old('start_date')}}" placeholder="End Date Of Event">
              @error('start_date')
              <span class="text-danger">{{$message}}</span>
              @enderror
              
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Event End Date</label>
              <input type="date" class="form-control " name="end_date" id="name" aria-describedby="emailHelp" value="{{old('end_date')}}" placeholder="End Date Of Event">

              @error('end_date')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>
            
            <div class="form-group">
              <label for="exampleInputPassword1">Parent Category (optional)</label>
              <select class="form-control" name="category_id">
                <option value="">Please select a Parent category</option>
                @forelse ($parent_categories as $category)
                  <option value="{{ $category->id }}">{{ $category->title }}</option>
                @empty
                {{$message}}
                @endforelse
              </select>
             

            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Ticket Price <span style="color: #ccc">Per Person</span></label>
              <input type="number" class="form-control " name="price" aria-describedby="emailHelp" value="{{old('seat')}}" >
              @error('price')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Seat</label>
              <input type="number" class="form-control " name="seat" aria-describedby="emailHelp" value="{{old('seat')}}" >
              @error('seat')
              <span class="text-danger">{{$message}}</span>
              @enderror
            </div>
            
            <div class="form-group">
                <label for="status" class="col-form-label">Status <span class="text-danger">*</span></label>
                <select name="status" class="form-control">
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
                @error('status')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>
            <div class="form-group">
              <label for="image">Event Image</label>
              <input type="file" class="form-control" name="image" id="image" >
              @error('image')
                <span class="text-danger">{{$message}}</span>
              @enderror
            </div>


            <button type="submit" class="btn btn-primary">Add Event</button>
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