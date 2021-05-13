<x-layout>

    <h5 class="font-bold uppercase text-gray-400">Edit Tags</h5>


    <div class="flex flex-wrap">

        @foreach ($tags as $tag)
            <x-buttons href="/edit-tags/{{ $tag->id }}" :name="'edit'">{{ $tag->title }}</x-buttons>
        @endforeach
    </div>

    <!--Divider-->
    <hr class="border-b-2 border-gray-600 my-8 mx-4" />




</x-layout>
