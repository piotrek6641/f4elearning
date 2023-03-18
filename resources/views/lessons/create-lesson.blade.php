<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl  leading-tight">
            {{ __('Create Lesson') }}
        </h2>
    </x-slot>
    <a href="{{route('admin')}}"> <x-back-button> </x-back-button> </a>

                    <form method="post" action="{{route('add-lesson')}}" class="flex justify-center">
                        <div class="flex flex-col md:w-3/4 gap-y-4 w-full">
                        @csrf
                        <input type="text" name="title" placeholder="title" class="input input-bordered">
                            <textarea rows=3 type="text" name="description" placeholder="description" class="textarea textarea-bordered"></textarea>
                        <select class="select select-bordered" name="option">
                            <option disabled selected>Select category:</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}} </option>
                            @endforeach


                        </select>

                        <button type="submit" class="btn"> Submit</button>
                        </div>
                    </form>

</x-app-layout>
