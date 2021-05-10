<div class="w-full md:w-1/2 p-3" x-data="{ show: false }">
    <div @click="show = true" class="bg-gray-900 border border-gray-800 rounded shadow p-2 cursor-pointer">
        <div class="flex flex-row items-center">
            <div class="flex-shrink pr-3">
                <div class="rounded p-3 w-16 text-center">
                    <i class="fa fa-plus fa-2x fa-fw fa-inverse"></i>
                </div>
            </div>
            <div class="flex-1 text-right pr-3">
                <h3 class="text-left text-gray-100">
                    Add Activity
                </h3>
            </div>
        </div>
    </div>


    <div x-show="show" class="fixed z-10 inset-0 overflow-y-auto" aria-labelledby="modal-new-activity" role="dialog"
        aria-modal="true">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
            <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
            <div @click.away="show = false"
                class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="sm:flex sm:items-start">
                        <div class="mt-3 text-center sm:mt-0 sm:text-left">
                            <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-new-activity">
                                New Activity
                            </h3>
                            <div class="mt-2">

                                <input type="text" placeholder="Activity" value=""
                                    class="w-full mb-3 px-3 mr-5 flex-1 py-3 placeholder-blueGray-300 text-blueGray-600 relative bg-white bg-white rounded text-sm border-0 shadow outline-none focus:outline-none focus:ring " />

                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 px-4 py-3 flex">
                    <x-buttons :name="'save'"></x-buttons>
                    <x-buttons :name="'cancel'"></x-buttons>
                </div>
            </div>
        </div>
    </div>

</div>
