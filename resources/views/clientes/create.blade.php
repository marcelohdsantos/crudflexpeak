@extends('layouts.main')

@section('title', 'Cadastrar Cliente')
    
@section('content')
 <h1>Cadastrar nova entrada</h1>

 <div class="container pt-5">
    <form action="/clientes" method="POST">
        @csrf

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" placeholder="Digite o nome do cliente" class="form-control">
        </div>

        <div class="form-group">
            <label for="descricao">Descrição</label>
            <textarea name="descricao" placeholder="Digite a descrição" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="date">Data do cadastro</label>
            <input type="date" name="date" id="date" class="form-control">
        </div>

        <div class="form-group">
            <label for="valor"> Valor do Pagamento </label>
            <input type="text" name="valor" placeholder="Digite o valor do pagamento" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>
        <a href="/" class="btn btn-primary">Voltar</a>
        

    </form>

    
</div>
@endsection