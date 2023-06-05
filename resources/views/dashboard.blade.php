<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="flex justify-center ps py-14 ">
        <div class="flex flex-wrap bg-gradient-to-r shadow-2xl from-pink-500 to-violet-700 h-auto w-1/4 border-2 m-9 border-black">
            <div class="flex flex-wrap  h-40 justify-center w-full">
                <div class="flex  w-40 h-auto justify-center items-center drop-shadow-2xl">
                    <img class=" rounded-full h-full w-full border-2 border-black" src="https://preview.redd.it/que-tienen-de-foto-de-perfil-en-whatsapp-v0-klxcadqzreua1.jpeg?width=924&format=pjpg&auto=webp&s=58028fe6fc7af9af12738b129f1beed621423e07" alt="perrito">
                </div>
            </div>
            <div class="flex flex-wrap  h-28 w-full mx-0">
                <div class="flex  uppercase  w-full justify-center items-center">
                    <h2>nombre </h2>
                </div>
                <div class="flex overline  w-full justify-center items-center">
                    <input class="rounded-full" type="text" name="nombre" id="nombre">
                </div>
            </div>
            <div class="flex flex-wrap h-32 w-full m-0">
                <div class="flex  w-full uppercase justify-center items-center ">contraseña</div>
                <div class="flex  w-full justify-center items-center">
                    <input class="rounded-full" type="text" name="" id="">
                </div>
                <div class="flex w-full justify-end items-end p-3">
                    <button class=" rounded-full  bg-blue-600 border border-gray-700 hover:border-black  w-40">dale pa guardar</button>
                </div>
            </div>
        </div>
    





        <div class="flex flex-wrap  h-auto w-1/4 border-2 drop-shadow-2xl bg-gradient-to-r from-green-500 to-violet-700 m-9 border-black ">
            <div class="flex flex-wrap  justify-left items-left h-auto w-full ">
                <div class="flex flex-wrap h-auto w-32">
                    <img class=" rounded-full h-full w-full border-2 border-black" src="https://cloudfront-us-east-1.images.arcpublishing.com/infobae/WBV5RZ46QRDGJMFDOUSL2WBLMI.jpg" alt="perrito panzon">
                </div>
            </div>
            
            <div class="flex flex-wrap h-28 w-full ">
                <div class="flex flex-wrap w-full uppercase justify-center items-center">
                    <h1> nombre</h1>
                </div>
                <div class="flex  overline  w-full justify-center items-center">
                    <input class="rounded-full" type="text" name="nombre" id="nombre">
                </div>
            </div>
                        
            <div class="flex flex-wrap h-32 w-full">
                <div class="flex flex-wrap w-full uppercase justify-center items-center ">
                    <h1>la contraseña </h1>
                </div>
                <div class="flex  justify-center items-center w-full"> 
                    <input class="rounded-full" type="password" name="" id="">
                </div>
                <div class="flex w-full justify-end items-end drop-shadow-2xl p-3">
                    <button href="https://www.youtube.com/watch?v=2WFZBFKIEg4" class="rounded-full cursor-pointer  bg-blue-600 border border-gray-700 hover:border-black  w-40">dale pa guardar</button>
                </div>
            </div>
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
