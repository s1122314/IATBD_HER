<a class="productCard_back_to_home" href="/"> Home </a>

<article class="productCard a-popup">
    <figure class="productGridCard_figure">
        <img class="productGridCard_image" src={{$user->image}} alt= {{$user->name}}/>
    </figure>>
    <section class="productCard_text">
        <p>{{$user->name}}</p>
    </section>
    <section class="productCard_btnSection">
        <button class="productCard_button_user" onclick="window.location.href='/user/{{$user->id}}/products'"> Bekijk producten</button>
        <button class="productCard_button_user" onclick="window.location.href='/user/{{$user->id}}/create'"> Beoordeel gebruiker </button>
    </section>
</article>
