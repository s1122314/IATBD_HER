@extends("default")

@section("title")
    {{"All reviews"}}
@endsection
@section("content")
<section class="productCard_btnSection">
    <button class="productCard_button" onclick="window.location.href='/'"> Home </button>
    <button class="productCard_button" onclick="window.location.href='/product/create'"> Upload product </button>
    <button class="productCard_button" onclick="window.location.href='/product/destroy'"> verwijder product </button>
    <button class="productCard_button" onclick="window.location.href='/dashboard'"> Ga naar je profiel </button>
    <button class="productCard_button" onclick="window.location.href='/user'"> Bekijk profielen </button>
</section>
<ul class="u-grid-12 u-grid-gap-2">
    @foreach($review as $review)
        @include("products.components.productCard--review")
    @endforeach
</ul>
@endsection
