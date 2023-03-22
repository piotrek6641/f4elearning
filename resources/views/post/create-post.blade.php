<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Creating Post') }}
        </h2>
    </x-slot>
    <form method="get" action="{{route('post-view')}}"><x-back-button> </x-back-button> </form>
    <form method="post" action="{{route('add-post')}}" class="flex justify-center">
        <div class="flex flex-col md:w-3/4 gap-y-4 w-full">
            @csrf
            <input type="text" name="title" placeholder="post title" class="input input-bordered">
            <textarea rows=3 type="text" name="content" placeholder="Write anything you want..." class="textarea textarea-bordered"></textarea>
            <select class="select select-bordered" name="category">
                @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->title}} </option>
                @endforeach
            </select>
            <button type="submit" class="btn"> Submit</button>
        </div>
    </form>

</x-app-layout>
