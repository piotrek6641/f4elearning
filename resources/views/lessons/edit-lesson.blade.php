<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Edit Lesson') }}
        </h2>
    </x-slot>


                    <form method="post" action="{{route('update-lesson',['title'=>$lesson->category->title, 'lesson'=>$lesson->title])}}">
                        <div class="flex flex-col items-center">
                        @method('PUT')
                        @csrf
                        <x-input-sm type="text" value="{{$lesson->title}}" name="title" class="bg-base-100 w-1/2 mt-2 mb-2"> </x-input-sm>
                        <x-textarea type="text"  name="description" class="bg-base-100 w-1/2 mt-2 mb-2 " rows="20" >
                            {{$lesson->description}}
                        </x-textarea>
                        <button type="sumbit" type="submit" class="btn"> Update</button>
                        </div>
                    </form>

</x-app-layout>
