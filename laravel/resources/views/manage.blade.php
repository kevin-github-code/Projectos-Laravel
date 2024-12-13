<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <header class="bg-dark text-white" style="height: 10vh">
        <div class="">
            <h1 class="text-center">Bem-vindo a pagina de Gestao, reservada somente aos gestores do SGS</h1>
        </div>
        <hr>
    </header>
    <div class="d-flex">
        <!-- Menu Lateral -->
        <nav class="bg-dark text-white p-3" style="width: 17vw; height: 90vh;">
            <h4>Menu</h4>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a href="/manage" class="nav-link text-white">Dashboard de Gestao</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('manage.produtos') }} " class="nav-link text-white">Gestao de Produtos</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('manage.fornecedores') }}" class="nav-link text-white">Gestao de Fornecedores</a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('logout') }} " class="nav-link text-danger">Sair</a>
                </li>
            </ul>
        </nav>

        {{-- Dashboard Dinamico --}}
        <div>
            <h1>Dashboard</h1>
        </div>
    </div>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
