<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabela Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-dark text-white py-3">
        <div class="container">
            <h1 class="text-center">Bem-vindo a Tabela Produtos</h1>
        </div>
    </header>
    <hr>
    <div class="Products m-1">
        <table class="table table-bordered">
            <thead>
                <th>#</th>
                <th>Nome</th>
                <th>Preco</th>
                <th>Quantidade</th>
                <th>Data de Fornecimento</th>
            </thead>
            @foreach ($products as $product)
                <tbody>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->nome }}</td>
                    <td>{{ $product->preco }}</td>
                    <td>{{ $product->quantidade }}</td>
                    <td>{{ $product->data_fornecimento }}</td>
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
