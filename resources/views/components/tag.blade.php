@props(['name', 'canDelete' => false])

@php
$classes = 'px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold mr-1';
if ($canDelete) {
    $classes .= ' transition duration-500 ease-in-out hover:bg-blue-300 hover:text-white cursor-pointer';
}
@endphp

<a {{ $attributes(['class' => $classes]) }} style="font-size: 10px">{{ $name }}
    @if ($canDelete)
        <i class="fas fa-times"></i>
    @endif
</a>
