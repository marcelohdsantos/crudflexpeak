@extends('layouts.main')

@section('title', 'Editando'.$cliente->nome)
    
@section('content')
 <h1>Editando {{ $cliente->nome }}</h1>

 <div class="container pt-5">
    <form action="/clientes/edit/{{ $cliente->id }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" value="{{ $cliente->nome }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea name="descricao" class="form-control">{{ $cliente->descricao }}</textarea>   
        </div>

        <div class="form-group">
            <label for="date">Data do cadastro</label>
            <input type="date" name="date" id="date" class="form-control" value="{{ $cliente->date }}">
        </div>  

        <div class="form-group">
            <label for="valor"> Valor do Pagamento </label>
            <input type="text" name="valor" value="{{ $cliente->valor }}" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Editar</button>
        <a href="/" class="btn btn-primary">Voltar</a>
        

    </form>

    
</div>
@endsection