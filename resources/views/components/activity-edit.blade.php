@props(['activity', 'allUsersTags'])

<div class="w-full ">
    <div class="flex flex-col  py-5 ">

        <p class="mb-2 font-semibold  text-gray-100">Update Activity</p>

        <div class="mb-5">
            <input type="text" placeholder="Activity" value="{{ $activity->activity }}"
                class="w-full mb-4 px-3 mr-5 flex-1 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring" />

            <x-buttons :name="'save'"></x-buttons>
        </div>

        <div class="mb-5">

            <p class="mb-2 font-semibold  text-gray-100">Tags</p>
            <div class="mb-4">
                <x-tag-add :allUsersTags="$allUsersTags" :currentTags="$activity->tags"></x-tag-add>
            </div>
            <x-buttons name="save"></x-buttons>
        </div>

        <p class="mb-2 font-semibold mb-5 text-gray-100">Time Logged</p>
        @foreach ($activity->time_logs as $log)

            @if (strlen($log->end) === 0)
                @continue
            @endif


            <div class="flex flex-wrap ">

                <div class="my-2 px-2 md:w-1/4 w-1/2 ">
                    <div class=" px-4 py-2 w-40 bg-white rounded-lg shadow-xl">
                        <div class="flex">
                            <div class="pr-2">
                                <p class=" font-semibold ">Start:</p>
                            </div>
                            <select name="hours" class="bg-transparent text-xl appearance-none outline-none">
                                @for ($i = 0; $i < 24; $i++)
                                    <option {{ (int) date('H', $log->start) === $i ? 'selected' : '' }}
                                        value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                            <span class="text-xl mr-3">:</span>
                            <select name="minutes" class="bg-transparent text-xl appearance-none outline-none mr-4">
                                @for ($i = 0; $i < 60; $i++)
                                    <option {{ (int) date('i', $log->start) === $i ? 'selected' : '' }}
                                        value="{{ $i }}">{{ $i < 10 ? '0' . $i : $i }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                </div>

                <div class="my-2 px-2 md:w-1/4 w-1/2 ">
                    <div class=" px-4 py-2 w-40 bg-white rounded-lg shadow-xl">
                        <div class="flex">
                            <div class="pr-2">
                                <p class=" font-semibold ">End:</p>
                            </div>
                            <select name="hours" class="bg-transparent text-xl appearance-none outline-none">
                                @for ($i = 0; $i < 24; $i++)
                                    <option {{ (int) date('H', $log->end) === $i ? 'selected' : '' }}
                                        value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                            <span class="text-xl mr-3">:</span>
                            <select name="minutes" class="bg-transparent text-xl appearance-none outline-none mr-4">
                                @for ($i = 0; $i < 60; $i++)
                                    <option {{ (int) date('i', $log->end) === $i ? 'selected' : '' }}
                                        value="{{ $i }}">{{ $i < 10 ? '0' . $i : $i }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>
                </div>

                <div class="my-2 px-2 md:w-1/4 w-1/2 flex">
                    <x-buttons :name="'save'"></x-buttons>
                </div>

                <div class="my-2 px-2 md:w-1/4 w-1/2 flex">
                    <x-buttons :name="'delete'"></x-buttons>
                </div>


            </div>

            <hr class="md:hidden my-3">

        @endforeach

        <div class="flex flex-row items-center justify-end p-5">
            <div>
                <x-buttons href="#" :name="'delete'"></x-buttons>
                <x-buttons href="/" :name="'cancel'"></x-buttons>
            </div>

        </div>

        {{-- <div class="flex items-center mt-5 mb-3 space-x-4">
                <input class="inline-flex rounded-full" type="checkbox" id="check1" name="check1" />
                <label class="inline-flex font-semibold text-gray-400" for="check1">
                    Add a crew</label><br />
                <input class="inline-flex" type="checkbox" id="check2" name="check2" checked />
                <label class="inline-flex font-semibold text-blue-500" for="check2">
                    Add a specific agent</label><br />
            </div>
            <div
                class="flex flex-row items-center justify-between p-5 bg-white border border-gray-200 rounded shadow-sm">
                <div class="flex flex-row items-center">
                    <img class="w-10 h-10 mr-3 rounded-full" src="https://randomuser.me/api/portraits/lego/7.jpg"
                        alt="" />
                    <div class="flex flex-col">
                        <p class="font-semibold text-gray-800">Xu Lin Bashir</p>
                        <p class="text-gray-400">table.co</p>
                    </div>
                </div>
                <h1 class="font-semibold text-red-400">Remove</h1>
            </div> --}}
    </div>
</div>
