<x-layout>


    <div class="flex justify-center">
        <div class="bg-white shadow-xl rounded-lg w-1/2">
            <ul class="divide-y divide-gray-300">
                @foreach ($activities as $activity)
                    <x-activity :activity="$activity"></x-activity>
                @endforeach
            </ul>
        </div>
    </div>

</x-layout>
