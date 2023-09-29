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
           <p>{{$comics['description']}}</p>
           <p>{{$comics['price']}}</p>
           <p>{{$comics['series']}}</p>
           <p>{{$comics['sale_date']}}</p>
           <p>{{$comics['type']}}</p>
           <p>{{$comics['artists']}}</p>
           <p>{{$comics['writers']}}</p>
        </div>
    </div>
    <a href="{{ route("comic.index")}}"><button>torna indietro</button></a>
   
</div>
@endsection