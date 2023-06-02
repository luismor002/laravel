<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="flex flex-wrap w-full bg-gray-800  ">
        
        <div class="flex flex-wrap bg-green-700 h-[300px] w-full sm:w-1/2 p-5">
            <div class="bg-red-500 w-full bg-gradient-to-r from-cyan-500 to-blue-700"> sdfdfsf</div>
            <div class="bg-cyan-700 w-full sm:w-1/2">2</div>
            <div class="bg-yellow-500  w-full sm:w-1/2">3</div>   
        </div>
    
        <div class="flex flex-wrap bg-gradient-to-r from-pink-500 to-violet-500 h-[300px] w-full sm:w-1/2 border-4 p-5 border-black">
            <div class="bg-green-500 w-full sm:w-1/2 ">1</div>
            <div class="bg-red-600 w-full sm:w-1/2 ">2</div>
            <div class="bg-pink-600 w-full bg-gradient-to-r from-yellow-500 to-orange-500">3</div>
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
