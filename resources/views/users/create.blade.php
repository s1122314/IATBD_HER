@extends("default")

@section("title")
Maak product
@endsection
@section("content")
<a class="productCard_back_to_home" href="/"> Home </a>

<article class="create-form a-popup">
    <form class="create-form_form" action="/user" method="POST">

        @csrf

        <section class="create-form_section">
            <label for="name">Naam </label>
                <input class="create-form_input" name="name" id="name" type="text-area"></input>
        </section>

        <section class="create-form_section">
            <label for="description">review </label>
            <textarea class="create-form_input create-form_input--big" name="description" id="description" type="text-area"></textarea>
        </section>
        <input type="hidden" name="user_id" id="user_id" value="{{Auth::user()->id}}"/>

        <section class="create-form_section">
            <button class="create-form_button" type="submit">Product aanbieden</button>
        </section>

    </form>

</article>

@endsection