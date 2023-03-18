<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Edit Category') }}
        </h2>
    </x-slot>
    <a href="{{route('admin')}}"> <x-back-button> </x-back-button> </a>
    <div class="flex justify-center">
                        <form method="post" action="{{route('update-category')}}">
                            <div class="flex flex-col gap-y-4 mt-8">
                            @csrf
                            <select class="select select-bordered" name="option">
                                <option disabled selected> Select </option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}"> {{$category->title}} </option>
                            @endforeach
                            </select>
                                <input class="input input-bordered" name="title" placeholder="New name for this category...">
                            <button class="btn" type="submit">Update </button>
                            </div>
                        </form>
    </div>
</x-app-layout>
