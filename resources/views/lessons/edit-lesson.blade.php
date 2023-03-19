<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Edit Lesson') }}
        </h2>
    </x-slot>
    <a href="{{route('admin')}}"> <x-back-button> </x-back-button> </a>

                    <form method="post" action="{{route('update-lesson',['title'=>$lesson->category->title, 'lesson'=>$lesson->title])}}">
                        <div class="flex flex-col items-end w-full px-24 gap-y-4">
                        @method('PUT')
                        @csrf
                        <input type="text" value="{{$lesson->title}}" name="title" class="input input-bordered w-full">
                        <textarea type="text"  name="description" class="textarea textarea-bordered w-full" rows="15" >{{$lesson->description}}</textarea>
                            <input type="text" value="{{$lesson->link}}" name="link" class="input input-bordered w-full">
                        <button type="sumbit" type="submit" class="btn"> Update</button>
                        </div>
                    </form>

</x-app-layout>
