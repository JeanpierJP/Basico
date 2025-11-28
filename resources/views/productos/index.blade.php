<h1>Lista de Productos</h1>

<a href="/productos/create">Crear Producto</a>
<br><br>

@foreach ($productos as $p)
    <p><strong>{{ $p->nombre }}</strong> - S/. {{ $p->precio }}</p>
@endforeach
