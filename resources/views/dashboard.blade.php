<x-app-layout>
    <x-slot name="header">
         <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <!-- {{ __('Dashboard') }} -->
        </h2>

    </x-slot>
    
    <div class="flex bg-gray-700 w-full h-auto justify-end">
        <div class="flex flex-wrap  mr-10 ">
            <button class="cursor-pointer active:bg-blue-700  bg-blue-600 border border-gray-700 hover:border-black  w-16 my-11 rounded-full ">clik</button>
        </div>
    </div>    
    <div class="flex bg-gray-700 w-full h-[700px] items-center">
        <div class="flex bg-white  h-[550px] w-full  ">
            <div class="flex flex-wrap bg-gray-400 h-64 w-[600px] border-2 border-black  m-10">
                <div class="flex w-1/3 ">
                    <img class="rounded-full h-36 w-36 m-3 border-2 border-black"src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSdiSl9KbIKHzEg68JuAPZCQDfghDwzd_2JjpGKyu57RriW5-OcGQX9hr_GelXUxxKqK1Q&usqp=CAU" alt="PERRITO">
                </div>
                <div class="flex flex-wrap  w-2/3 text-justify p-6">ya llene el texto de esta parte ya puedo seguir avanzando o eso creo </div>                    <div class="flex w-full justify-center items-center m-2">
                    <button class="bg-blue-600 rounded-full cursor-pointer active:bg-blue-700  hover:border-black  w-40">creo que iba un boton </button>
                </div>
                <div class="">
                    <button id="dropdownDefaultButton" ></button>
                </div>
                    
                
            </div>
                
            <div class="flex flex-wrap bg-lime-700 justify-end ml-[550px] w-36 h-[550px]"> 
            </div>
        </div>
    </div>
   
    
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-500 overflow-hidden shadow-xl sm:rounded-lg">
                 <!-- <x-welcome /> -->
            </div>
        </div>
    </div>
</x-app-layout>
