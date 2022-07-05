@extends('layouts.page')
@section('title', 'Amnesty Ghana')
@section('styles')
<link rel="stylesheet" href={{asset("assets/css/index.css")}}>   
<link rel="stylesheet" href={{asset("assets/css/resources.css")}}>
@endsection
@section('content')
<div class="resources">
    <div class="search">
        <form id="filter">
            <input type="search" placeholder="Filter Result" id="filter"/>
            <button class="btn btn-large md-btn-primary">Search</button>
        </form>
    </div>
    <div class="grid">

    @isset($documents)
        @foreach ($documents as $document)
            <div class="document file" data-filter="{{$document->title}}">
                <div class="type mini">{{strtoupper($document->type)}}</div>
                @if($document->public == 0)
                    <button class="label top-left-corner" title="Login to view private files">
                        <ion-icon name="lock-closed-outline" size="small"></ion-icon>
                    </button>
                @endif

                <div class="text">{{ucwords($document->title)}}</div>
                <div class="buttons flex">
                     @if($document->public == 0)
                        <button class="type btn label" onclick="showMessage(false,'This file is private.', 5000);" >Download <ion-icon name="download"></ion-icon></button>
                        @else
                        <button class="type btn label" onclick="download('{{$document->url}}','{{$document->title}}')" >Download <ion-icon name="download"></ion-icon></button>
                    @endif
                    
                </div>
                
            </div>
        @endforeach
    @endisset
       

    {{-- show videos here --}}
    @isset($videos)
        @foreach($videos as $video)
            <div class="video file" data-filter="{{$video->title}}">
                <iframe width="460" height="275" src="{{$video->url}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="text">{{ucwords($video->title)}}</div>
            </div>
        @endforeach
    @endisset

    @isset($images)
        @foreach ($images as $image)
            <div class="image-card file" data-filter="{{$image->title}}">
                <div class="image" style="background-image: url({{$image->url}})">
                    <div class="buttons">
                        <button onclick="download('{{$image->url}}','{{$image->title}}')" class="btn sm-btn-primary">
                            <ion-icon name="download" size="small"></ion-icon>
                        </button>
                        <button data-url={{$image->url}} class="btn preview sm-btn-secondary">
                            <ion-icon name="eye" size="small"></ion-icon>
                        </button>
                    </div>
                </div>
                <div class="text">
                    <p>{{$image->title}}</p>
                </div>
            </div>
         @endforeach
    @endisset

    </div>
</div>
<!--<script src={{asset("assets/js/contact.js")}}></script>-->
<script src={{asset("/assets/js/filter.js")}}></script>
@endsection
