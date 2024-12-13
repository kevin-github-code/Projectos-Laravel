<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Visualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1>Detalhes do Produto</h1>
        <p><strong>Nome:</strong> {{ $product->nome }}</p>
        <p><strong>Preço:</strong> {{ $product->preco }} Meticais</p>
        <p><strong>Quantidade:</strong> {{ $product->quantidade }}</p>
        <p><strong>Data de Fornecimento:</strong> {{ $product->data_fornecimento }}</p>
        <a href="{{ route('manage.produtos') }}" class="btn btn-primary">Voltar para tabela</a>
    </div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
