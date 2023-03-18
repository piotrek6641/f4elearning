<x-app-layout >
<div class="flex flex-col border-2 border-base-content p-2 mt-4 rounded-md">
    <form method="post" action="{{route('remove-lesson-comment',['title'=>$lesson->category->title, 'lesson'=>$lesson->title,'comment-id'=>$comment->id])}}">
        @csrf
        <button type="submit"> Delete </button>
    <div class="flex justify-end">

                                        <span>
                                        Added: {{$comment->created_at}}
                                        </span>
    </div>
    <div>
                                    <span class="font-bold">
                                        {{ $comment->User->name }}:
                                        </span>
        <span> {{$comment->content}}  </span>

    </div>
</div>
</x-app-layout >
