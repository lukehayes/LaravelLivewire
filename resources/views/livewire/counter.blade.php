<div class="mt-20">

    @for ($i = 50; $i < 1000; $i += 50)
        @if($i % 100 == 0 || $i == 50 || $i == 950)
            <div class="bg-slate-{{$i}} pl-5 pt-10 pb-10 text-3xl">
            bg-gray {{ $i }}
            </div>
        @endif
    @endfor

</div>
