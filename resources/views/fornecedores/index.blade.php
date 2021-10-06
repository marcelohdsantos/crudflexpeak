@extends('layouts.main')

@section('title', 'Home')
    
@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Fluxo de Saída: </h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if (count($fornecedores) > 0)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Descricão</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Data</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>        
        <tbody>
            @foreach ($fornecedores as $fornecedor)
                <tr>
                    <td scope="row">{{ $loop->index + 1 }}</td>
                    <td><a href="#"> {{ $fornecedor->nome }} </a></td>
                    <td>{{$fornecedor->descricao}}</td>
                    <td> R$ {{ $fornecedor->valor }}</td>
                    <td>{{ date('d/m/Y', strtotime($fornecedor->date))}}</td>
                    <td>
                        <a href="/fornecedores/edit/{{ $fornecedor->id }}" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon>Editar</a>
                        <form action="/fornecedores/{{ $fornecedor->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger delete-btn"> <ion-icon name="trash-outline"></ion-icon> Delete </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <h1>Total R$ {{$soma_fornecedores}}</h1>
    @else
        <p>Fluxo zerado, <a href="/fornecedores/create"> Cadastrar nova saída  </a></p>
    @endif
</div>

@endsection