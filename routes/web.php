<?php

use Illuminate\Support\Facades\Route;
use App\Models\Produto;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Display the welcome page
Route::get('/', function () {
    return view('welcome');
});

// Route for creating a product
Route::post('/cadastrar-produto', function(Request $request) {
    Produto::create([
        'nome' => $request->nome,
        'valor' => $request->valor,
        'estoque' => $request->estoque,
    ]);

    echo '  
    <!DOCTYPE html>
    <html>
    <head>
        <title>Sucesso</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
                background-color: #f7f8fa;
            }
            .mensagem {
                background: white;
                padding: 2rem;
                border-radius: 8px;
                box-shadow: 0 2px 10px rgba(0,0,0,0.1);
                text-align: center;
                max-width: 400px;
                border-left: 5px solid #28a745;
            }
            .botao {
                display: inline-block;
                margin-top: 1rem;
                padding: 0.5rem 1rem;
                background: #6f42c1;
                color: white;
                text-decoration: none;
                border-radius: 4px;
            }
        </style>
    </head>
    <body>
        <div class="mensagem">
            <h3>Produto criado com sucesso!</h3>
            <a href="/" class="botao">Voltar ao Cadastro</a>
        </div>
    </body>
    </html>';
});

Route::get('/listar-produto/{id}', function($id) {
    $produto = Produto::find($id);
    return view('listar', ['produto' => $produto]);
});

// Route for displaying the edit form of a product
Route::get('/editar-produto/{id}', function($id) {
    $produto = Produto::find($id);
    return view('editar', ['produto' => $produto]);
});

// Route for handling the product update
Route::post('/editar-produto/{id}', function(Request $request, $id) {
    $produto = Produto::find($id);

    $produto->update([
        'nome' => $request->nome,
        'valor' => $request->valor,
        'estoque' => $request->estoque,
    ]);

    return redirect('/')->with('success', 'Produto editado com sucesso!');
});

Route::get('/excluir-produto/{id}', function($id) {
    // Encontrar o produto pelo ID
    $produto = Produto::find($id);

    // Verificar se o produto existe
    if ($produto) {
        // Se o produto existir, deletá-lo
        $produto->delete();
        return redirect('/')->with('success', 'Produto excluído com sucesso!');
    } else {
        // Se o produto não for encontrado, exibir mensagem de erro
        return redirect('/')->with('error', 'Produto não encontrado.');
    }
});

