<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!--fonte do google-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
    <!--css do bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!--css da aplicação-->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <header>    
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Fluxo de Caixa</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="clientes/create">Cadastrar Entrada</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/fornecedores/create">Cadastrar Retirada</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/clientes">Lista Entrada</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/fornecedores">Lista Saida</a>
                </li>
              </ul>
            </div>
          </nav>
    </header>

    <main>
      <div class="container-fluid">
        <div class="row">
          
            @if (session('msg'))
                <p class="msg"> {{ session('msg') }}</p>
            @endif

            @yield('content')
        </div>
      </div>
    </main>
    

      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <footer>
        <p>Fluxo de Caixa &copy; 2021</p>
    </footer>
</body>
</html>