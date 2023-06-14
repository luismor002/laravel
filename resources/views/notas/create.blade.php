<x-app-layout>
    <div class="container w-full">
        <div class="flex w-full justify-center items-center ">
            <form action="{{route('notas.store')}}" method="post">
                @csrf
                @include('notas.form') 
            </form>
        </div>
    </div>
</x-app-layout>