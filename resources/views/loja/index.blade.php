@extends('loja.layouts.main')

@section('title', 'Produtos')

@section('content')
<div class="principal">
    <div class="categoria">
        <p class="cat-title">Categorias: </p>
            @foreach ($categorias as $categoria)
                <div class="cat-box">
                    <h4></h4><a class="cat" href="/produtos?_token=ejeKQKf0exyS09bUwQMPBExDMBAUW8MQQSJ0g0nX&search={{$categoria->categoria}}">{{$categoria->categoria}}</a>
                </div>
            @endforeach
    </div>
    <div id="cards-container" class="row">
        @foreach ($produtos as $produto)
        <div id="card" class="card1">
            <div class="card-body">
                <img src="/storage/{{ $produto->imagem }}" class="card-img" alt="Imagem de {{ $produto->nome }}">
                <h5 class="card-title">{{ $produto->nome }}</h5>
                <div class="info">
                    <p><strong></strong>{{ substr($produto->descricao, 0, 135) }}...</p>
                    <p><strong>Categorias: </strong>{{ $produto->categoria->categoria }}</p>
                    <p><strong>Qtd: </strong>{{ $produto->quantidade }}</p>  
                </div>
                <div class="preco">
                    <p><strong>R$</strong>{{ $produto->preco }}</p>
                </div>
            </div>
        </div>
        @endforeach
        @if (count($produtos) == 0)
            <p style="width: 100%">Nenhum produto foi encontrado!</p>
        @endif
</div>






@endsection