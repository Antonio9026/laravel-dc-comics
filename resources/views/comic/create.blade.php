@extends('layouts.public')

@section('content')
    <h1>ciao</h1>
    <div class="container-form">
        <form action="" method="POST">
            @csrf()

            <label>Titolo:</label><br>
            <input type="text" name="title"><br>
            <label>Descrizione:</label><br>
            <textarea type="text" name="description"></textarea><br><br>
            <label>Immagine:</label><br>
            <input type="text" name="thumb"><br>
            <label>Prezzo:</label><br>
            <input type="text" name="price"><br><br>
            <label>Serie:</label><br>
            <input type="text" name="series"><br>
            <label>Data di uscita:</label><br>
            <input type="date" name="sale_date"><br><br>
            <label>Tipo:</label><br>
            <input type="text" name="type"><br>
            <label>Artisti:</label><br>
            <input type="text" name="artists"><br><br>
            <label>Scrittore:</label><br>
            <input type="text" name="writers"><br>





            <button>Salva</button>
            <a href="{{ route('comic.index') }}"><button>Annulla</button></a>
        </form>
    </div>
@endsection
