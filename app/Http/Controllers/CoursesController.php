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
        return view('Courses.index');;
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
        // return $request->all();
        // die();
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
        $course=Course::findOrFail($id);
        if($course){
            $data=['course'=>$course];
            return $data;
        }else{
            $data=['course'=>'Not Found'];
            return $data;
        }
    }

    public function edit($id)
    {
        $course=Course::find($id);
        $menus=Menu::all();
        return view('Courses.Edit')
        ->with('menus',$menus)
        ->with('course',$course);
    }

    public function single($menu){
        $courses=Course::where('Category','=',$menu)->get();
        return view('Courses.Categories')->with('menus',Menu::all())
        ->with('courses',$courses);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function specific($slug)
    {
        $course=Course::where('slug','=',$slug)->get()->first();
        $courses=Course::orderBy('id','desc')->get();
        return view('Courses.Specific')
        ->with('menus',Menu::all())
        ->with('course',$course)
        ->with('courses',$courses);
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
        // dd($request->all());
        $bannerImage=$request->CourseBanner;
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
        $course=Course::find($id)->first();
        $course->CourseTitle=$title;
        $course->slug=$slug;
        $course->Instructor=$instructor;
        $course->Category=$category;
        $course->Rating=$rating;
        $course->Students=$students;
        $course->CourseLink=$link;
        $course->Prerequisites=$req;
        $course->Description=$desc;
        $course->CourseBanner=$bannerImage;
        $course->save();
        Session::flash('success','the course has been successfully Updated');
        return redirect('/home');
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
        if($course){
            $course->delete();
            $data=['Status'=>'success'];
            return $data;
        }
    }
    protected function Top(){
        $course=Course::orderBy('id','asc')->get()->take(1);
        $data=['course'=>$course];
        return $data;
    }
    protected function getCourse(Request $request){
        $course=Course::findOrFail($request->id);
        $data=['course'=>$course];
        Session(['Course'=>$course]);
        return $data;
    }
    protected function SingleCourse($slug){
        $course=Course::where('Slug','=',$slug)->get()->first();
        // dd($course);
        return view('Courses.single')->with('course',$course);
    }
    protected function GetLatest(){
        $course=session()->get('Course');
        $data=['course'=>$course];
        return $data;
    }
    protected function TopRated(){
        $topRated=Course::where('Status','=','1')->get()->take(3);
        $data=['courses'=>$topRated];
        return $data;
    }
    protected function All(){
        $courses=Course::all();
        $data=['courses'=>$courses];
        return $data;
    }
    protected function TopRatedMenu(){
        $top=Course::where('Status','=','2')->get();
        $data=['courses'=>$top];
        return $top;
    }
    protected function High(){
        $courses=Course::orderBy('Views','desc')->get()->take(10);
        $data=['courses'=>$courses];
        return $data;
    }
    protected function Manage(){
        return view('Courses.ViewAll');
    }
}
