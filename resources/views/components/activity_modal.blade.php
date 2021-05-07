@props(['activity'])

<div class="flex justify-center  items-center antialiased absolute w-screen -top-0	z-10">
    <div class="flex flex-col w-11/12 sm:w-5/6 lg:w-1/2 max-w-2xl mx-auto rounded-lg border border-gray-300 shadow-xl">
        <div class="flex flex-row justify-between p-6 bg-white border-b border-gray-200 rounded-tl-lg rounded-tr-lg">
            <p class="font-semibold text-gray-800">Edit Activity</p>
            <button>
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>
        <div class="flex flex-col px-6 py-5 bg-gray-50">
            <p class="mb-2 font-semibold text-gray-700">Bots Message</p>

            <div class="mb-3 pt-0">
                <input type="text" placeholder="Placeholder" value="{{ $activity->activity }}"
                    class="px-3 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring w-full" />
            </div>

            <hr />

            @foreach ($activity->time_logs as $log)
                Start: {{ $log->start }}
                End: {{ $log->end }}
                <hr>
            @endforeach

            {{-- <div class="flex items-center mt-5 mb-3 space-x-4">
                <input class="inline-flex rounded-full" type="checkbox" id="check1" name="check1" />
                <label class="inline-flex font-semibold text-gray-400" for="check1">
                    Add a crew</label><br />
                <input class="inline-flex" type="checkbox" id="check2" name="check2" checked />
                <label class="inline-flex font-semibold text-blue-500" for="check2">
                    Add a specific agent</label><br />
            </div> --}}
            {{-- <div
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
        <div
            class="flex flex-row items-center justify-between p-5 bg-white border-t border-gray-200 rounded-bl-lg rounded-br-lg">
            <div>
                <button class="px-4 py-2 font-semibold text-red-600">
                    Delete
                </button>
                <button class="px-4 py-2 font-semibold ">
                    Cancel
                </button>
            </div>
            <div>
                <button class="px-4 py-2 text-white font-semibold bg-blue-500 rounded">
                    Save
                </button>
            </div>
        </div>
    </div>
</div>
