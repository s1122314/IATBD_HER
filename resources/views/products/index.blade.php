@extends("default")

@section("title")
    {{"All products"}}
@endsection
@section("content")

<section class="productCard_btnSection">
    <button class="productCard_button" onclick="window.location.href='/'"> Home </button>
    <button class="productCard_button" onclick="window.location.href='/product/create'"> Upload product </button>
    @if(Auth::user()->role === "Admin")
        <button class="productCard_button" onclick="window.location.href='/product/destroy'"> verwijder product </button>
    @endif
    <button class="productCard_button" onclick="window.location.href='/user'"> Bekijk profielen </button>
    <form method="POST" action="/logout">
        @csrf
        <button type="submit" class="productCard_button_uitloggen">Uitloggen</button>
     </form>
</section>
<input class="typeBar" type="text" id="myInput" onkeyup="searchbar()" placeholder="Search for names.." title="Type in a name">


@include("products.components.checkbox--index")

<ul class="u-grid-12 u-grid-gap-2">
    @foreach($product as $product)
        @include("products.components.productCard--index")
    @endforeach
</ul>


@endsection


