@extends("default")

@section("title")
    {{"All products"}}
@endsection
@section("content")
<section class="productCard_btnSection">
    <button class="productCard_button" onclick="window.location.href='/'"> Home </button>
    <button class="productCard_button" onclick="window.location.href='/product/create'"> Upload product </button>
    <button class="productCard_button" onclick="window.location.href='/product/destroy'"> verwijder product </button>
    <button class="productCard_button" onclick="window.location.href='/dashboard'"> Ga naar je profiel </button>
    <button class="productCard_button" onclick="window.location.href='/user'"> Bekijk profielen </button>
</section>

<h1 class="productCard_user_titles"> Producten van gebruiker </h1>
<ul class="u-grid-12 u-grid-gap-2">
    @foreach($products as $product)
        @include("users.components.userCard--showProducts")
    @endforeach
</ul>
@endsection
