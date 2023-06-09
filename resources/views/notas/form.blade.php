<div class="w-full max-w-xs">
 
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="titulo">
        titulo
      </label>
      <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 
      leading-tight focus:outline-none focus:shadow-outline" 
      id="titulo" name="titulo" value="{{$notas->titulo ?? ''}}" type="text" placeholder="titulo ">
    </div>
    <div class="mb-6 ">
      <label class="block text-gray-700 text-sm font-bold mb-2 " for="password">
        descripcion
      </label>
      <input class="shadow appearance-none border border-red-500 rounded w-full py-2 px-3
       text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" 
       id="descripcion"  name="descripcion" value="{{$notas->descripcion ?? ''}}" type="text" placeholder="descripcion">
      
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"  type="submit">
        guardar
      </button>
      <input class="bg-red-600 rounded-lg text-white p-2" type="button"  onclick="history.back()" name="volver atrás" value="volver atrás">
    </div>
  
</div>