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

                    <form method="post" action="{{route('add-lesson')}}">
                        @csrf
                        <input type="text" name="title" placeholder="title">
                        <input type="text" name="description" placeholder="description">
                        <select class="select select-bordered" name="option">
                            <option disabled selected>Select category:</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}} </option>
                            @endforeach


                        </select>

                        <button type="submit" class="btn"> Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
