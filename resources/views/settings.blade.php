<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Settings') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-base-300 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 border-b border-primary flex flex-col gap-4">

                    <div class="flex justify-between"> Username: {{Auth::user()->name}} <a class="hover:text-primary"> Change</a></div>
                    <div class="flex justify-between"> Email: {{Auth::user()->email}} <a class="hover:text-primary"> Change </a></div>
                    <div class="flex justify-between"> Password: ****** <a class="hover:text-primary"> Change </a> </div>
                    <div> Created: {{Auth::user()->created_at->format('d/m/Y')}}</div>
                    <div>Role: {{Auth::user()->role}} </div>
                    <div>
                    <a href="{{route('subscribe')}}">
                        @if(Auth::user()->is_subscribed==0)
                            <span class="text-success"> Subscribe to our newsletter </span>
                        @else
                            <span class="text-error"> Unsubscribe from our newsletter </span>
                        @endif
                    </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
