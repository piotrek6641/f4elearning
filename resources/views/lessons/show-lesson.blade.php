<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Lesson') }}
        </h2>
    </x-slot>
    <div class="flex justify-between">
        <a href="{{route('show-lessons',['title' => $lesson->category->title])}}"> <x-back-button>
        </x-back-button>
        </a>
    @if( Auth::user()->role ==="ADMIN")
        <form method="get" class="flex justify-end" action="{{route('edit-lesson',['title'=>$lesson->category->title, 'lesson'=>$lesson->title])}}">
            <button class="btn btn-outline pt-1 pb-1" type="submit"> Edit</button>
        </form>
    @endif
    </div>

                        <div class="flex flex-col">
                            <h1 class="text-3xl mb-8 mt-4"> {{$lesson->title}} </h1>
                            <pre class="text-xl my-12 px-8 overflow-auto whitespace-pre-wrap"> {{$lesson->description}} </pre>
                            <iframe  width="100%" class="bg-base-300 border-2 border-primary rounded-md mb-16 aspect-video" src="{{$lesson->link}}"> </iframe>

                            <h2 class="text-2xl text-center mb-12"> Thank you for checking this lesson out, feel free to check out other content on the website</h2>
                            <livewire:likes :likeable="$lesson"/>
                            <!--Comment section-->

                                <livewire:lesson-comment-component :lesson="$lesson"/>
                            </div>
                        </div>


</x-app-layout>
