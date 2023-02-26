<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl  leading-tight">
            {{ __('Admin Panel') }}
        </h2>
    </x-slot>
                <div class="flex flex-col gap-y-8">
                    <a href="{{route('add-category')}}" class="text-center text-3xl p-5 rounded-md border-2 border-primary from-primary to-base-100 hover:border-primary-focus hover:bg-base-200">Add new category </a>
                    <a href="#" class="text-center text-3xl p-5 border-2 border-primary rounded-md hover:bg-base-200">Edit categories </a>
                    <a href="{{route('add-lesson')}}" class="text-center text-3xl p-5 rounded-md border-2 border-primary  hover:bg-base-200">Add new lesson </a>
                    <a href="{{route('show-email')}}" class="text-center text-3xl p-5 rounded-md border-2 border-primary hover:bg-base-200">Send Newsletter emails </a>
                    <a href="#" class="text-center text-3xl p-5 border-2 border-primary  hover:bg-base-200">Menage Users </a>



                </div>

</x-app-layout>
