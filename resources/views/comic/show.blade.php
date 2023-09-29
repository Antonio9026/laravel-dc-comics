@extends("layouts.public")


@section("content")       
<div class="card-wrapper">
        {{-- @dd($comics) --}}
    <div class="card">
        <div class="img-container">
            <img src="{{$comics['thumb']}}" alt="">
        </div>
        <div class="series">
           <h1>{{$comics['title']}}</h1>
        </div>
    </div>
    
    <button class="load-button"><strong>LOAD MORE</strong></button>
</div>
@endsection