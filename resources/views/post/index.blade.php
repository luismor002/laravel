<x-app-layout>
    <table class="border-2 w-full border-black">
        <tr class="w-full ">
            <th class=" border-2 border-black  bg-gray-500 w-1/4 ">id</th>
            <th class="bg-gray-500 w-1/4 border-2 border-black">titulo</th>
            <th class="bg-gray-500 w-1/4 border-2 border-black">descripcion</th>
            <th class="border-2 bg-gray-500 border-black w-1/4 ">acciones </div>
        </tr>
        @foreach($posts as $post)
        <tr class="w-full">
            <td class=" border-2 text-center border-black mr-4 w-1/4 ">{{$post -> id}}</td>
            <td class="border-2 text-center border-black w-1/4 ">{{$post -> titulo}}</td>
            <td class="border-2 text-center border-black w-1/4 ">{{$post -> descripcion}}</td>
            <td class="flex justify-center items-center ">
                <a class="flex justify-center items-center p-2 mx-2 text-white bg-blue-700 w-20 hover:bg-blue-800 rounded-md" href="{{route('post.show', ['post'=>$post->id])}}">ver</a>
                <a class="flex justify-center items-center text-white p-2 bg-yellow-500 w-20 rounded-md hover:bg-yellow-600" href="{{route('post.edit', ['post'=>$post->id])}}">editar</a>
                <form action="{{ route('post.eliminar', $post->id) }}"  method="POST" class="inline">
                        @csrf
                        {{method_field('post')}}
                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded ml-2" onclick="return confirm('que lo quite dices?')" 
                            value="borrar">Eliminar
                        </button>
                    </form>               
                    
                </tr>
                @endforeach
            </table>
            <a class="bg-sky-600 text-white p-2 my-4" href="{{ url('post/create') }}">registro</a>
            <a href="{{ route('notas.index')  }}">iuhj</a>
            
</x-app-layout>