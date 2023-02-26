<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Creating Post') }}
        </h2>
    </x-slot>


    <form method="get" action="{{route('post-view')}}"><x-back-button> </x-back-button> </form>
                    <form method="post" action="{{route('add-post')}}">
                        @csrf
                        <input type="text" name="title" placeholder="title">
                        <input type="text" name="content" placeholder="content">

                        <button type="submit" class="btn"> Submit</button>
                    </form>
</x-app-layout>
