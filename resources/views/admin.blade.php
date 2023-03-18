<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl  leading-tight">
            {{ __('Admin Panel') }}
        </h2>
    </x-slot>
                <div class="flex flex-col gap-y-8">
                    <a href="{{route('add-category')}}" class="text-center text-3xl p-5 rounded-md border-2 border-secondary hover:border-secondary hover:bg-base-200 focus:bg-base-200 focus:border-secondary-focus">Add new category </a>
                    <a href="{{route('edit-category')}}" class="text-center text-3xl p-5 border-2 border-secondary rounded-md hover:bg-base-200 focus:bg-base-200 focus:border-secondary-focus">Edit categories </a>
                    <a href="{{route('add-lesson')}}" class="text-center text-3xl p-5 rounded-md border-2 border-secondary  hover:bg-base-200 focus:bg-base-200 focus:border-secondary-focus">Add new lesson </a>
                    <a href="{{route('show-email')}}" class="text-center text-3xl p-5 rounded-md border-2 border-secondary hover:bg-base-200 focus:bg-base-200 focus:border-secondary-focus">Send Newsletter emails </a>
                    <a href="{{route('show-users')}}" class="text-center text-3xl p-5 border-2 border-secondary  hover:bg-base-200 focus:bg-base-200 focus:border-secondary-focus">Menage Users </a>



                </div>

</x-app-layout>
