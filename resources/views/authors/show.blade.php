@extends('base')

@section('content')

<h3>Visualizar Autor</h3>
<hr>

<p><strong>Nome:</strong> {{ $author->name }} </p>
<p><strong>País:</strong> {{ $author->country }} </p>

<br>

<a href="{{ route('authors.index') }}">Voltar ao início</a>

@endsection
