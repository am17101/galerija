@extends('layouts.app')


@section('content')
  <h3>Izveidot albumu</h3>
{!!Form::open(['action'=>'AlbumsController@store','method'=> 'POST', 'enctype' => 'multipart/form-data'])!!}
  {{Form::text('name','',['placeholder' => 'Albuma Nosaukums'])}}
  {{Form::textarea('description','',['placeholder' => 'Albuma Apraksts'])}}
  {{Form::file('cover_image')}}
  {{Form::submit('Pievienot!')}}
{!! Form::close() !!}

@endsection
