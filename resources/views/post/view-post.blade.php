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
                    <livewire:post-comment-component :post="$post" />

                    </div>

</x-app-layout>
