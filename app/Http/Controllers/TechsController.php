<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{TechCategory,Tech};
use Session;
class TechsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('TechHacks.Index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('TechHacks.Create')
        ->with('Hacks',Tech::all())
        ->with('Hack','')
        ->with('Categories',TechCategory::all());
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
        $path='TechHack/images';
        $file->move($path,$newName);
        Tech::create([
            'Title'=>$request->Title,
            'Slug'=>str_slug($request->Title, '-'),
            'IntroText'=>$request->IntroText,
            'Category'=>$request->Category,
            'Description'=>$request->Description,
            'FeaturedImage'=>'/'.$path.'/'.$newName,
        ]);
        Session::flash('success','Hacks Article Created');
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
        $hack=Tech::findOrFail($id);
        $data=['Hack'=>$hack];
        return $data;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hack=Tech::findOrFail($id);
        return view('TechHacks.Edit')
        ->with('Hack',$hack)
        ->with('Categories',TechCategory::all());
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
            'Title'=>'required',
            'IntroText'=>'required',
            'Category'=>'required',
            'Description'=>'required',
        ];
        $this->validate($request,$rules);
        $hack=Tech::findOrFail($id);
        if($hack){
            //if there is an image uploaded
            $file=$request->file('FeaturedImage');
            if($file){
                //delete the previous image
                @unlink($hack->FeaturedImage);
                $newName=time().$file->getClientOriginalName();
                $path='courses/images';
                $file->move($path,$newName);
                $hack->FeaturedImage='/'.$path.'/'.$newName;
            }
            //then update everything about the post
            $hack->Title=$request->Title;
            $hack->IntroText=$request->IntroText;
            $hack->Category=$request->Category;
            $hack->Description=$request->Description;
            $hack->save();
            Session::flash('success','Hack Successfully Updated');
            return redirect()->route('Techs.create');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hack=Tech::findOrFail($id);
        if($hack){
            @unlink($hack->FeaturedImage);
            $hack->delete();
            // $name=Auth::user()->name."json";
           $data=['message'=>'successfully Deleted'];
            return $data;
        }
    }
    public function TechHacks(){
        return view('TechHacks');
    }
    protected function Categories(Request $request){
        $data=TechCategory::create([
            'Category'=>$request->Category
        ]);
        if($data){
            $message=['Status'=>'Success'];
            return $message;
        }
    }
    protected function getCategories(){
        $categories=TechCategory::all();
        if(count($categories)>0){
            $data=['Categories'=>$categories];
            return $data;
        }else{
            $data=['message'=>'No data Found'];
            return back();
        }
    }
    protected function deleteCat(Request $request){
        $category=TechCategory::findOrFail($request->id);
        if($category){
            $category->delete();
            $data=['Message'=>'Category Successfully Deleted'];
            return $data;
        }else{
            $data=['Message'=>'Category Not Found'];
            return $data;
        }
    }
    protected function getAll(){
        //get all hacks '
        $hacks=Tech::all();
        $data=['Hacks'=>$hacks];
        return $data;
    }
}
