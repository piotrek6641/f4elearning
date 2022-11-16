<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <x-success-messsage>

    </x-success-messsage>

    <x-error-message>

    </x-error-message>
    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">

                <div class="p-6 bg-white border-b border-gray-200 min-h-screen">


                    <form method="post" action="{{route('update-lesson',['title'=>$lesson->category->title, 'lesson'=>$lesson->title])}}">

                        @method('PUT')
                        @csrf
                     <input type="text" value="{{$lesson->title}}" name="title">  </br>
                     <input type="text"  value=" {{$lesson->description}}" name="description">
                        <button type="sumbit" type="submit" class="btn"> Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
