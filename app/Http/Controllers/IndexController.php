<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Course,Menu};
class IndexController extends Controller
{
    public function index(){
        return view('Login');
    }
    public function home(){
        $menus=Menu::all();
        $courses=Course::orderBy('id','desc');
        $top=Course::orderBy('id','asc')->get()->take(4);
        $active=Course::orderBy('id','desc')->get()->take(1);
        return view('welcome')
        ->with('menus',$menus)
        ->with('top',$top)
        ->with('courses',$courses)
        ->with('active',$active)
        ;
    }
}
