@extends('templates.master')

@section('title')
   Home
@stop

@section('content')

      @foreach ($flux as $site)
         <div class="rss-block">
            <div class="rss-title">
               <p class="site-title"><a href="{{ $site->link }}">{{ $site->title }}</a></p>
               @if(!empty($site->description))
                  <p class="site-description">{{ $site->description }}</p>
               @endif
            </div>
            <div class="rss-content">
               @foreach($site->item as $item)
                  <div class="entry-content">
                     <div class="entry-content-title"><a href="{{ $item->link }}">{{ $item->title }}</a></div>
                     @if(!empty($item->description))
                        <div class="entry-content-description">{{ $item->description }}</div>
                     @endif
                  </div>
               @endforeach
            </div>
         </div>

   @endforeach

@stop