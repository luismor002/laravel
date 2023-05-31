<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="flex my-8 ">
        <div class="bg-green-700 h-[250px] w-full ">
            hola
        </div>
    </div>

    <div class="flex">
        <div class="bg-white-700 h-[250px] w-full border-4 border-black">
            este es el segundo   
        </div>
    </div>

    <div class="flex my-8">
        <div class="bg-red-700 h-[250px] w-full " >
            y aqui va el 3
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
