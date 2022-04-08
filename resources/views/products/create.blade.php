@extends("default")

@section("title")
Maak product
@endsection
@section("content")
<a class="productCard_back_to_home" href="/"> Home </a>
<article class="create-form a-popup">
    <form class="create-form_form" action="/product" method="POST">

        @csrf

        <section class="create-form_section">
            <label for="name">Naam </label>
            <input class="create-form_input" name="name" id="name" type="text"/>
        </section>

        <section class="create-form_section">
            <label for="kind">Soort </label>
            <select class="create-form_input" id="kind" name="kind">
                @foreach($kind_of_product as $kind_of_product)
                    <option value={{$kind_of_product->kind}}> {{$kind_of_product->kind}} </option>
                @endforeach
            </select>
        </section>

        <section class="create-form_section">
            <label for="description">Beschrijving </label>
            <textarea class="create-form_input create-form_input--big" name="description" id="description" type="text-area"></textarea>
        </section>

        <section class="create-form_section">
            <label for="image">Afbeelding </label>
            <select class="create-form_input" name="image" id="image">
                @foreach($images as $image)
                    <option value={{$image->image}}> {{$image->image}} </option>
                @endforeach
            </select>
        </section>

        <input type="hidden" name="user_id" id="user_id" value="{{Auth::user()->id}}"/>

        <section class="create-form_section">
            <button class="create-form_button" type="submit">Product aanbieden</button>
        </section>

    </form>

</article>

@endsection