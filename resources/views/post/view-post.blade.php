<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-base-content leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot>


            <form method="get" action="{{route('post-view')}}">
                <x-back-button>

                </x-back-button>
            </form>
@if(Auth::user()->is_admin || Auth::user()->id === $post->author->id)
    <form method="post" action="{{route('remove-post',$post->id)}}" class="text-error text-end"> @csrf <button type="submit">X</button> </form>
    @endif
                        <div class="w-full  grid grid-cols-4 p-2 mb-2">
                            <div class="col-span-4 text-right flex justify-end mb-5 text-gray-500">
                                <div class="px-5">Author: {{$post->author->name}} </div>
                                <div class="px-5">Created: {{$post->created_at->diffForHumans()}} </div>
                                <div class="px-5">Updated: {{$post->updated_at->diffForHumans()}} </div>
                            </div>

                       <div class="col-span-4">
                           <p class="text-3xl text-center mb-4">{{$post->title}}</p>
                       </div>

                               <div class="col-span-4">{{$post->content}}</div>

                </div>
                <livewire:likes :likeable='$post'/>

                    <div class="mt-12 mb-3"> Reply:</div>
                    <div class="form-control">
                        <div class="input-group">
                            <input type="text" placeholder="Add new comment…" class="input input-bordered w-full" />
                            <button class="btn btn-square">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" /> <polyline points="20 6 9 17 4 12"></polyline></svg>
                            </button>

                        </div>
                    </div>

                    <div class="mt-5 mb-2  text-xl"> Comment section </div>
                    <div class="w-full border border-neutral p-2  rounded-lg flex flex-col">
                        <div class="flex justify-between mb-1 text-gray-500"> <div class="">Author:</div>  <div> 2 sec ago </div> </div>
                        <div> </div>
                        <div>First Comment </div>
                        <div class="text-right"> Likes: 5 <button>
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
                            </button></div>

                    </div>

</x-app-layout>
