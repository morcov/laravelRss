@extends('templates.master')

@section('title')
   Home
@stop

@section('content')
   @foreach ($flux as $item)
      <article class="entry-item">
         <img src="{{utf8_decode((string)$item->enclosure['url'])}}" alt="">
         <div class="entry-content">
            <a href="{{ $item->link }}">{{ $item->title }}</a>
            {{ $item->description }}
         </div>
      </article>
   @endforeach

@stop