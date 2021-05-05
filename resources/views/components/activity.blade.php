@props(['activity'])

<li class="hover:bg-gray-50 cursor-pointer ">
    <div class="w-full items-center flex">

        <div class="{{ $activity->end ? 'bg-blue-600' : 'bg-red-600' }} w-2/12 py-4 block h-full hover:bg-gray-300">
            <div class="text-center h-auto tracking-wide justify-center activity-icon-area ">
                @if ($activity->end)
                    <i class="far fa-clock"></i>
                @else
                    <i class="far fa-check-circle"></i>
                @endif
            </div>
        </div>

        <div class="mx-2 -mt-1 grid grid-cols-2">
            <div class="col-span-2">{{ $activity->activity }}</div>

            <div class="text-xs truncate w-full normal-case font-normal  text-gray-500">
                Start: {{ date('h:s a', $activity->start) }}
            </div>

            @if ($activity->end)
                <div class="text-xs truncate w-full normal-case font-normal  text-gray-500">
                    End: {{ date('h:s a', $activity->end) }}
                </div>
            @endif
        </div>
    </div>
</li>
