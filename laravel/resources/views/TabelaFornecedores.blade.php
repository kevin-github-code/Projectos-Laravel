<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabela Fornecedores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="Fornecedores">
        <header class="bg-dark text-white py-3">
            <div class="container">
                <h1 class="text-center">Bem-vindo a Tabela Fornecedores</h1>
            </div>
        </header>
        <hr>
        <table class="table table-bordered">
            <thead>
                <th>#</th>
                <th>Nome da Empresa</th>
                <th>Contacto Fornecedor</th>
                <th>Email Fornecedor</th>
                <th>Produto Fornecido</th>
                <th>Quantidade Recebida</th>
            </thead>
            @foreach ($fornecedores as $supllier)
                <tbody>
                    <td>{{ $supllier->id }}</td>
                    <td>{{ $supllier->nome_empresa }}</td>
                    <td>{{ $supllier->contacto_fornecedor }}</td>
                    <td>{{ $supllier->email_fornecedor }}</td>
                    <td>{{ $supllier->produto_fornecido }}</td>
                    <td>{{ $supllier->quantidade_recebida }}</td>
                </tbody>
            @endforeach
        </table>
        <button class="btn btn-primary">
            <a href="/dashboard" class="nav-link">Voltar para o Dashboard</a>
        </button>
    </div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
