<li class="a-popup u-list-style-none productGridCard" data-kind-of-product={{$product->kind}}>
    <a href="/product/{{$product->id}}">
        <article>
            <header class="productGridCard_header u-flex-v-center">
                <h2 class="productGridCard_heading"> {{$product->kind}} {{$product->name}}</h2>
            </header>
            <figure class="productGridCard_figure">
                <img class="productGridCard_image" src={{$product->image}} alt= {{$product->name .  ' ' . $product->kind}}/>
            </figure>
            <section class="productGridCard_textSection u-flex-v-center">
                <p class="productGridCard_text">{{$product->description}}</p>
            </section>
        </article>
    </a>
</li>
