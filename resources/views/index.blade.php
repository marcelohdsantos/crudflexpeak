@extends('layouts.main')

@section('title', 'Home')
    
@section('content')
    
       <h1>Saldo: R$ {{ $soma_clientes - $soma_fornecedores }}</h1>
    
@endsection