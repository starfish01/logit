@props(['name'])

@php
$classes = 'cursor-pointer mb-3 px-4 py-2 mr-3 font-semibold text-white rounded ';
@endphp

@if ($name === 'save')
    <a {{ $attributes(['class' => $classes . 'bg-blue-500 hover:bg-blue-700']) }}>
        Save
    </a>
@elseif ($name === 'cancel')
    <a @click="show = false" type="button" {{ $attributes(['class' => $classes . 'bg-gray-500 hover:bg-gray-700']) }}>
        Cancel
    </a>
@elseif ($name === 'delete')
    <a {{ $attributes(['class' => $classes . 'bg-red-500 hover:bg-red-700']) }}>
        Delete
    </a>
@endif
