@extends('layouts.main')

@section('title', 'Editando'.$fornecedor->nome)
    
@section('content')
 <h1>Editando {{ $fornecedor->nome }}</h1>

 <div class="container pt-5">
    <form action="/fornecedores/edit/{{ $fornecedor->id }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" value="{{ $fornecedor->nome }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea name="descricao" class="form-control">{{ $fornecedor->descricao }}</textarea>   
        </div>

        <div class="form-group">
            <label for="date">Data do cadastro</label>
            <input type="date" name="date" id="date" class="form-control" value="{{ $fornecedor->date }}">
        </div>  

        <div class="form-group">
            <label for="valor"> Valor do Pagamento </label>
            <input type="text" name="valor" value="{{ $fornecedor->valor }}" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Editar</button>
        <a href="/" class="btn btn-primary">Voltar</a>
        

    </form>

    
</div>
@endsection