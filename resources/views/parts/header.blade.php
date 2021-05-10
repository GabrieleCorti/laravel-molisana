 <header>
    <div class="container">
        <img src="{{asset("images/marchio-sito-test.png")}}" alt="">
        <nav>
            <ul>
                <li class="active"><a href="{{ route('home') }}">home</a></li>
                <li><a href="{{ route('prodotto', ['id'=>0]) }}">prodotti</a></li>
                <li><a href="#">news</a></li>
            </ul>
        </nav>
    </div>
</header>