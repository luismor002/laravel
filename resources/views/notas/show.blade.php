<x-app-layout>
    <div class="m-3">
        
        <label for="">titulo</label>
        <p>{{$notas->titulo}}</p>
        <label for="">descripcion </label>
        <p>{{$notas->descripcion}}</p>
    </div>

    <input class="bg-red-600 rounded-lg text-white p-2" type="button"
     onclick="history.back()" name="volver atrás" value="volver atrás">
</x-app-layout>