<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 min-h-screen">
                    <form method="get" action="{{route('post-view')}}"><button class="btn" > Go back</button> </form>
                    <form method="post" action="{{route('add-post')}}">
                        @csrf
                        <input type="text" name="title" placeholder="title">
                        <input type="text" name="content" placeholder="content">

                        <button type="submit" class="btn"> Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
