<x-app-layout >
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('User List') }}
        </h2>
    </x-slot>

    <div class="container mx-auto  ">
        <a href="{{route('admin')}}"> <x-back-button> </x-back-button> </a>
        <form method="POST" action="{{route('users.update',$user->id)}}" class="">
            @csrf
            <div class="rounded-lg border border-neutral lg:p-5 w-full my-4 flex flex-col flex-wrap gap-y-2 lg:grid lg:grid-cols-9 lg:gap-2 lg:items-center">

                <div class="text-left p-1 border-b-2 border-b-neutral inline-flex justify-between lg:border-none lg:justify-start lg:col-span-2 max-w-full overflow-auto">
                    <p> Name:</p>
                    <input class="input" name="name" value="{{$user->name}}">
                </div>
                <div class="text-left p-1 border-b-2 border-b-neutral flex justify-between lg:border-none lg:col-span-2 lg:justify-start max-w-full overflow-auto">
                    <p>Email:</p>
                    <input class="input" name="email" value="{{$user->email}}">
                </div>
                <div class="text-left p-1 border-b-2 border-b-neutral inline-flex justify-between lg:border-none lg:justify-start">
                    <p>Role:</p>
                    <select class="select" name="role">
                        <option value="ADMIN">ADMIN</option>
                        <option value="USER">USER</option>
                        <option value="TUTOR">TUTOR</option>
                    </select>
                </div>
                <div class="flex-1 flex justify-end pb-2 pr-3 lg:justify-end lg:col-span-2">


                            <button class="w-full" type="submit"> Update</button>
                </div>
            </div>
        </form>


                </div>
            </div>

    </div>

    </div>
</x-app-layout>
