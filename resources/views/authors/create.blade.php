@extends('base')

@section('content')

<h2>Cadastrar Autor</h2>

<form method="POST" action="{{ route('authors.store') }}">
    @csrf
    <input type="text" name="name" required placeholder="Digite o nome do autor">
    <br>
    <input type="text" name="country" required placeholder="Digite o país">
    <br>
    <input type="submit" value="Cadastrar">
    <input type="reset" value="Limpar">
</form>


@endsection
