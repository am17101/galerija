<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;

class AlbumsController extends Controller
{
    public function index(){
      $albums = Album:: with('photos')->get();
      return view('albums.index')->with('albums', $albums);
    }


    public function create(){
      return view('albums.create');
    }
    public function store(Request $request){
      $this->validate($request, [
        'name' => 'required',
        'cover_image'=> 'image|max:19999'
      ]);
      //dabūt faila nosaukumu ar pagarinājumu
      $filenameWithExt = $request->file('cover_image')->getClientOriginalName();

      //dabūt tikai faila nosaukumu
      $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

      //dabūt pagarinājumu
      $extension = $request->file('cover_image')->getClientOriginalExtension();

      //izveidot jaunu nosaukumu
      $fileNameToStore = $filename.'_'.time().'.'.$extension;

      //ielādēt bildi
      $path= $request ->file('cover_image')->storeAs('public/album_covers',$fileNameToStore);

      //izveido Albumu
      $album = new Album;
      $album->name = $request -> input('name');
      $album->description = $request -> input('description');
      $album->cover_image = $fileNameToStore;


    

      $album->save();
      return redirect('/albums')->with('success', 'Albums ir izveidots');


    }


  public function show($id){
    $album = Album::with('photos')-> find($id);
    return view('albums.show')->with('album',$album);
  }





}
