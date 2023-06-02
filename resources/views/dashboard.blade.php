<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="flex flex-wrap w-full bg-gray-800  ">
        
        <div class="flex flex-wrap bg-green-700 h-auto w-full sm:w-1/2 p-2">
            <div class="w-full h-[300px] bg-gradient-to-r sm:w-1/2 p-2 border-2 border-black from-cyan-500 to-blue-700"> </div>
            <div class=" w-full text-justify h-[300px] sm:w-1/2  bg-gradient-to-r p-3 border-2 border-black from-purple-700 to-pink-500">no se que poner en este cuadro simplemento lo quiero rellenar pero me da hueva pensar en un texto interesante asi que solo escribire a lo menso</div>
               
        </div>
    
        <div class="flex flex-wrap bg-gradient-to-r text-center from-pink-500 to-violet-500 h-[350px] w-full sm:w-1/2 border-4 p-2 border-black">
            <div class="bg-green-500 w-full sm:w-1/3 p-3">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nam facere soluta facilis minus ab, repudiandae voluptate? Explicabo, beatae nemo porro ipsum minus, saepe numquam tenetur reiciendis ducimus rerum accusantium debitis.</div>
            <div class="bg-red-600 h-35 w-full sm:w-1/3 my-[100px]"></div>
            <div class="bg-pink-600 w-full p-3 bg-gradient-to-r from-yellow-500 to-orange-500 text-right sm:w-1/3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam eos soluta vel repudiandae qui aliquam cum repellat debitis ratione ea, expedita dolorem voluptates obcaecati quo, doloremque aut eligendi ab nulla.</div>
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
