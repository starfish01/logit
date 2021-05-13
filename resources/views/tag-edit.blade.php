<x-layout>

    <h5 class="font-bold uppercase text-gray-400">Edit Tags</h5>
    <h5 class="font-bold uppercase text-gray-400 hover:">
        <a href="/edit-tags">
            <i class="fas fa-arrow-left"></i> Back
        </a>
    </h5>

    <div class="flex flex-wrap">
        <div class="w-full md:w-1/2 p-3">
            <input type="text" placeholder="Activity" value="{{ $tag->title }}"
                   class="w-full mb-4 px-3 mr-5 flex-1 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring"/>
            <div>
                <x-buttons :name="'delete'"></x-buttons>
                <x-buttons :name="'save'"></x-buttons>
                <x-buttons :name="'cancel'"></x-buttons>
            </div>

        </div>
    </div>

    <!--Divider-->
    <hr class="border-b-2 border-gray-600 my-8 mx-4"/>


</x-layout>
