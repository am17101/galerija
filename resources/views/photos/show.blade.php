@extends('layouts.app')

@section('content')
<h3>{{$photo->photo_title}}</h3>
<p>{{$photo->description}}</p>
<a href="/albums/{{$photo->album_id}}">Atpakaļ</a>
<hr>
<img src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}" alt="$photo->photo_title">
<br><br>
{!!Form::open(['action' => ['PhotoController@destroy',$photo->id],'method' => 'POST'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Izdzēst bildi',['class' =>'button alert'])}}
{!!Form::close()!!}
<hr>
<small>Size:{{$photo->size}}</small>
@endsection
