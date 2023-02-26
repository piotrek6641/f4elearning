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
                            <x-textarea  class="bg-transparent mb-8" rows="2" ></x-textarea>


                                <span class="text-xl "> See what others think about this:</span>
                                <div class="flex flex-col border-2 border-base-content p-2 mt-4 rounded-md">
                                    <div class="flex justify-end">

                                        <span>
                                        Added: 20:00
                                        </span>
                                    </div>
                                    <div>
                                    <span class="font-bold">
                                        Author:
                                        </span>
                                    <span> Content </span>
                                    </div>
                                </div>
                            </div>
                        </div>


</x-app-layout>
