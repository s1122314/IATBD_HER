@extends("default")

@section("title")
Maak product
@endsection
@section("content")
<a class="productCard_back_to_home" href="/"> Home </a>

<article class="create-form a-popup">

    <form class="create-form_form">

    <section class="create-form_section">
            <label for="name">Voornaam </label>
            <input class="create-form_input" name="name" id="name" type="text"/>
        </section>

        <section class="create-form_section">
            <label for="name">Achternaam </label>
            <input class="create-form_input" name="name" id="name" type="text"/>
        </section>

        <section class="create-form_section">
            <label for="name">Straatnaam + huisnummer </label>
            <input class="create-form_input" name="name" id="name" type="text"/>
        </section>

        <section class="create-form_section">
            <label for="name">Plaats </label>
            <input class="create-form_input" name="name" id="name" type="text"/>
        </section>

        </form>


    <form class="create-form_form" action="/ordered" method="POST">

        @csrf
        <section class="create-form_section">

        <label for="name">Naam van te bestellen product </label>
            <select class="create-form_input" id="name" name="name">
                @foreach($names as $names)
                    <option value={{$names->name}}> {{$names->name}} </option>
                @endforeach
            </select>
        </section>
            
  

        <input type="hidden" name="user_id" id="user_id" value="{{Auth::user()->id}}"/>

        <section class="create-form_section">
            <button class="create-form_button" type="submit">Bestellen</button>
        </section>

    </form>

</article>

@endsection