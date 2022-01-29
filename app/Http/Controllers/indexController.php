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
        $events =Event::where('status','active')->orderBy('start_date', 'asc')->take(3)->get();
        return view('index')->with(compact('sliders','sliderCount','event','events'));
    }

    public function about(){
        return view('about_us');
    }

    public function gallery(){
        return view('gallery');
    }

    public function schedules(){
        $events =Event::where('status','active')->orderBy('start_date', 'asc')->take(6)->get();
        return view('schedules')->with(compact('events'));
    }
    
}
