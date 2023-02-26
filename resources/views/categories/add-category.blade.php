<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Add Category') }}
        </h2>
    </x-slot>


                        <form method="post" action="{{route('store-category')}}">
                            @csrf
                            <input type="text" name="title">
                            <button class="btn" type="submit">Submit </button>
                        </form>

</x-app-layout>
