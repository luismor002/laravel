<x-app-layout>
    <div class="m-3">

        <label for="">titulo</label>
        <p>{{$post->titulo}}</p>
        <label for="">img </label>
        <p>{{$post->img}}</p>
        <label for="">descripcion </label>
        <p>{{$post->descripcion}}</p>
    </div>

    <input class="bg-red-600 rounded-lg text-white p-2" type="button" onclick="history.back()" name="volver atrás" value="volver atrás">
</x-app-layout>