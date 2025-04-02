@extends('base')

@section('content')

<h2>Cadastrar Autor</h2>

<form method="POST" action="{{ route('authors.store') }}">
    @csrf
    <input type="text" name="name"  placeholder="Digite o nome do autor">
    @error('name')
        <div style="color:red">{{ $message }}</div>
    @enderror

    <br>
    <input type="text" name="country"  placeholder="Digite o país">
    @error('country')
        <div style="color:red">{{ $message }}</div>
    @enderror
    <br>
    <input type="submit" value="Cadastrar">
    <input type="reset" value="Limpar">
</form>

@if(count($errors) > 0)
    {{ dd($errors) }}
@endif

@endsection
