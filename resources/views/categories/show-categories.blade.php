<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>
    <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                    @foreach($categories as $category)
                        <form method="get" action="{{route('show-lessons',$category->title)}}">
                            <button class="btn btn-primary btn-outline m-2 min-w-full">{{$category->title}} </button>
                        </form>
                    @endforeach
    </div>
</x-app-layout>
