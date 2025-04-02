@extends('base')

@section('content')

<div>
    <a href="{{ route('authors.create') }}">Cadastrar Autor</a>
</div>

<h2>Gerenciar Autores</h2>

<table border="1">
    <tr>
        <th>Nome</th><th>País</th><th colspan="3">Comandos</th>
    </tr>
    @foreach ($authors as $author )
    <tr>
        <td>{{ $author->name }}</td>
        <td>{{ $author->country }}</td>
        <td> <a href="{{ route("authors.show", $author->id) }}">Exibir</a> </td>
        <td> <a href="{{ route("authors.edit", $author->id) }}">Editar</a> </td>
        <td>
            <form method="post" action="{{ route("authors.destroy", $author->id) }}">
                @csrf
                @method("DELETE")
                <input type="submit" value="Excluir">
            </form>
        </td>
    <tr>
    @endforeach
</table>


<div>
    <a href="{{ route('index') }}">Voltar ao início</a>
</div>

@endsection
