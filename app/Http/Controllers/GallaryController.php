<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Photo;

class GallaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $album=Album::all();

        
        return view('welcome')->with('album',$album);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        
        
     return view("createAlbum");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $album =new Album();
        $album->name=$request->input('name');
        $album->bio=$request->input('bio');
        $album->image=$request->input('image');
        dd($album);
        $album->save();
        
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
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
        //
    }

    //create Album
    public function upload(Request $request){
        $album =new Album();
        $album->name=$request->input('name');
        $album->bio=$request->input('bio');
    
        // $file=$request->input('file');
        
       //getting file name with extension EXAMPLE jpg
        $filenamewithext = $request->file('file')->getClientOriginalName();
        //get file name without extension example jpg
        $filename=pathinfo($filenamewithext,PATHINFO_FILENAME);
        //get extension
        $extension = $request->file('file')->getClientOriginalExtension();
        //file name to store with time 
        $filenametostore=$filename.'_'.time().'.'.$extension;
        //save file name wih path in storage folder
        $path=$request->file('file')->storeAs('public/Album_cover',$filenametostore);
       
        $album->image=$filenametostore;
        $album->save();
        

    

        return redirect('/');
    }

    //photos
    public function photos($id){

        $album=Album::find($id);
        $photos=$album->photo;
     
        $back=back();
        return view('photos')->with( 'photos',$photos)->with('id',$id)->with('back',$back);
    }
   
    public function photoscreate($id){

    
     
        return view('createphotos')->with('id',$id);
    }

    
    public function photoupload(Request $request,$id){

        $photo =new Photo();
        $photo->name=$request->input('name');
        $photo->bio=$request->input('bio');
        $photo->album_id=$id;
    
        // $file=$request->input('file');
        
       //getting file name with extension EXAMPLE jpg
        $filenamewithext = $request->file('file')->getClientOriginalName();
        //get file name without extension example jpg
        $filename=pathinfo($filenamewithext,PATHINFO_FILENAME);
        //get extension
        $extension = $request->file('file')->getClientOriginalExtension();
        //file name to store with time 
        $filenametostore=$filename.'_'.time().'.'.$extension;
        //save file name wih path in storage folder
        $path=$request->file('file')->storeAs('public/Album_cover',$filenametostore);
       
        $photo->image=$filenametostore;
        $photo->save();
     
        return back();
    }

    public function allphotos(){

        $photos=Photo::all();
        
     
        $back=back();
        return view('photos')->with( 'photos',$photos)->with('id','0')->with('back',$back);
    }
    

}
