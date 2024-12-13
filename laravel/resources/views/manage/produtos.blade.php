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
            <h1 class="text-center">Bem-vindo a Gestao de Produtos</h1>
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
                <th>Acoes</th>
            </thead>
            @foreach ($products as $product)
                <tbody>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->nome }}</td>
                    <td>{{ $product->preco }} Mt</td>
                    <td>{{ $product->quantidade }}</td>
                    <td>{{ $product->data_fornecimento }}</td>
                    <td>
                        <button class="btn btn-primary">
                            <a href="{{ route('products.show', $product->id) }}" class="nav-link">Visualizar</a>
                        </button>
                        <button class="btn btn-info">
                            <a href="{{ route('products.edit', $product->id) }}" class="nav-link">Editar</a>
                        </button>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST"
                            style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm('Tem certeza que deseja apagar este produto?')">
                                Apagar
                            </button>
                        </form>
                    </td>
                </tbody>
            @endforeach
        </table>
        <button class="btn btn-success">
            <a href="/manage/registarprodutos" class="nav-link">Adicionar um produto</a>
        </button>
        <button class="btn btn-primary">
            <a href="/manage" class="nav-link">Voltar para o painel de gestao</a>
        </button>
    </div>
</body>

</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
