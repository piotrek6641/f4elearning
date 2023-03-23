<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Post Section') }}
        </h2>
    </x-slot>
    <div class="flex justify-between  mt-2 mb-6 flex-wrap gap-y-4">
            <form method="get" action="{{route('create-post')}}"> <button class="btn"> + add new post</button> </form>
            <form method="get" action="{{route('search-posts')}}">
                <select class="select select-bordered" name="category">
                    <option selected disabled> Select Category</option>
                    <option value="all"> Show all </option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}" @empty($cat) @else {{ $cat == $category->id ? "Selected" :"" }} @endempty> {{$category->title }}</option>
                    @endforeach
                </select>
                <button class="btn" > Search </button>
            </form>
    </div>
    @if($posts->isEmpty())
        OOps, no post yet. Create first one and start discussion
    @endif
                    @foreach($posts as $post)

                        <div class="w-full border-2 border-neutral rounded  grid grid-cols-2 md:grid-cols-4 p-2 mb-5">
                            <div class="bold"> Author: <div class="font-bold inline"> {{$post->author->name}} </div> </div>
                            <div class="text-right md:text-start"> #{{$post->category->title}}</div>
                            <div class="text-left"> Created: {{$post->created_at->diffForHumans()}}</div>
                            <div class="text-end"> Updated: {{$post->updated_at->diffForHumans()}}</div>

                       <div class="col-span-2 md:col-span-4 ">
                           <form method="get" action="{{route('show-post',$post->id)}}"> <button type="submit"><p class="text-3xl text-secondary">{{$post->title}}</p> </button> </form>
                           </div>

                               <div class="col-span-2 md:col-span-4 ">{{\Illuminate\Support\Str::limit($post->content,50)}}</div>
                            <div class="col-span-2 md:col-span-4 flex justify-end">
                                {{ count($post->likes) }}
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="ml-1 mr-3 bi bi-chat-left-text-fill self-center" viewBox="0 0 16 16">
                                <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z"/>
                            </svg>
                                {{ count($post->likes) }}
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="ml-1 bi bi-hand-thumbs-up-fill self-center" viewBox="0 0 16 16">
                                    <path d="M6.956 1.745C7.021.81 7.908.087 8.864.325l.261.066c.463.116.874.456 1.012.965.22.816.533 2.511.062 4.51a9.84 9.84 0 0 1 .443-.051c.713-.065 1.669-.072 2.516.21.518.173.994.681 1.2 1.273.184.532.16 1.162-.234 1.733.058.119.103.242.138.363.077.27.113.567.113.856 0 .289-.036.586-.113.856-.039.135-.09.273-.16.404.169.387.107.819-.003 1.148a3.163 3.163 0 0 1-.488.901c.054.152.076.312.076.465 0 .305-.089.625-.253.912C13.1 15.522 12.437 16 11.5 16H8c-.605 0-1.07-.081-1.466-.218a4.82 4.82 0 0 1-.97-.484l-.048-.03c-.504-.307-.999-.609-2.068-.722C2.682 14.464 2 13.846 2 13V9c0-.85.685-1.432 1.357-1.615.849-.232 1.574-.787 2.132-1.41.56-.627.914-1.28 1.039-1.639.199-.575.356-1.539.428-2.59z"/>
                                </svg>

                            </div>

                        </div>
                    @endforeach


</x-app-layout>
