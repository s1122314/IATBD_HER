<li class="a-popup u-list-style-none sushiGridCard" data-kind-of-sushi={{$sushi->kind}}>
<a href="/sushi/{{$sushi->id}}">
<article>
    <header class="sushiGridCard_header u-flex-v-center">
    <h2 class="sushiGridCard_heading"> {{$sushi->kind}} {{$sushi->name}}</h2>
</header>
<figure class="sushiGridCard_figure">
    <img class="sushiGridCard_image" src={{$sushi->image}} alt= {{$sushi->name .  ' ' . $sushi->kind}}/>
</figure>
<section class="sushiGridCard_textSection u-flex-v-center">
    <p class="sushiGridCard_text">{{$sushi->description}}</p>
</section>
</article>
</a>
</li>
