<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl  leading-tight">
            {{ __('Admin Panel') }}
        </h2>
    </x-slot>
                <div class="flex flex-col gap-y-8">
                    <a href="{{route('add-category')}}" class="text-center text-3xl p-5 rounded-md border-2 border-primary hover:border-primary-focus hover:bg-base-200 focus:bg-base-200 focus:border-primary-focus">Add new category </a>
                    <a href="{{route('edit-category')}}" class="text-center text-3xl p-5 rounded-md border-2 border-primary hover:border-primary-focus hover:bg-base-200 focus:bg-base-200 focus:border-primary-focus">Edit categories </a>
                    <a href="{{route('add-lesson')}}" class="text-center text-3xl p-5 rounded-md border-2 border-primary hover:border-primary-focus hover:bg-base-200 focus:bg-base-200 focus:border-primary-focus">Add new lesson </a>
                    <a href="{{route('show-email')}}" class="text-center text-3xl p-5 rounded-md border-2 border-primary hover:border-primary-focus hover:bg-base-200 focus:bg-base-200 focus:border-primary-focus">Send Newsletter emails </a>
                    <a href="{{route('show-users')}}" class="text-center text-3xl p-5 rounded-md border-2 border-primary hover:border-primary-focus hover:bg-base-200 focus:bg-base-200 focus:border-primary-focus">Menage Users </a>



                </div>

</x-app-layout>
