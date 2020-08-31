<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Course,Menu,Messages};
class IndexController extends Controller
{
    public function index(){
        return view('Login');
    }
    public function home(){
        $menus=Menu::all();
        $courses=Course::orderBy('id','desc')->get();
        $top=Course::orderBy('id','asc')->get()->take(4);
        $active=Course::orderBy('id','desc')->get()->first();
        return view('welcome')
        ->with('menus',$menus)
        ->with('top',$top)
        ->with('courses',$courses)
        ->with('active',$active)
        ;
    }
    protected function store(Request $request){
        Messages::create([
            'Name'=>$request->Name,
            'Subject'=>$request->Subject,
            'Email'=>$request->Email,
            'Message'=>$request->Message,
        ]);
        return "true";
    }
    protected function Messages(){
        return view('Messages');
    }
    protected function Api(){
        $messages=Messages::all();
        return $messages;
    }
}
