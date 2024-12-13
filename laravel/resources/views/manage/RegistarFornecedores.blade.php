<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registar produtos - Sistema de Gestão</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header text-center bg-primary text-white">
                        <h4>Registar um produto</h4>
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form method="POST" action="{{ route('registerforn.post') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="nome_empresa" class="form-label">Nome da empresa</label>
                                <input type="text" class="form-control" id="nome_empresa" name="nome_empresa" value="{{ old('nome_empresa') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="contacto_fornecedor" class="form-label">Contacto do Fornecedor</label>
                                <input type="number" class="form-control" id="contacto_fornecedor" name="contacto_fornecedor" value="{{ old('contacto_fornecedor') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="email_fornecedor" class="form-label">Email do fornecedor</label>
                                <input type="email" class="form-control" id="email_fornecedor" name="email_fornecedor" value="{{ old('email_fornecedor') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="produto_fornecido" class="form-label">Produto fornecimento</label>
                                <input type="text" class="form-control" id="produto_fornecido" name="produto_fornecido" value="{{ old('produto_fornecido') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="quantidade_recebida" class="form-label">Quantidade Fornecedia</label>
                                <input type="number" class="form-control" id="quantidade_recebida" name="quantidade_recebida" value="{{ old('quantidade_recebida') }}" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Registar Fornecedor</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer text-center">
                        <a href="/manage" class="nav-link">Voltar para o painel de gestao</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
