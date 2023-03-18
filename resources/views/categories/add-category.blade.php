<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Add Category') }}
        </h2>
    </x-slot>
    <a href="{{route('admin')}}"> <x-back-button> </x-back-button> </a>
    <div class="flex justify-center">
                        <form method="post" action="{{route('store-category')}}">
                            @csrf
                            <input type="text" name="title" class="input input-bordered" placeholder="Category name...">
                            <button class="btn" type="submit">Add </button>
                        </form>
    </div>
</x-app-layout>
