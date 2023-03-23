<div class="btn-group min-w-full col-span-4 flex justify-end">
    <div class="mr-2"> Likes:{{ $count }} </div>
    <button wire:click="like" @if(Auth::user()->hasLiked($likeable)) disabled @endif>
        <svg class="@if(Auth::user()->hasLiked($likeable)) fill-green-500 stroke-black @else hover:stroke-green-500 @endif" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><path d="M14 9V5a3 3 0 0 0-3-3l-4 9v11h11.28a2 2 0 0 0 2-1.7l1.38-9a2 2 0 0 0-2-2.3zM7 22H4a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h3"></path></svg>
    </button>
    <button wire:click="unlike" @if(!Auth::user()->hasLiked($likeable))disabled @endif class="disabled:hidden">
            <svg class="hover:stroke-red-500 " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 15v4a3 3 0 0 0 3 3l4-9V2H5.72a2 2 0 0 0-2 1.7l-1.38 9a2 2 0 0 0 2 2.3zm7-13h2.67A2.31 2.31 0 0 1 22 4v7a2.31 2.31 0 0 1-2.33 2H17"></path></svg>
    </button>
    </form>
</div>
