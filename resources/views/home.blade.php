@extends("template.standard")

@section('title')
La Molisana
@endsection

@section('main')
<main>
    {{-- carte --}}
    <div class="container">
        <div>
            <h2>le lunghe</h2>
            <div class="cards">
                @foreach ($lunghe as $pasta)
                    <div class="card">
                        <a href="{{ route('prodotto', ['id'=> $pasta["id"]]) }}"><img src="{{$pasta["src"]}}" alt="{{$pasta["titolo"]}}"></a>
                    </div>
                @endforeach
            </div>
        </div>
        <div>
            <h2>le lunghe</h2>
            <div class="cards">
                @foreach ($corte as $pasta)
                    <div class="card">
                        <a href="{{ route('prodotto', ['id'=> $pasta["id"]]) }}"><img src="{{$pasta["src"]}}" alt="{{$pasta["titolo"]}}"></a>
                    </div>
                @endforeach
            </div>
        </div>
        <div>
            <h2>le cortissime</h2>
            <div class="cards">
                @foreach ($cortissime as $pasta)
                    <div class="card">
                        <a href="{{ route('prodotto', ['id'=> $pasta["id"]]) }}"><img src="{{$pasta["src"]}}" alt="{{$pasta["titolo"]}}"></a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</main>
@endsection
