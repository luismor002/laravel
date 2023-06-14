<x-app-layout>

    <div class="container w-full">
            <div class="flex w-full justify-center items-center ">
                <form action="{{route('notas.update')}}" method="POST">
                    @csrf
                    
                    <input type="hidden"name="id" id="id" value="{{$notas->id}}">

                    @include('notas.form') 
                </form>
            </div>
        </div>
</x-app-layout>