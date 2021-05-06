@props(['activity'])

<div class="w-full md:w-1/2 xl:w-1/3 p-3">
    <div class="bg-gray-900 border border-gray-800 rounded shadow p-2">
        <div class="flex flex-row items-center">
            <div class="flex-shrink pr-4">
                {{-- TODO if active red else green --}}
                <div class="rounded p-3 bg-green-600">
                    {{-- TODO Add Icons --}}
                    @if ($activity->end)
                        <i class="fa fa-wallet fa-2x fa-fw fa-inverse"></i>
                    @else
                        <i class="fa fa-wallet fa-2x fa-fw fa-inverse"></i>
                    @endif
                </div>
            </div>
            <div class="flex-1 text-right md:text-center">
                <h5 class="font-bold uppercase text-gray-400">
                    {{ $activity->activity }}
                </h5>
                <h3 class="font-bold text-3xl text-gray-600">
                    {{-- TODO Work out the time passed/ display spining wheel --}}
                    Start: {{ date('h:s a', $activity->start) }}
                    @if ($activity->end)
                        End: {{ date('h:s a', $activity->end) }}
                    @endif
                    {{-- <span class="text-green-500"><i class="fas fa-caret-up"></i></span> --}}
                </h3>
            </div>
        </div>
    </div>
</div>
