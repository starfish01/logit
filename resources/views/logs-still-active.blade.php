<x-layout>

    <h5 class="font-bold uppercase text-gray-400">Logs Still Active</h5>


    <div class="flex flex-wrap">
        <div class="w-full md:w-1/2 p-3">
            @foreach($activeActivties as $activity)
                <h3 class="font-bold font-bold text-gray-100">
                    Activity: {{$activity->activity}}
                </h3>
                <p class="py-4 text-gray-600 text-sm">
                    Started: {{ $activity->active_log->start_time->format('H:i') }}
                </p>

                <div class="my-2 px-2 md:w-1/4 w-1/2 ">
                    <div class=" px-4 py-2 w-40 bg-white rounded-lg shadow-xl">
                        <div class="flex">
                            <div class="pr-2">
                                <p class=" font-semibold ">End:</p>
                            </div>
                            <select name="hours" class="bg-transparent text-xl appearance-none outline-none">
                                @for ($i = 0; $i < 24; $i++)
                                    @if($activity->active_log->start_time->format('H') < $i)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endif
                                @endfor
                            </select>
                            <span class="text-xl mr-3">:</span>
                            <select name="minutes" class="bg-transparent text-xl appearance-none outline-none mr-4">
                                @for ($i = 0; $i < 60; $i++)
                                    @if($activity->active_log->start_time->format('i') < $i)
                                        <option value="{{ $i }}">{{ $i < 10 ? '0' . $i : $i }}</option>
                                    @endif
                                @endfor
                            </select>
                        </div>
                    </div>
                </div>

            @endforeach

                <hr class="border-b-2 border-gray-600 my-8 mx-4"/>

                <div class="my-3">
                <x-buttons name="save" href="/"></x-buttons>
            </div>

        </div>

    </div>


    <!--Divider-->
    <hr class="border-b-2 border-gray-600 my-8 mx-4"/>


</x-layout>
