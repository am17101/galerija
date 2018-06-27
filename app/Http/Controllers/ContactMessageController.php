<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
class ContactMessageController extends Controller
{
  public function create(){

    return View('contact');

  }

  public function submit(Request $request){
    $this->validate($request,[
      'name' => 'required',
      'email' => 'required'
    ]);

    //izveidosim jaunu vestuli

    $message = new Message;
    $message->name = $request->input('name');
    $message->email = $request->input('email');
    $message->message = $request->input('message');

    //saglabat zinu

    $message->save();

    //redirectot

    return redirect('/')->with('success','Vēstule aizsūtīta!');
  }

public function getMessages(){
  $messages = Message::all();

  return view('messages')->with('messages', $messages);
}

}
