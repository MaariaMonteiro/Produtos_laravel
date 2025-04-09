<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background: #f8f9fa;
            padding: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h1 {
            color: #6f42c1;
            text-align: center;
            margin-bottom: 20px;
            font-size: 2.5rem;
            font-weight: 600;
        }

        .form-container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 30px;
            width: 100%;
            max-width: 600px;
            transform: translateY(20px);
            transition: all 0.3s ease;
        }

        .form-container:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: 600;
            color: #6f42c1;
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background-color: #f9f9f9;
            font-size: 16px;
            color: #333;
            transition: all 0.3s ease;
        }

        input:focus {
            border-color: #6f42c1;
            outline: none;
            box-shadow: 0 0 8px rgba(111, 66, 193, 0.3);
        }

        input:disabled {
            background-color: #f0f0f0;
            color: #999;
        }

        .btn-container {
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .btn-voltar {
            background: linear-gradient(135deg, #6f42c1, #8e44ad);
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            font-size: 16px;
            text-align: center;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .btn-voltar:hover {
            background: linear-gradient(135deg, #8e44ad, #6f42c1);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 768px) {
            .form-container {
                padding: 20px;
            }
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h1>Produtos</h1>
        <form action="#" method="POST">
            <div class="form-group">
                <label for="lblNome">Nome:</label>
                <input type="text" name="nome" value="Produto Exemplo" disabled>
            </div>

            <div class="form-group">
                <label for="lblValor">Valor:</label>
                <input type="text" name="valor" value="R$ 199,99" disabled>
            </div>

            <div class="form-group">
                <label for="lblEstoque">Quantidade:</label>
                <input type="text" name="estoque" value="50" disabled>
            </div>

            <div class="btn-container">
                <a href="/" class="btn-voltar">Voltar para Página Principal</a>
            </div>
        </form>
    </div>

</body>
</html>
