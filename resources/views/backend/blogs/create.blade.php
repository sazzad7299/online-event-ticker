@extends('backend.layouts.master')
@section('main_content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add Blog</h1>
            <a href="{{ route('blog.index') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><em
                    class=" text-white-50"></em>All Blogs</a>
        </div>
        @if (Session::has('flash_message_error'))
            <div class="alert alert-error alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{!! session('flash_message_error') !!}</strong>
            </div>
        @endif
        @if (Session::has('flash_message_success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{!! session('flash_message_success') !!}</strong>
            </div>
        @endif
        <form action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div
                class="col-md-6 col-sm-6 col-xs-6 form-group @error('title') has-error has-danger has-feedback @enderror">
                <label for="title">Title</label>
                <input type="text" placeholder="Title" class="form-control" name="title"
                    id="title" value="{{ old('title') }}">
                @error('title')
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                    <p class='text-danger'>{{ $message }}</p>
                @enderror
            </div>
            <div
                class="col-md-6 col-sm-6 col-xs-6 form-group @error('category') has-error has-danger has-feedback @enderror">
                <label for="title">Category</label>
                <select name="category" id="category" class="form-control">
                    <option value="" style="display: none" selected>Select Category</option>
                    @foreach ($header_categories as $c)
                        <option value="{{ $c->id }}"> {{ $c->title }} </option>
                    @endforeach
                </select>

                @error('category')
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                    <p class='text-danger'>{{ $message }}</p>
                @enderror
            </div>
            <div
                class="col-md-12 col-sm-12 col-xs-12 form-group @error('content') has-error has-danger has-feedback @enderror">
                <label for="content">Description:</label>
                <textarea id="summary" name="content" rows="8" cols="80" class="form-control" value="{{old('detail')}}" required> </textarea>
                @error('content')
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                    <p class='text-danger'>{{ $message }}</p>
                @enderror
            </div>
            <div
                class="col-md-6 col-sm-12 col-xs-12 form-group @error('image') has-error has-danger has-feedback @enderror">
                <label for="tag">Image:</label>
                <input type="file" name="image" id="image" class="form-control">
                @error('image')
                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                    <p class='text-danger'>{{ $message }}</p>
                @enderror

            </div>
            <div class="form-group">
                <label for="fname" class="control-label col-form-label">Enable:</label>
                <input class="mt-2" type="checkbox"  name="status" id="status" value="1">
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                <input type="submit" value="Submit" class="btn btn-primary">
            </div>
        </form>
    </div>

@endsection


<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>

<script type="text/javascript">
    function test() {
        alert('tesing');
    }
    $(document).ready(function() {
        $('#summary').summernote();
    });
</script>
