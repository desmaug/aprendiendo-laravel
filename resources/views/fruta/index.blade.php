<h1>Listado de CEA</h1>
<ul>
    @foreach($frutas as $fruta)
        <a href="{{ route('frutas.detail', ['id' => $fruta->id])}}">
            <li>{{$fruta->nombre}}</li>
        </a>
    @endforeach
</ul>
