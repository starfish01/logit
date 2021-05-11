<x-layout>

    <h5 class="font-bold uppercase text-gray-400">Edit Activity</h5>
    <h5 class="font-bold uppercase text-gray-400 hover:">
        <a href="/">
            <i class="fas fa-arrow-left"></i> Back
        </a>
    </h5>

    <x-activity-edit :allUsersTags="$allUsersTags" :activity="$activity"></x-activity-edit>

    <!--Divider-->
    <hr class="border-b-2 border-gray-600 my-8 mx-4" />




</x-layout>
