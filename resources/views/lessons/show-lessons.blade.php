<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Lessons') }}
        </h2>
    </x-slot>
    <form method="get" action="{{route('show-categories')}}"><x-back-button> </x-back-button> </form>
                    @foreach($categories as $category)

                        @forelse($category->lessons as $lesson)
                            <div class="p-2 text-xl border-base-300 border-2 mt-2 mb-2 rounded-md flex justify-between items-center">
                             {{$lesson->title}}
                                <a class="btn btn-primary" href="{{route('show-lesson',['title'=>$category->title,'lesson'=>$lesson->title])}}"> go to lesson </a>
                            </div>
                        @empty
                            unfortunetly no lessons avaiable yet ;/
                        @endforelse


                    @endforeach


</x-app-layout>
