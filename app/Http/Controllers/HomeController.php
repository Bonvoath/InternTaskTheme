<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }
    public function dashboard2(){
        return view('home.dashboard2');
    }
    public function widgets()
    {
        return view('home.widgets');
    }
    public function chartjs()
    {
        return view('charts.chartjs');
    }
    public function morris()
    {
        return view('charts.morris');
    }
    public function flot()
    {
        return view('charts.flot');
    }
    public function inline()
    {
        return view('charts.inline');
    }
    public function general()
    {
        return view('UI.general');
    }
    public function icons()
    {
        return view('UI.icons');
    }
    public function buttons()
    {
        return view('UI.buttons');
    }
    public function slider(){
        return view('UI.sliders');
    }
    public function timeline()
    {
        return view('UI.timeline');
    }
}
