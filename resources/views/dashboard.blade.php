<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="flex bg-purple-500 justify-left py-28 ">
        <div class="flex flex-wrap bg-gradient-to-r from-pink-500 to-violet-700 h-auto w-1/4 border-2  border-black">
            <div class="flex flex-wrap  h-40 justify-center w-full">
                <div class="flex  w-40 h-auto justify-center items-center">
                    <img src="https://preview.redd.it/que-tienen-de-foto-de-perfil-en-whatsapp-v0-klxcadqzreua1.jpeg?width=924&format=pjpg&auto=webp&s=58028fe6fc7af9af12738b129f1beed621423e07" alt="perrito">
                </div>
            </div>
            <div class="flex flex-wrap  h-28 w-full mx-0">
                <div class="flex  uppercase  w-full justify-center items-center">
                    <h2>nombre </h2>
                </div>
                <div class="flex overline  w-full justify-center items-center">
                    <input type="text" name="nombre" id="nombre">
                </div>
            </div>
            <div class="flex flex-wrap h-32 w-full m-0">
                <div class="flex  w-full uppercase justify-center items-center ">contraseña</div>
                <div class="flex  w-full justify-center items-center">
                    <input type="text" name="" id="">
                </div>
                <div class="flex w-full justify-center items-center">
                    <button class="rounded-full bg-blue-600 border border-gray-700 hover:border-black  w-40">dale pa guardar</button>
                </div>
            </div>
        </div>
    </div>






    <div class="flex h-auto w-1/4 border-2 border-black ">
        <div class="flex flex-wrap w-full">
            <div class="bg-red-500 w-full">imag</div>
        </div>

        <div class="flex flex-wrap w-full ">
            <div class="bg-blue-500 w-full ">nombre</div>
            <div class="bg-blue-200 w-full ">texto para el nombre</div>
        </div>

        <div class="flex-grap">
            <div class=" bg-lime-400">la contraseña</div>
            <div class="bg-green-500"> boton</div>
            <div class="bg-green-700">para guardar</div>
        </div>


    </div>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                 <!-- <x-welcome /> -->
            </div>
        </div>
    </div>
</x-app-layout>
