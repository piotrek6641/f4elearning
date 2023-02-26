<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl  leading-tight">
            {{ __('Create Lesson') }}
        </h2>
    </x-slot>


                    <form method="post" action="{{route('add-lesson')}}">
                        @csrf
                        <input type="text" name="title" placeholder="title">
                        <input type="text" name="description" placeholder="description">
                        <select class="select select-bordered" name="option">
                            <option disabled selected>Select category:</option>
                            @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->title}} </option>
                            @endforeach


                        </select>

                        <button type="submit" class="btn"> Submit</button>
                    </form>

</x-app-layout>
