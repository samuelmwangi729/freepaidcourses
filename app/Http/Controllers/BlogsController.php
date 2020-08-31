<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogMenu;
use App\Blog;
use Session;
class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Categories=BlogMenu::all();
        return view('Blogs.Create')
        ->with('blog',False)
        ->with('Categories',$Categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules=[
            'Title'=>'required|unique:teches',
            'IntroText'=>'required',
            'Category'=>'required',
            'Description'=>'required',
            'FeaturedImage'=>'required',
        ];
        $this->validate($request,$rules);
        $file=$request->file('FeaturedImage');
        $newName=time().$file->getClientOriginalName();
        $path='Blogs/Images';
        $file->move($path,$newName);
        Blog::create([
            'BlogTitle'=>$request->Title,
            'Slug'=>str_slug($request->Title, '-'),
            'IntroText'=>$request->IntroText,
            'Category'=>$request->Category,
            'Description'=>$request->Description,
            'FeaturedImage'=>'/'.$path.'/'.$newName,
        ]);
        Session::flash('success','Blog Post Successfully Created');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog=Blog::findOrFail($id);
        return $blog;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Categories=BlogMenu::all();
        $blog= $blog=Blog::findOrFail($id);
        return view('Blogs.Edit')
        ->with('Categories',$Categories)
        ->with('blog',True)
        ->with('Blog',$blog);
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
        $rules=[
            'Title'=>'required|unique:teches',
            'IntroText'=>'required',
            'Category'=>'required',
            'Description'=>'required',
        ];
        $this->validate($request,$rules);
        $blog=Blog::findOrFail($id);
        // dd($blog);
        if($request->file('FeaturedImage')){
            @unlink($blog->FeaturedImage);
            $file=$request->file('FeaturedImage');
            $newName=time().$file->getClientOriginalName();
            $path='Blogs/Images';
            $file->move($path,$newName);
            $blog->FeaturedImage='/'.$path.'/'.$newName;
        }
           $blog->BlogTitle=$request->Title;
           $blog->Slug=str_slug($request->Title,'-');
           $blog->IntroText=$request->IntroText;
           $blog->Category=$request->Category;
           $blog->Description=$request->Description;
           $blog->save();
           Session::flash('success','Blog Post Successfully Updated');
           return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog=Blog::findOrFail($id);
        // return $blog;
        if($blog){
            @unlink($blog->FeaturedImage);
            $blog->delete();
            return "true";
        }
    }
    protected function Blog(){
        return view('Blog');
    }
    protected function AboutUs(){
        return view('AboutUs');
    }
    protected function ContactUs(){
        return view('Contact');
    }
    protected function Menus(){
        return view('Blogs.Menus');
    }
    protected function SaveCat(Request $request){
        $rule=['Name'=>'required|unique:blog_menus'];
        $error=$this->validate($request,$rule);
        //if there is no any error, continue
        if(!$error){
            return $error;
        }
        $name=BlogMenu::create([
            'Name'=>$request->Name
        ]);
        if($name){
            return "true";
        }else{
            return "false";
        }
    }
    protected function BlogCat(){
        $categories=BlogMenu::all();
        return $categories;
    }
    protected function dcat(Request $request){
        $id=$request->id;
        //find the category
        $category=BlogMenu::findOrFail($id);
        if($category){
            $category->delete();
            return "true";
        }else{
            return "false";
        }
        //the category is successfully deleted
    }
    protected function Fetch(){
        $blogs=Blog::all();
        return $blogs;
    }
    protected function Categories(){
        $categories=BlogMenu::all();
        return $categories;
    }
    protected function Blogs(){
        $blogs=Blog::all();
        return $blogs;
    }
    protected function SingleBlog($slug){
        $blog=Blog::where('Slug','=',$slug)->get()->first();
        return view('Blogs.SingleView')->with('blog',$blog);
    }
}
