<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Course,Menu,Messages,Blog,Tech,Cracks,CracksMenu,TechCategory};
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
    protected function CourseCount(){
        $courses=Course::count();
        return $courses;
    }
    protected function TechCount(){
        $techs=Tech::count();
        return $techs;
    }
    protected function BlogCount(){
        $blogs=Blog::count();
        return $blogs;
    }
    protected function MessageCount(){
        $messages=Messages::count();
        return $messages;
    }
    protected function CracksCount(){
        $cracks=Cracks::count();
        return $cracks;
    }
    protected function CracksMenuCount(){
        $cmenu=CracksMenu::count();
        return $cmenu;
    }
    protected function TechsMenuCount(){
        $count=TechCategory::count();
        return $count;
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
    protected function WelcomeBlog(){
        $blog=Blog::orderBy('id','desc')->get()->take(4);
        return $blog;
    }
    protected function WelcomeHack(){
        $hack=Tech::orderBy('id','desc')->get()->take(4);
        return $hack;
    }
}
