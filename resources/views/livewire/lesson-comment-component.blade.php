<div>
    <span class="text-xl"> Consider leaving a comment ;)</span>
<form class="flex flex-col relative mt-2" method="post" wire:submit.prevent="createComment">
    @csrf
    <textarea placeholder="Leave your thoughts... " name="text" value="{{old('text')}}" class="textarea textarea-bordered mb-2" wire:model.lazy="newComment"></textarea>
    @error('newComment') <span class="error">{{ $message }}</span> @enderror
    <button type="submit" class="self-end btn w-fit btn-sm mb-8">add comment +</button>

</form>
<span class="text-xl w-full"> See what others think about this:</span>
@foreach($comments as $comment)
    <div :wire:key="'comment-.$comment->id"/>

        <div class="flex flex-col border-2 border-neutral p-2 mt-4 rounded-lg relative">
            @if( Auth::user()->role === "ADMIN" || Auth::user()->id === $comment->user_id )
                <button title="remove" wire:click="deleteComment({{$comment->id}})" class="text-error absolute w-fit right-2 top-0"> X </button>
            @endif
            <div class="flex justify-end">
                <span class="mr-4">
                    Added: {{$comment->created_at->diffForHumans()}}
                </span>
            </div>
            <div>
                <span class="font-bold">
                    {{ $comment->User->name }}:
                </span>
                <span> {{$comment->content}} </span>

                <livewire:likes :likeable='$comment'/>
            </div>

        </div>
    </div>
@endforeach
</div>
