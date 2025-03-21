@extends('base')

@section('content')

<div>
    <a href="{{ route('authors.create') }}">Cadastrar Autor</a>
</div>

<h2>Gerenciar Autores</h2>


<div>
    <a href="{{ route('index') }}">Voltar ao início</a>
</div>

@endsection
