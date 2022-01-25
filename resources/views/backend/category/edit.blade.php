@extends('backend.layouts.master')
@section('main_content')
    <div class="container-fluid">
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">All Category</h1>
        <a href="{{route('allCategory')}}"  class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" ><i
                class="  text-white-50"></i> AllCategory</a>
                  

    </div>
        <form action="{{route('updateCategory',$category->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            {{-- @include('backend.partials.messages') --}}
            <div class="form-group">
              <label for="name">Title</label>
              <input type="text" class="form-control" name="title" id="name" aria-describedby="emailHelp" value="{{$category->title}}">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Description</label>
              <textarea name="summary" id="summary" rows="10" cols="80" class="form-control">{{$category->summary }}</textarea>
            </div>
            

            <div class="form-group">
              <label for="exampleInputPassword1">Parent Category (optional)</label>
              <select class="form-control" name="parent_id">
                <option value="">Please select a Parent category</option>
                @foreach ($parent_categories as $parent)
                  <option value="{{ $parent->id }}" {{$parent->id==$parent->id?'selected':''}}>
                    {{ $parent->title }}</option>
                @endforeach
              </select>

            </div>
            <div class="form-group">
                <label for="status" class="col-form-label">Status <span class="text-danger">*</span></label>
                <select name="status" class="form-control">
                    <option value="active">{{$category->status}}</option>

                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
                @error('status')
                <span class="text-danger">{{$message}}</span>
                @enderror
              </div>

            <div>
              <img height="150" width="150" src="{{asset('images/category/'.$category->photo)}}" alt="">
            </div>
            <div class="form-group">
              <label for="image">Category Image (optional)</label>
              <input type="file" class="form-control" name="image" id="image" >
            </div>


            <button type="submit" class="btn btn-primary">Update Category</button>
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
