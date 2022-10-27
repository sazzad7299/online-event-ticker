<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Cviebrock\EloquentSluggable\Services\SlugService;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::with('category')->get();
        return view('backend.blogs.list',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('backend.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data = $request->all();
       $request->validate(
        [
            'title' => 'required',
            'content'=> 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048',
            'category'=>'required'

        ],
        [
            'title.required' => 'Enter :attribute First',
            'content.required' => 'Enter :attribute First',
            'image.required' => 'Upload a image is required for create a blog',
            'category.required'=>'Category Field Must be selected',
        ]
    );

    $data = $request->all();
    // echo "<pre>";print_r($data);die;
    $blog = new Blog;
    $blog->title = $data['title'];
    $blog->slug = SlugService::createSlug(Blog::class, 'slug', $request->title);
    $blog->description = $data['content'];
    if($request->hasfile('image')){
        $image = $request->file('image');
        $input['file'] = time().'.'.$image->getClientOriginalExtension();

    $destinationPath1 = public_path('/images/blog/small/'.$input['file']);
    $destinationPath2 = public_path('/images/blog/medium/'.$input['file']);
    $destinationPath3 = public_path('/images/blog/large/'.$input['file']);
    Image::make($image)->resize(1500,700)->save($destinationPath3);
    Image::make($image)->resize(360,280)->save($destinationPath2);
    Image::make($image)->resize(null,80,function ($constraint) {
        $constraint->aspectRatio();
    })->save($destinationPath1);

    $blog->image = $input['file'];
    }
    if(!empty($data['status'])){
        $blog->status=$data['status'];
    }else{
        $blog->status=0;
    }
    $blog->cat_id=$data['category'];
   $saved = $blog->save();

    if(!$saved){
        return back()->with("flash_message_error","Sorry! Try again");
    }else{
        return back()->with("flash_message_success","Blog Created Successfully");
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
