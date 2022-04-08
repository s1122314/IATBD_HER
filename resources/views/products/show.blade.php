@extends("default")
@section("title")
    {{$product ?? ''->kind . " " . $product ?? ''->name}}
@endsection
@section("content")
    @include("products.components.productCard--show")
@endsection