<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Lesson') }}
        </h2>
    </x-slot>
    <div class="flex justify-between">
    <form method="get" action="{{route('show-lessons',$lesson->category->title)}}" >
        <x-back-button>
        </x-back-button>

    </form>
    @if( Auth::user()->is_admin)
        <form method="get" class="flex justify-end" action="{{route('edit-lesson',['title'=>$lesson->category->title, 'lesson'=>$lesson->title])}}">
            <button class="btn btn-outline pt-1 pb-1" type="submit"> Edit</button>
        </form>
    @endif
    </div>

                        <div class="flex flex-col">
                            <h1 class="text-3xl mb-8 mt-4"> {{$lesson->title}} </h1>
                            <iframe  width="100%" class="bg-base-300 border-2 border-primary rounded-md mb-16 aspect-video   " src="https://www.youtube.com/embed/03nrv09T7bs?controls=0"> </iframe>
                        {{$lesson->description}}

                            <!--Comment section-->
                            <span class="text-xl mt-16 mb-4"> Leave thought about that material:</span>
                            <div class="flex flex-col">
                                <form class="flex flex-col" method="post" action="{{route('add-lesson-comment',['title'=>$lesson->category->title, 'lesson'=>$lesson->title])}}">
                                    @csrf
                                    <textarea placeholder="Leave your thoughts... " name="text" value="{{old('text')}}" class="textarea textarea-bordered mb-2"></textarea>
                                    <textarea name="lessonid" class="hidden">{{$lesson->id}}</textarea>

                            <button type="submit" class="self-end btn w-fit mb-8 btn-sm">add comment +</button>

                                </form>
                                <span class="text-xl "> See what others think about this:</span>
                                @foreach($comments as $comment )


                                <form method="post" action="{{route('remove-lesson-comment',['title'=>$lesson->category->title, 'lesson'=>$lesson->title,'comment-id'=>$comment->id])}}">
                                    @csrf
                                <button type="submit"> Delete </button>
                                </form>
                                <div class="flex flex-col border-2 border-neutral p-2 mt-4 rounded-lg">
                                    <div class="flex justify-end">

                                        <span>
                                        Added: {{$comment->created_at}}
                                        </span>
                                    </div>
                                    <div>
                                    <span class="font-bold">
                                        {{ $comment->User->name }}:
                                        </span>
                                        <span> <a href="{{route('lesson-comment', ['title'=>$lesson->category->title, 'lesson'=>$lesson->title,'id'=>$comment->id])}}"> {{$comment->content}} </a> </span>

                                    </div>

                                </div>
                                    @endforeach
                            </div>
                        </div>


</x-app-layout>
