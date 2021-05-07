@props(['activity'])

<div class="w-full md:w-1/2 xl:w-1/3 p-3">
    <div class="bg-gray-900 border border-gray-800 rounded shadow p-2">
        <div class="flex flex-row items-center">
            <div class="flex-shrink pr-4">
                <div
                    class="activity-log-button rounded p-3 w-16 text-center {{ $activity->active_time_log ? 'bg-red-600 hover:bg-red-800' : 'bg-green-600 hover:bg-green-800' }}">
                    @if ($activity->active_time_log)
                        <i class="fa fa-stop fa-2x fa-fw fa-inverse running-log-hover"></i>
                        <div class="animate-spin">
                            <i class="fas fa-spinner fa-2x fa-fw fa-inverse running-log-normal"></i>
                        </div>
                    @else
                        <i class=" fa fa-play fa-2x fa-fw fa-inverse"></i>
                    @endif
                </div>
            </div>
            <div class="flex-1 text-right md:text-center">
                <h3 class="text-left text-gray-100">
                    {{ $activity->activity }}
                </h3>

                <h3 class="text-left text-gray-600">
                    {{-- TODO Work out the time passed/ display spining wheel --}}
                    @if (!$activity->active_time_log)
                        <span class="font-bold">Total Time:</span> {{ $activity->total_time }}
                    @endif

                </h3>
            </div>
        </div>
    </div>
</div>

<style>
    .activity-log-button:hover .running-log-normal,
    .activity-log-button .running-log-hover {
        display: none;
    }

    .activity-log-button:hover .running-log-hover,
    .activity-log-button .running-log-normal {
        display: inline;
    }

    .activity-log-button {
        cursor: pointer;
    }

</style>
