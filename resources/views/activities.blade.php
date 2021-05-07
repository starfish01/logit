<x-layout>

    <h5 class="font-bold uppercase text-gray-400">Todays Activities</h5>


    <div class="flex flex-wrap">
        @foreach ($activities as $activity)
            <x-activity :activity="$activity"></x-activity>
        @endforeach
    </div>

    <x-activity_modal :activity="$activities[0]"></x-activity_modal>

    <!--Divider-->
    <hr class="border-b-2 border-gray-600 my-8 mx-4" />




</x-layout>
