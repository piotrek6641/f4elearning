<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="flex flex-col items-center justify-center h-screen">
        <div class="w-full md:w-1/2 flex flex-col items-center">
    <h1 class="text-5xl text-center h-fit"> Hi <b class="bold"> {{ Auth::user()->name }}! </b> </h1>
    <p class="text-2xl text-center"> Are you ready to start learning? </p>
    <p class="text-2xl text-center"> If so explore available categories now </p>
    <livewire:categories/>
    <p class="text-2xl text-center mt-6"> Or jump straight into our discussion section </p>
    <a href="{{ route('post-view') }}" class="text-center text-2xl border border-primary mt-2 w-full p-2 rounded-md hover:bg-primary-focus hover:text-neutral hover:border-base-200 cursor-pointer">
         Posts
    </a>
        </div>
    </div>

</x-app-layout>
