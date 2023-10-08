<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    
    public function dashbord_v2()
    {
        return view('Backend.Container.Dashboard.dashbord-v2');
    }
    public function dashbord_v3()
    {
        
        return view('Backend.Container.Dashboard.dashbord-v3');
    } 
    public function widgets()
    {
        return view('Backend.Container.widgets');
    }
    
    




    public function chartjs()
    {
        return view('Backend.Container.Charts.chartjs');
    }public function flot()
    {
        return view('Backend.Container.Charts.flot');
    }public function inline()
    {
        return view('Backend.Container.Charts.inline');
    }public function uplot()
    {
        return view('Backend.Container.Charts.uplot');
    }
    
    public function calendar()
    {
        return view('Backend.Container.calendar');
    }
    

    public function gallery()
    {
        return view('Backend.Container.gallery');
    }
    public function sliders()
    {
        return view('Backend.Container.sliders');
    }
    public function kanban()
    {
        return view('Backend.Container.kanban');
    }
    
    public function tables()
    {
        return view('Backend.Container.tables');
    }


    public function webpage()
    {
        return view('Frontend.home');
    }
    public function home() 
    {
        return view('Frontend.Container.Home.home1');
    }
    public function about() 
    {
        return view('Frontend.Container.about');
    }
    public function services() 
    {
        return view('Frontend.Container.services');
    }
    public function works() 
    {
        return view('Frontend.Container.gallery-regular');
    }
}
