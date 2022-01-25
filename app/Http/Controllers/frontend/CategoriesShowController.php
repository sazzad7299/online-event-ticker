<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoriesShowController extends Controller
{
    //

    function all_category(){
        $categories=Category::orderBy('id','desc')->paginate(9);
        return view('frontend.categorie_show',['categories'=>$categories]);
    }
}
