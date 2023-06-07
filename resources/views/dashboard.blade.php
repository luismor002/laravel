<x-app-layout>
    <x-slot name="header">
         <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <!-- {{ __('Dashboard') }} -->
        </h2>

    </x-slot>
    
    <div class="flex bg-gray-700 w-full h-auto justify-end">
            <div class="ml-3 relative">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSdiSl9KbIKHzEg68JuAPZCQDfghDwzd_2JjpGKyu57RriW5-OcGQX9hr_GelXUxxKqK1Q&usqp=CAU" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex mr-20 mt-8 rounded-md ">
                                    <button type="button"  class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                        {{ Auth::user()->name }}
                                        <img class=" rounded-full w-12 h-12 ml-3 " src="https://img-14.stickers.cloud/packs/d39f942f-3408-4776-bf6e-f870130c82a1/webp/bf51f925-11b7-47b1-910d-e4d2d4eb92af.webp" alt="">

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('revisar tu perfile ajua') }}
                            </div>

                            <x-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('tu perfile') }}
                            </x-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-dropdown-link>
                            @endif

                            <div class="border-t border-gray-200"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-dropdown-link href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();">
                                    {{ __('salirte pa fuera') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div> 
            
    <div class="flex bg-gray-700 w-full h-[700px] items-center">
        <div class="flex bg-white  h-[550px] w-full  "> 
            <div class="flex flex-wrap bg-gray-400 h-64 w-[600px] border-2 border-black  m-10">
                <div class="flex w-1/3 ">
                    <img class="rounded-full h-36 w-36 m-3 border-2 border-black"src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSdiSl9KbIKHzEg68JuAPZCQDfghDwzd_2JjpGKyu57RriW5-OcGQX9hr_GelXUxxKqK1Q&usqp=CAUg" alt="PERRITO">
                </div>
                <div class="flex flex-wrap  w-2/3 text-justify p-6">ya llene el texto de esta parte ya puedo seguir avanzando o eso creo </div>                  
                <div class="flex w-full justify-center items-center m-2">
                    <div class=" w-80 ">
                         <input class="  w-80" type="email" name="" id="">                    
                    </div>                   
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
