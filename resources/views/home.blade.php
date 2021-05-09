<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Pasta Molisana</title>
        <link rel="stylesheet" href="{{asset("css/app.css")}}">
    </head>
    <body>
        <header>
            <div class="container">
                <img src="{{asset("images/marchio-sito-test.png")}}" alt="">
                <nav>
                    <ul>
                        <li class="active"><a href="#">home</a></li>
                        <li><a href="#">prodotti</a></li>
                        <li><a href="#">news</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <main>
            {{-- carte --}}
            <div class="container">
                <div>
                    <h2>le lunghe</h2>
                    <div class="cards">
                        @foreach ($lunghe as $pasta)
                            <div class="card">
                                <img src="{{$pasta["src"]}}" alt="{{$pasta["titolo"]}}">
                            </div>
                        @endforeach
                    </div>
                </div>
                <div>
                    <h2>le lunghe</h2>
                    <div class="cards">
                        @foreach ($corte as $pasta)
                            <div class="card">
                                <img src="{{$pasta["src"]}}" alt="{{$pasta["titolo"]}}">
                            </div>
                        @endforeach
                    </div>
                </div>
                <div>
                    <h2>le cortissime</h2>
                    <div class="cards">
                        @foreach ($cortissime as $pasta)
                            <div class="card">
                                <img src="{{$pasta["src"]}}" alt="{{$pasta["titolo"]}}">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <div class="container">
                <div class="recapiti">
                    <div class="wrap">
                        <img src="{{asset("images/marchio-sito-test.png")}}" alt="">
                    </div>
                    <address class="info">
                        <ul>
                            <li>Ragione sociale: la Molisana S.P.A.</li>
                            <li>sede legale: Contrada Colle Delle Api. 100/A</li>
                            <li>86100-Campobasso</li>
                            <li>Pec: lamolisana@pec</li>
                            <li>Tel: 212321323231</li>
                            <li>Fax: 231234232</li>
                            <li>info@lamolisana.it (per segnalazioni degli utenti)</li>
                            <li>comemrcale@lamolisana.it</li>
                            <li>export@lamolisana.it</li>
                            <li>numero verde: 800818081</li>
                            <li>telefono 3801292455</li>
                        </ul>
                    </address>
                </div>
                <div class="navFoot">
                    <div class="listaLinkFooter">
                        <h3>Pastficio</h3>
                        <ul>
                            <li><a href="#">Il PAstifico</a></li>
                            <li><a href="#">Grano decorticato a pietra</a></li>
                            <li><a href="#">Il Molise c'è</a></li>
                            <li><a href="#">Filiera Integrata</a></li>
                            <li><a href="#">100 anni di pasta</a></li>
                            <li><a href="#">Sartoria della pasta</a></li>
                            <li><a href="#">Spaghetto Quadrato</a></li>
                            <li><a href="#">Le Persone</a></li>
                        </ul>
                    </div>
                    <div class="listaLinkFooter">
                        <h3>collezone da chef</h3>
                        <ul>
                            <li><a href="#">Collezioni da CHef</a></li>
                            <li><a href="#">Grandi Cucine</a></li>
                            <li><a href="#">Biologiche</a></li>
                            <li><a href="#">Quadrate</a></li>
                        </ul>
                    </div>
                    <div class="listaLinkFooter">
                        <h3>Prodotti</h3>
                        <ul>
                            <li><a href="#">Le Classiche</a></li>
                            <li><a href="#">Le Integrali</a></li>
                            <li><a href="#">Le Speciali</a></li>
                            <li><a href="#">Le Biologiche</a></li>
                            <li><a href="#">Le Gluted-Free</a></li>
                            <li><a href="#">Le Semole</a></li>
                            <li><a href="#">Le Extra di Lusso</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>