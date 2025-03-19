<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class BookController extends Controller
{
    private array $books = [
        '1984',
        'A revolução dos bichos',
        'Devoradores de Estrelas',
        'Matéria Escura',
        'Guerra do Velho'
    ];

    public function index()
    {
        echo "<h1>Meus livros</h1>";
        foreach ($this->books as $book) {
            echo "<p>$book</p>";
        }
    }

    public function show($index)
    {
        try {
            echo "<h1>Livro Cadastrado</h1>";
            echo "<p>{$this->books[$index]}</p>";
        } catch (Exception $e) {
            abort(404);
        }
    }
}
