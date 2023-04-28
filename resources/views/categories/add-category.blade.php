<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Add Category') }}
        </h2>
    </x-slot>
    <a href="{{route('admin')}}"> <x-back-button> </x-back-button> </a>
    <div class="flex justify-center ">
                        <form method="post" action="{{route('store-category')}}" class="w-3/4 flex flex-col gap-y-4">
                            @csrf
                            <input type="text" name="title" class="input input-bordered" placeholder="Category name...">
                            <button class="btn" type="submit">Add </button>
                        </form>
    </div>
</x-app-layout>
