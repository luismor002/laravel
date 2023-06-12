<x-app-layout>
    <div class="container w-full">
        <div class="flex w-full justify-center items-center ">
            <form action="{{route('post.store')}}" method="post">
                @csrf
                @include('post.form') 
            </form>
        </div>
    </div>
</x-app-layout>

















