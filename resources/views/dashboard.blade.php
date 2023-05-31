<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="flex flex-wrap bg-gray-800 h-auto w-full  ">
        
        <div class="bg-green-700 h-10 w-full sm:w-1/3 p-5">
            hola
        </div>
        <div class="bg-white h-10 w-full sm:w-1/3 border-4 p-10 border-black">
            este es el segundo   
        </div>
        <div class="bg-red-700 h-10 w-full sm:w-1/3 p-5" >
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
