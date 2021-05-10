@extends('template.standard')
@section('title')
prodotti
@endsection
@section('main')
<main class="product">
    <h1>{{$pasta["titolo"]}}</h1>
    <img src="{{$pasta["src-h"]}}" alt="">
    <img src="{{$pasta["src-p"]}}" alt="">
    <div class="container">{!! $pasta["descrizione"] !!}</div>
</main>
@endsection