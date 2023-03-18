<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>



    <button id="color"> change color scheme </button>

    <script>
        document.getElementById('color').addEventListener('click',()=>
        {
            document.getElementById('html').setAttribute('data-theme','light')
        })
    </script>

</x-app-layout>
