<x-app-layout>
<x-slot name="header">
    <h2 class="font-semibold text-xl text-base-content leading-tight">
        {{ __('Dashboard') }}
    </h2>
</x-slot>
<x-error-message>

</x-error-message>

<x-success-messsage>

</x-success-messsage>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class=" overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 min-h-screen flex justify-center">

                <form method="post" class="flex flex-col w-3/4 gap-y-4" action="{{route('send-email')}}">
                    @csrf
                    <input type="text" name="title" placeholder="title" class="input input-bordered">
                    <textarea rows="10" type="text" name="content" placeholder="content" class="textarea textarea-bordered"></textarea>
                    <button type="submit" class="btn"> Send</button>
                </form>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
