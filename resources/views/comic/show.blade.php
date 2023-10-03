@extends('layouts.public')


@section('content')
    <div class="container-dc-show">
        <a href="{{ route('comic.index') }}"><button>torna indietro</button></a>
        <form action="{{ route("comic.destroy", $comics->id)}}" method="POST">  
        @csrf
        @method("DELETE")
         <button>Elimina</button>
        </form>
        <div class="card-wrapper-show">
            {{-- @dd($comics) --}}

            <div class="card-show">
                
                <div class="img-container-show">
                    <img src="{{ $comics['thumb'] }}" alt="">
                </div>

                <div class="series-show">
                    <h1 class="title">{{ $comics['title'] }}</h1>
                    <div class="price">
                        <p>U.S Price: {{ $comics['price'] }}</p>
                        <p>available</p>
                        <div class="dropdown">
                            <select class="drop-d">
                                <option value="">ceck availability</option>
                                <option value=""></option>
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                    <p>{{ $comics['description'] }}</p>
                </div>
            </div>
            

        </div>


        <div class="info">

           
            <div class="down-section">
                <div class="down-container">
                    <div class="card-left">
                        <h1>Talent</h1>
                        <div class="card-down">
                            <p class="static">Art by: </p>
                            <p class="dinamic"> {{ join(',', json_decode($comics['artists'])) }}</p>
                        </div>
                        <div class="card-down">
                            <p class="static">Written by: </p>
                            <p class="dinamic"> {{ join(',',json_decode($comics['writers'])) }}</p>
                        </div>
                    </div>
                    <div class="card-right">
                        <h1>Specs</h1>
                        <div class="card-down">
                            <p class="static">Series:</p>
                            <p class="dinamic">{{ $comics['series'] }}</p>

                        </div>
                        <div class="card-down">
                            <p class="static">U.s. Price:</p>
                            <p class="dinamic">{{ $comics['price'] }}</p>
                        </div>
                        <div class="card-down">
                            <p class="static">On Sale Date:</p>
                            <p class="dinamic">{{ $comics['sale_date'] }}</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
