
    <div class="flex h-24 items-center border border-primary rounded-md mt-4 px-4 w-full">
        <button wire:click="previous">
            <svg class="hover:stroke-primary" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-caret-left" viewBox="0 0 16 16">
                <path d="M10 12.796V3.204L4.519 8 10 12.796zm-.659.753-5.48-4.796a1 1 0 0 1 0-1.506l5.48-4.796A1 1 0 0 1 11 3.204v9.592a1 1 0 0 1-1.659.753z"/>
              </svg>
        </button>
        <div class="w-full flex flex-col items-center">
        <a class="text-3xl text-center w-full"> {{ $category->title }} </a>
        <a class="w-fit hover:text-primary" href={{ route('show-lessons',$category->title) }}> Go to category </a>
        </div>
        <button wire:click="next">
            <svg class="hover:stroke-primary" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-caret-right" viewBox="0 0 16 16">
                <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
              </svg>
        </button>
    </div>

