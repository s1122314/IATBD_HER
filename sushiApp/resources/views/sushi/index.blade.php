@extends("default")

@section("title")
    {{"All sushi"}}
@endsection
@section("content")
<ul class="u-grid-12 u-grid-gap-2">
    @foreach($sushi as $sushi)
        @include("sushi.components.sushiCard--index");
    @endforeach
</ul>
@endsection
