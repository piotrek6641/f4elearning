@if(Session::has('success'))
    <div class="alert alert-success absolute w-fit top-[10%] m-auto left-0 right-0 pt-1 pb-1 pl-5 pr-5" id="alert" >
        {{ Session::get('success') }}
        @php
            Session::forget('success');
        @endphp
        <button class="" id="button">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 border-2 border-base-100" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
        </button>
    </div>
@endif

<script>
    const btn = document.getElementById('button');
    const target = document.getElementById('alert');
    btn.onclick= function()
    {
        target.style.display ="none";
    }
</script>
