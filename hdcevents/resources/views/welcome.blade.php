<h1>Bem-vindo</h1>
<p>Nome: {{ $nome }}</p>
<p>Idade: {{ $idade }}</p>

<ul>
    @foreach($array as $item)
        <li>{{ $item }}</li>
    @endforeach
</ul>