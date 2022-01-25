<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Slider;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $sliders = Slider::where('status','1')->get();
        $sliderCount = Slider::where('status','1')->count();
        $event = Event::where('status','active')->take(6)->get();
        return view('index')->with(compact('sliders','sliderCount','event'));
    }

    public function about(){
        return view('about_us');
    }

    public function gallery(){
        return view('gallery');
    }

    public function schedules(){
        return view('schedules');
    }
    
}
