@extends('layouts.app')

@section('content')
<h1>{{$album->name}}</h1>
<a class="button secondary" href="/">Atpakaļ</a>
<a class="button" href="/photos/create/{{$album->id}}">Pievienot bildi šim albumam</a>
<hr>
@if(count($album->photos) > 0)
<?php
$colcount = count($album->photos);
$i = 1;
 ?>
 <div id="albums">
   <div class="row text-center">
     @foreach ($album->photos as $photo)
        @if($i == $colcount)
        <div class='medium-4 colums end'  >
          <a href="/photos/{{$photo-> id}}">
            <img class="thumbnail" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}"
            alt="{{$photo -> photo_title}}">
          </a>
          <br>
          <h4>{{$photo -> photo_title}}</h4>
          @else
              <div class='medium-4 columns'>
                <a href="/photos/{{$photo-> id}}">
                  <img class="thumbnail" src="/storage/photos/{{$photo->album_id}}/{{$photo->photo}}"
                  alt="{{$photo -> photo_title}}">
                </a>
                <br>
                <h4>{{$photo -> photo_title}}</h4>
      @endif
      @if($i % 3 == 0)
          </div>
        </div>
        <div class="row text-center">
      @else

        </div>
     @endif
     <?php $i++; ?>
     @endforeach
   </div>
 </div>
 @else
 <p>Nav pievienotas nevienas bildes</p>
 @endif

 @endsection
