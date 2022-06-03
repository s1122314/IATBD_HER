<a class="productCard_back_to_home" href="/"> Home </a>

<article class="productCard a-popup">
    <figure class="productCard_figure">
        <img class="productCard_image" src={{$product->image}} alt= {{$product->name .  ' ' . $product->kind}}/>
    </figure>
    <section class="productCard_text">
        <p>{{$product->description}}</p>
    </section>
 
    

    <section class="productCard_btnSection">
        <button class="productCard_button" onclick="window.location.href='/product/order'"> Lenen </button>
    </section>
</article>
