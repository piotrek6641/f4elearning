@if ($errors->any())
    <div class="alert alert-error shadow-lg " id="alert">
        Whoops! There were some problems with your input.

        @foreach ($errors->all() as $error)
            </br> -{{ $error }}
        @endforeach
        <button class="btn btn-square btn-outline" id="close">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
        </button>

    </div>
    <script>
        const btn = document.getElementById('close');
        const target = document.getElementById('alert');
        btn.onclick= function()
        {
            console.log('stg')
            target.style.display ="none";
        }
    </script>
@endif


