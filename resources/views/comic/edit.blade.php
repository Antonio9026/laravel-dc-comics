@extends('layouts.public')

@section('content')
   
    <div class="container-form">
        <form action="{{ route('comic.update',$comics->id )}}" method="POST">
           
            @csrf()
            {{-- aggiungo attributo @method perchè i form non permettono altri metodi oltre al GET O POST  --}}
            @method("put")

            <label>Titolo:</label><br>
            <input type="text" name="title" value="{{$comics->title}}"><br>
            <label>Descrizione:</label><br>
            <textarea type="text" name="description">{{$comics->description}}</textarea><br><br>
            <label>Immagine:</label><br>
            <input type="text" name="thumb" value="{{$comics->thumb}}"><br>
            <label>Prezzo:</label><br>
            <input type="text" name="price" value="{{$comics->price}}"><br><br>
            <label>Serie:</label><br>
            <input type="text" name="series" value="{{$comics->series}}"><br>
            <label>Data di uscita:</label><br>
            <input type="date" name="sale_date" value="{{$comics->sale_date}}"><br><br>
            <label>Tipo:</label><br>
            <input type="text" name="type" value="{{$comics->type}}"><br>
            <label>Artisti:</label><br>
            <input type="text" name="artists" value="{{$comics->artists}}"><br><br>
            <label>Scrittore:</label><br>
            <input type="text" name="writers" value="{{$comics->writers}}"><br>





            <button>Salva</button>
            <a href="{{ route('comic.index') }}"><button>Annulla</button></a>
        </form>
    </div>
@endsection
