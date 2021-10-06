@extends('layouts.main')

@section('title', 'Home do Cliente')
    
@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Cadastro do Cliente: </h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if (count($clientes) > 0)
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
            @foreach ($clientes as $cliente)
                <tr>
                    <td scope="row">{{ $loop->index + 1 }}</td>
                    <td><a href="#"> {{ $cliente->nome }} </a></td>
                    <td>{{$cliente->descricao}}</td>
                    <td> R$ {{ $cliente->valor }}</td>
                    <td>{{ date('d/m/Y', strtotime($cliente->date))}}</td>
                    <td>
                        <a href="/clientes/edit/{{ $cliente->id }}" class="btn btn-info edit-btn"><ion-icon name="create-outline"></ion-icon>Editar</a>
                        <form action="/clientes/{{ $cliente->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger delete-btn"> <ion-icon name="trash-outline"></ion-icon> Delete </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <h1>Total R$ {{$soma_clientes}}</h1>
    @else
        <p>Fluxo zerado, <a href="/clientes/create"> Cadastrar nova entrada  </a></p>
    @endif
</div>

@endsection