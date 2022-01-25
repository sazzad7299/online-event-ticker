@extends('backend.layouts.master')
@section('main_content')
    <div class="container-fluid">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">All Category</h1>
            <a href="{{route('addCategoryForm')}}"  class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" ><i
                    class="fas fa-plus fa-sm text-white-50"></i> Add Category</a>
                      

        </div>
        <table id="dataTable" class="table table-bordered">
            <thead>
              <tr class="text-center" style="background:rgb(35, 35, 245)">
                <th scope="col" class="text-white">#</th>
                <th scope="col" class="text-white">Title</th>
                <th scope="col" class="text-white">Parent</th>
                <th scope="col" class="text-white">Status</th>
                <th scope="col" class="text-white">Photo</th>
                <th class="text-white" scope="col">Action</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($category  as $category )
       
                <tr class="text-center">
                    <td>{{$category->id}}</td>
                    <td>{{$category->title}}</td>
                    <td>
                        @if ($category->parent_id == NULL)
                          Main Category
                        @else
                       <?php    
                        $parent_cat= DB::table('categories')->where('id',$category->parent_id)->get();
                       ?>
                        @endif
                    </td>

                    <td>
                        @if ($category->status=='active')
                            <span class="badge badge-success">{{$category->status}} </span>
                        @else
                        <span class="badge badge-warning">{{$category->status}} </span>
                        @endif
                    </td>
                    <td>
                        <img src="{{asset('images/category/'.$category->photo)}}" alt="" width="100" height="100" style="border-radius:50%">
                    </td>
                    <td>
                        <a href="{{route('editCategory',$category->id)}}"  class="btn btn-primary btn-sm mr-1 edit"><span class="fa fa-edit"></span></a>
                                          
                        <a href="{{route('deleteCategory',$category->id)}}"  class="btn btn-danger btn-sm"><span class="fa fa-trash"></span></a>
                    </td>

                  </tr>
                @endforeach
             
              
            </tbody>
          </table>


    </div>    


    
@endsection

