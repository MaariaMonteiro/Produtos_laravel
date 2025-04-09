<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f6fc;
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }

        .container h1 {
            color: #6f42c1;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group label {
            font-size: 1.1rem;
            font-weight: bold;
            color: #555;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            font-size: 1rem;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }

        .form-group input:focus {
            border-color: #6f42c1;
            box-shadow: 0 0 5px rgba(111, 66, 193, 0.4);
        }

        .btn-container {
            display: flex;
            justify-content: space-between;
        }

        .btn-voltar, .btn-salvar {
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .btn-voltar {
            background-color: #6c757d;
            color: white;
            border: 1px solid #6c757d;
        }

        .btn-voltar:hover {
            background-color: #5a6268;
            border-color: #545b62;
        }

        .btn-salvar {
            background-color: #6f42c1;
            color: white;
            border: 1px solid #6f42c1;
        }

        .btn-salvar:hover {
            background-color: #5a33a3;
            border-color: #4e2b91;
        }

        @media (max-width: 768px) {
            .container {
                padding: 30px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Editar Produto</h1>
    <form action="/editar-produto/{{ $produto->id }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="lblNome">Nome:</label>
            <input type="text" name="nome" value="{{ $produto->nome }}" required>
        </div>

        <div class="form-group">
            <label for="lblValor">Valor:</label>
            <input type="text" name="valor" value="{{ $produto->valor }}" required>
        </div>

        <div class="form-group">
            <label for="lblEstoque">Quantidade:</label>
            <input type="text" name="estoque" value="{{ $produto->estoque }}" required>
        </div>

        <div class="btn-container">
            <a href="/" class="btn-voltar">Voltar para Página Principal</a>
            <button type="submit" class="btn-salvar">Salvar</button>
        </div>
    </form>
</div>

</body>
</html>
