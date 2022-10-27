@extends('backend.layouts.master')
@section('main_content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">AlL Blogs</h1>
            <a href="{{ route('blog.create') }}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                    class="fas fa-plus fa-sm text-white-50"></i> Add Blog</a>


        </div>
        <table id="dataTable" class="table table-bordered">
            <thead>
              <tr class="text-center" style="background:rgb(35, 35, 245)">
                <th scope="col" class="text-white">Image</th>
                <th scope="col" class="text-white">Title</th>
                <th scope="col" class="text-white">Category</th>
                <th scope="col" class="text-white">Status</th>

                <th class="text-white" scope="col">Action</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $blog)
                <tr>
                    <td><img src="{{asset('images/blog/small/'.$blog->image)}}" alt=""></td>
                    <td>{{$blog->title}}</td>
                    <td>{{$blog->category->title}}</td>
                    <td>@if ($blog->status==1) <span class="label label-primary">Active</span>@else<span class="label label-danger">Inactive</span> @endif</td>
                    <td>
                        <a href="{{ route('blog.edit', [$blog->id]) }}" class="btn btn-sm btn-primary mr-1"> <i class="fa fa-edit text-inverse m-r-10"></i> </a>
                        <form action="{{ route('blog.destroy', [$blog->id]) }}" class="mr-5 pull-left" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger"> <i class="fa fa-trash text-white"></i> </button>
                        </form>
                    </td>
                  </tr>
                @endforeach

            </tbody>
          </table>


    </div>



@endsection

