<x-layout>

    <h5 class="font-bold uppercase text-gray-400">Todays Activities</h5>


    <div class="flex flex-wrap">
        <x-activity-add :allUsersTags="$allUsersTags"></x-activity-add>
        @foreach ($activities as $activity)
            <x-activity :activity="$activity"></x-activity>
        @endforeach
    </div>

    <!--Divider-->
    <hr class="border-b-2 border-gray-600 my-8 mx-4" />




</x-layout>
