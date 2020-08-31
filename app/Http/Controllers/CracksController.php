<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CracksMenu;
use App\Cracks;
use Session;
class CracksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Cracks.Menus');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Categories=CracksMenu::all();
        return view('Cracks.Create')
        ->with('crack',False)
        ->with('Categories',$Categories);
    }
    protected function Menus(){
        $menus=CracksMenu::all();
        return $menus;
    }
    protected function getAll(){
        $cracks=Cracks::all();
        return $cracks;
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
        $path='Cracks/Images';
        $file->move($path,$newName);
        Cracks::create([
            'CrackTitle'=>$request->Title,
            'Slug'=>str_slug($request->Title, '-'),
            'IntroText'=>$request->IntroText,
            'Category'=>$request->Category,
            'Description'=>$request->Description,
            'FeaturedImage'=>'/'.$path.'/'.$newName,
        ]);
        Session::flash('success','Blog Post Successfully Created');
        return back();
    }
    protected function Specific($name){
        $crack=Cracks::where('Category','=',$name)->get();
        return $crack;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cracks=Cracks::findOrFail($id);
        return view('Cracks.Edit')
        ->with('crack',True)
        ->with('Categories',CracksMenu::all())
        ->with('Crack',$cracks);
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
        $crack=Cracks::findOrFail($id);
        // dd($blog);
        if($request->file('FeaturedImage')){
            @unlink($crack->FeaturedImage);
            $file=$request->file('FeaturedImage');
            $newName=time().$file->getClientOriginalName();
            $path='Cracks/Images';
            $file->move($path,$newName);
            $crack->FeaturedImage='/'.$path.'/'.$newName;
        }
           $crack->CrackTitle=$request->Title;
           $crack->Slug=str_slug($request->Title,'-');
           $crack->IntroText=$request->IntroText;
           $crack->Category=$request->Category;
           $crack->Description=$request->Description;
           $crack->save();
           Session::flash('success','Crack Successfully Updated');
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
        $crack=Cracks::findOrFail($id);
        if($crack){
            @unlink($crack->FeaturedImage);
            $crack->delete();
            return "true";
        }
    }
    public function Cracks(){
        return view('Cracks');
    }
    public function CracksMenu(Request $request){
        // return $request->all();
        $this->validate($request,[
            'Name'=>'required|unique:cracks_menus'
        ]);
        CracksMenu::create([
            'Name'=>$request->Name
        ]);
        return "true";
    }
    public function getCracksMenu(){
        $menus=CracksMenu::all();
        return $menus;
    }
    public function cDelete(Request $request){
        $menu=CracksMenu::findOrFail($request->id);
        if($menu){
            $menu->delete();
            return "true";
        }
    }
    protected function All(){
        return view('Cracks.All');
    }
    protected function Api(){
        $cracks=Cracks::all();
        return $cracks;
    }
    protected function Single($id){
        $single=Cracks::findOrFail($id);
        return $single;
    }
    protected function SingleCrack($slug){
        $crack=Cracks::where('Slug','=',$slug)->get()->first();
        return view('Cracks.SingleCrack')->with('crack',$crack);
    }
}
