<x-app-layout>

<div class="container w-full">
        <div class="flex w-full justify-center items-center ">
            <form action="{{route('post.update')}}" method="POST">
                @csrf
                <input type="hidden"name="id" id="id" value="{{$post->id}}">

                @include('post.form') 
            </form>
        </div>
    </div>
</x-app-layout>