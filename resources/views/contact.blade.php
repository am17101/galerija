@extends('layouts.app')

@section('content')
  <h1>Sazinies</h1>
  {!! Form::open(['url' => 'contact/submit']) !!}

      <div class="form-group">
        {{Form::label('name', 'Name')}}
        {{Form::text('name', '',['class' => 'form-control', 'placeholder' =>'Ievadi vārdu!'])}}
      </div>

      <div class="form-group">
        {{Form::label('email', 'E-pasta adrese:')}}
        {{Form::text('email', '',['class' => 'form-control', 'placeholder' =>'Ievadi e-pastu!'])}}
      </div>

      <div class="form-group">
        {{Form::label('message', 'Ziņa:')}}
        {{Form::textarea('message', '',['class' => 'form-control', 'placeholder' =>'Ievadi ziņu!'])}}
      </div>
      <div>
        {{Form::submit('Sūtīt',['class'=> 'btn btn-primary'])}}

      </div>
  {!! Form::close() !!}
@endsection
