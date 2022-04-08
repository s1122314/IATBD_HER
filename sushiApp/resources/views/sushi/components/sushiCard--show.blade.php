<article class="sushiCard a-popup">
    <figure class="sushiCard_figure">
        <img class="sushiCard_image" src={{$sushi->image}} alt= {{$sushi->name .  ' ' . $sushi->kind}}/>
    </figure>
    <section class="sushiCard_text">
        <p>{{$sushi->description}}</p>
    </section>
    <section class="sushiCard_btnSection">
        <button class="sushiCard_button"> Order now </button>
        <a class="sushiCard_back_to_home" href="/sushi"> Back to home> </a>
    </section>
</article>
