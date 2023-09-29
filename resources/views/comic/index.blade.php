@extends("layouts.public")
{{-- @section("comic","Dc comics") --}}

@section("content")       
<div class="card-wrapper">
    @foreach ( $comics as $comic)
    <div class="card">
        <div class="img-container">
            <a href="/comic/{{$comic->id}}"><img src="{{$comic['thumb']}}" alt=""></a>
        </div>
        <div class="series">
            <a href="/comic/{{$comic->id}}"><h1>{{$comic['title']}}</h1></a>
           
        </div>
    </div>
    @endforeach
    <button class="load-button"><strong>LOAD MORE</strong></button>
</div>
<div class="banner_container">
    <div class="card">
        <img src="/img/buy-comics-digital-comics.png" alt="">
        <p>DIGITAL COMICS</p>
    </div>
    <div class="card">
        <img src="/img/buy-comics-merchandise.png" alt="">
        <p>DIGITAL MERCHANDISE</p>
    </div>
    <div class="card">
        <img src="/img/buy-comics-shop-locator.png" alt="">
        <p>SUBSCRIPTION</p>
    </div>
    <div class="card">
        <img src="/img/buy-comics-subscriptions.png" alt="">
        <p>COMIC SHOP LOCATOR</p>
    </div>
    <div class="card">
        <img src="/img/buy-dc-power-visa.svg" alt="">
        <p>DC POWER VISA</p>
    </div>
</div>
    
@endsection


  
