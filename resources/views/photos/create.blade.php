@extends('layouts.app')


@section('content')
  <h3>Pievienot Bildi</h3>
{!!Form::open(['action'=>'PhotoController@store','method'=> 'POST', 'enctype' => 'multipart/form-data'])!!}
  {{Form::text('photo_title','',['placeholder' => 'Bildes Nosaukums'])}}
  {{Form::textarea('description','',['placeholder' => 'Bildes Apraksts'])}}
  {{Form::hidden('album_id', $album_id)}}
  {{Form::file('photo')}}
  {{Form::submit('Pievienot!')}}
{!! Form::close() !!}

@endsection
