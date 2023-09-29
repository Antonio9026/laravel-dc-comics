@extends("layouts.public")
{{-- @section("comic","Dc comics") --}}

@section("content")       
<div class="card-wrapper">
    @foreach ( $comics as $comic)
        
   
    <div class="card">
        <div class="img-container">
            <img src="{{$comic['thumb']}}" alt="">
        </div>
        <div class="series">
            <a href="/comic/{{$comic->id}}"><h1>{{$comic['title']}}</h1></a>
           
        </div>
    </div>
    @endforeach
    <button class="load-button"><strong>LOAD MORE</strong></button>
</div>
    



  
