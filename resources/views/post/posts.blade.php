<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Post Section') }}
        </h2>
    </x-slot>

            <form method="get" action="{{route('create-post')}}"> <button class="btn mt-2 mb-6"> + add new post</button> </form>


                    @foreach($posts as $post)

                        <div class="w-full border-2 border-neutral rounded  grid grid-cols-4 p-2 mb-5">
                       <div>
                           <form method="get" action="{{route('show-post',$post->id)}}"> <button type="submit"><p class="text-3xl">{{$post->title}}</p> </button> </form>
                           </div>
                            <div > Created: {{$post->created_at->diffForHumans()}}</div>
                            <div> Updated: {{$post->updated_at->diffForHumans()}}</div>
                            <div> Author: {{$post->author->name}}</div>
                               <div class="col-span-4">{{\Illuminate\Support\Str::limit($post->content,50)}}</div>
                            <div class="col-span-4 text-right"> <button class="btn"> like </button> <button class="btn"> Comment </button></div>

                        </div>
                    @endforeach


</x-app-layout>
