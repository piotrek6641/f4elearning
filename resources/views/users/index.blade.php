<x-app-layout >
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('User List') }}
        </h2>
    </x-slot>

    <div class="container mx-auto  ">
        <a href="{{route('admin')}}"> <x-back-button> </x-back-button> </a>
        <div class="form-control">
            <form method="get" action="{{route('search')}}">
                <div class="input-group pt-5">
                    <select class="select select-bordered" name="option">
                        <option disabled selected>Search By:</option>
                        <option value="id">ID</option>
                        <option value="name">Name</option>
                        <option value="email">E-Mail</option>
                    </select>
                    <input type="text" placeholder="Search" class="input input-bordered w-full" field="text" name="text" />
                    <button class="btn" type="submit"> Go!</button>

                </div>
            </form>
        </div>
        <form method="get" action="{{route('filter')}}">
            <div class="input-group pt-5 pb-10">
                <select class="select select-bordered" name="option">
                    <option disabled selected>Order By:</option>
                    <option value="id">ID</option>
                    <option value="name">Name</option>
                    <option value="email">E-Mail</option>
                    <option value="updated_at">Updated at</option>
                </select>

                <button class="btn" type="submit"> Go!</button>

            </div>
        </form>
        @foreach($users as $user)
            <div class="rounded-lg border border-neutral lg:p-5 w-full my-4 flex flex-col flex-wrap gap-y-2 lg:grid lg:grid-cols-9 lg:gap-2 lg:items-center">
                <div class="text-left p-1 border-b-2 border-b-neutral inline-flex justify-between lg:border-none lg:justify-start lg:col-span-2 max-w-full overflow-auto">
                    <p> Name:</p>
                    <p class="lg:pl-2 font-bold"> {{$user->name}}</p>
                </div>
                <div class="text-left p-1 border-b-2 border-b-neutral flex justify-between lg:border-none lg:col-span-2 lg:justify-start max-w-full overflow-auto">
                    <p>Email:</p>
                    <p class="lg:pl-2 font-bold">{{$user->email}}</p>
                </div>
                <div class="text-left p-1 border-b-2 border-b-neutral inline-flex justify-between lg:border-none lg:col-span-2 lg:justify-start">
                    <p>created:</p>
                    <p class="lg:pl-2 font-bold">{{$user->created_at->diffForHumans()}}</p>
                </div>
                <div class="text-left p-1 border-b-2 border-b-neutral inline-flex justify-between lg:border-none lg:justify-start">
                    <p>Role:</p>
                    <p class="lg:pl-2 font-bold">{{$user->role}}</p>
                </div>
                <div class="flex-1 flex justify-end pb-2 pr-3 lg:justify-end lg:col-span-2">

                        <form method="post" class="btn btn-secondary py-0 mr-2" action="{{route('users.destroy',$user->id)}}">
                            @csrf
                            <button onclick="return confirm('Are you sure?')" class="">Remove</button>
                        </form>
                        <form method="get" action="{{route('users.edit',$user->id)}}" class="btn px-7">
                            <button class="w-full" type="submit"> Edit</button>
                        </form>


                </div>
            </div>
        @endforeach
        <div>{{ $users->links() }} </div>
    </div>

    </div>
</x-app-layout>
