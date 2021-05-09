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
        {{-- header statico--}}
        @include("parts.header")
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
        {{-- footer statico --}}
        @include('parts.footer')
    </body>
</html>