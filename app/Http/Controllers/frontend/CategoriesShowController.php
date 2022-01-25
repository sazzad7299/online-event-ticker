<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Event;

class CategoriesShowController extends Controller
{
    //

    function all_category(){
        $categories=Category::orderBy('id','desc')->paginate(9);
        return view('frontend.categorie_show',['categories'=>$categories]);
    }
    function single_cat_page($id){
        $events=Event::where('category_id',$id)->orderBy('id','desc')->paginate(9);
       return view('frontend.single_cat_event',['event'=>$events]);
   }
}
