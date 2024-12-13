<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Sistema de Gestão</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .hero {
            height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            background: linear-gradient(to right, #02315a, #054579);
            color: white;
        }
    </style>
</head>
<body>
    <header class="bg-dark text-white" style="height: 12vh">
        <div class="container">
            <h1 class="text-center">Bem-vindo ao Sistema de Gestão</h1>
        </div>
    </header>

    <section class="hero">
        <div>
            <h1 class="display-4">Gerencie Seu Negócio com Facilidade</h1>
            <p class="lead mt-3">
                Um sistema completo para ajudar você a organizar e otimizar seus processos empresariais.
            </p>
            <a href="{{ url('/login') }}" class="btn btn-primary btn-lg mt-4">Acesse o Sistema</a>
            <a href="{{ url('/register') }}" class="btn btn-outline-light btn-lg mt-4">Cadastre-se</a>
        </div>
    </section>

    <footer class="text-center bg-light" style="height: 8vh">
        <p>&copy; {{ date('Y') }} Sistema de Gestão. Todos os direitos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
