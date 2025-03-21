<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{ env("APP_NAME") }}</title>
</head>
<body>
    <div class="container">
        <header>
            <h1>{{ env("APP_NAME") }}</h1>
        </header>
        <nav>
            <ol>
                <li><a href="{{ route('index') }}">Início</a></li>
                <li><a href="#">Gêneros</a></li>
                <li><a href="{{ route('authors.index') }}">Autores</a></li>
                <li><a href="#">Livros</a></li>
            </ol>
        </nav>
        <main>
            {{-- inject code here!  --}}
            @yield("content")
        </main>
        <footer>
            <p>Aprendendo Laravel</p>
        </footer>
    </div>
</body>
</html>
