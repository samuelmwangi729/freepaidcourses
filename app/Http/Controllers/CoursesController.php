<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Str;
use App\Course;
use Session;
use App\Menu;
class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Courses.index')->with('courses',Course::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus=Menu::all();
        return view('Courses.Index')->with('menus',$menus);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'CourseTitle'=>'required|unique:courses',
            'Instructor'=>'required',
            'Rating'=>'required',
            'Students'=>'required',
            'CourseLink'=>'required',
            'Category'=>'required',
            'Prerequisites'=>'required',
            'Description'=>'required',
            'CourseBanner'=>'required'
        ]);
        $bannerImage=$request->CourseBanner;
        // $newName=time().$bannerImage->getClientOriginalName();
        // //upload the image to the server and a specific directory
        // $bannerImage->move('uploads/courses',$newName);
        //Assign the variables
        $title=$request->CourseTitle;
        $slug=str_slug($title);
        $instructor=$request->Instructor;
        $category=$request->Category;
        $rating=$request->Rating;
        $students=$request->Students;
        $link=$request->CourseLink;
        $req=$request->Prerequisites;
        $desc=$request->Description;
        Course::create([
            'CourseTitle'=>$title,
            'slug'=>$slug,
            'Instructor'=>$instructor,
            'Category'=>$category,
            'Rating'=>$rating,
            'Students'=>$students,
            'CourseLink'=>$link,
            'Prerequisites'=>$req,
            'Description'=>$desc,
            'CourseBanner'=>$bannerImage,
        ]);
        Session::flash('success','the course has been successfully uploaded');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course=Course::find($id);
        return view('Courses.Single')->with('course',$course);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course=Course::find($id);
        $course->destroy($id);
        Session::flash('error','the course successfully Deleted');
        return back();
    }
}
