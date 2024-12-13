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
                        <form method="POST" action="{{ route('registerpro.post') }}">
                            @csrf
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="preco" class="form-label">Preco</label>
                                <input type="number" class="form-control" id="preco" name="preco" value="{{ old('preco') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="quantidade" class="form-label">Quantidade</label>
                                <input type="number" class="form-control" id="quantidade" name="quantidade" value="{{ old('preco') }}" required>
                            </div>
                            <div class="mb-3">
                                <label for="quantidade" class="form-label">Data de fornecimento</label>
                                <input type="date" class="form-control" id="dataforn" name="dataforn" value="{{ old('dataforn') }}" required>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Registar produto</button>
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
