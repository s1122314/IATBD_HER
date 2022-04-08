@extends("default")

@section("title")
Maak product
@endsection
@section("content")
<a class="productCard_back_to_home" href="/"> Home </a>

<article class="create-form a-popup">
    <form class="create-form_form" action="/products" method="POST">

        @csrf

        <label for="name">Naam </label>
            <select class="create-form_input" id="name" name="name">
                @foreach($names as $names)
                    <option value={{$names->name}}> {{$names->name}} </option>
                @endforeach
            </select>

        <input type="hidden" name="user_id" id="user_id" value="{{Auth::user()->id}}"/>

        <section class="create-form_section">
            <button class="create-form_button" type="submit">Product verwijderen</button>
        </section>

    </form>

</article>

@endsection