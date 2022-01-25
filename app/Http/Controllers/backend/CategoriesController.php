<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use App\Models\Category;
use File;

class CategoriesController extends Controller
{
    public function allCategory()
    {
        $category =Category::all();
      //  return $category;
      
        return view('backend.category.index',compact('category'));
    }
    public function addCategoryForm()
    {
        $parent_categories = Category::where('parent_id',NULL)->orderBy('title','ASC')->get();
        $message = "No parent category";
        
        return view('backend.category.create',compact('parent_categories','message'));
    }
    public function storeCategory(Request $request)
    {
       
        $request->validate([
            'title'=>'required|unique:categories,title',
            'image'=>'required',

        ]);
       
        $category = new Category();
     
        if ($request->image) {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $name = time() . '-' . $category->id . '.' . $ext;
            $path = "images/category";
            $file->move($path, $name);
            
        }
         
         
        $category->title = $request->title;
        $category->slug = Str::slug($request->title);
        $category->summary = $request->summary;
        $category->photo = $name;
        $category->status = $request->status;
        $category->parent_id = $request->parent_id;
        $category->save();
        return back()->with('success','category added successfully');

    }
    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $category->delete();
        return back()->with('error','category delete successfully');

    }
    public function editCategory($id)
    {
        $parent_categories = Category::where('parent_id',NULL)->orderBy('title','ASC')->get();

        $category = Category::find($id);
       return view('backend.category.edit',compact('category','parent_categories'));
    }
    public function updateCategory(Request $request, $id)
    {
        $request->validate([
            'title'=>'required',

        ]);
       
        $category = Category::find($id);
        $category->title = $request->title;
        $category->slug = Str::slug($request->title);
        $category->summary = $request->summary;
        $category->status = $request->status;
        $category->parent_id = $request->parent_id;
     
        if ($request->image) {
            if(File::exists('images/category/'.$category->image)){
                File::delete('images/category/'.$category->image);
            }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $name = time() . '-' . $category->id . '.' . $ext;
            $path = "images/category";
            $file->move($path, $name);
            $category->photo = $name;

            
        }        
     
       
        $category->save();
        return redirect()->route('allCategory')->with('success','category update successfully');;
    }

}
