<li class="a-popup u-list-style-none productGridCard" data-kind-of-product={{$user->name}}>
    <a href="/user/{{$user->id}}">
        <article>
            <header class="productGridCard_header u-flex-v-center">
                <h2 class="productGridCard_heading"> {{$user->name}}</h2>
            </header>
            <figure class="productGridCard_figure">
                <img class="productGridCard_image" src={{$user->image}} alt= {{$user->name}}/>
            </figure>
        </article>
    </a>
</li>
