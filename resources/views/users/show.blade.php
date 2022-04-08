@extends("default")
@section("title")
    {{$user->name}}
@endsection
@section("content")
    @include("users.components.userCard--show")
@endsection