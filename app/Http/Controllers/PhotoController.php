<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    public function create($album_id){
      return view('photos.create')->with('album_id', $album_id);
    }

    public function store(Request $request){

      $this->validate($request, [
        'photo_title' => 'required',
        'Photo'=> 'image|max:1999'
      ]);
      //dabūt faila nosaukumu ar pagarinājumu
      $filenameWithExt = $request->file('photo')->getClientOriginalName();

      //dabūt tikai faila nosaukumu
      $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

      //dabūt pagarinājumu
      $extension = $request->file('photo')->getClientOriginalExtension();

      //izveidot jaunu nosaukumu
      $fileNameToStore = $filename.'_'.time().'.'.$extension;

      //ielādēt bildi
      $path= $request ->file('photo')->storeAs('public/photos/'.$request->input('album_id'),$fileNameToStore);

      //ipievieno bildi
      $photo = new Photo;
      $photo->album_id = $request->input('album_id');
      $photo->photo_title = $request -> input('photo_title');
      $photo->description = $request -> input('description');
      $photo->size = $request-> file('photo')->getClientSize();
      $photo->photo = $fileNameToStore;


      $photo->save();
      return redirect('/albums/'.$request->input('album_id'))->with('success', 'Bilde ir ielādēta');
  }
//te sakam, lai var deletot un paradit katru atsev.
public function show($id){
  $photo = Photo::find($id);
  return view ('photos.show')->with('photo',$photo);

}

public function destroy($id){
  $photo = Photo::find($id);

  if(Storage::delete('public/photos/'.$photo->album_id.'/'.$photo->photo)){
    $photo->delete();
    return redirect('/')->with('success','Bilde izdzesta');
  }

}



}
