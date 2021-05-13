@props(['name', 'active' => '', 'icon' => false])

@php
    $classes = 'cursor-pointer mb-3 px-4 py-2 mr-3 font-semibold text-white rounded ';
@endphp

@if ($name === 'save')
    <a {{ $attributes(['class' => $classes . 'bg-blue-500 hover:bg-blue-700']) }}>
        Save
    </a>
@elseif ($name === 'cancel')
    <a @click="show = false" {{ $attributes(['class' => $classes . 'bg-gray-500 hover:bg-gray-700']) }}>
        Cancel
    </a>
@elseif ($name === 'delete')
    <a {{ $attributes(['class' => $classes . 'bg-red-500 hover:bg-red-700']) }}>
        Delete
    </a>
@elseif ($name === 'edit')
    <a {{ $attributes(['class' => $classes . 'bg-green-500 hover:bg-green-700']) }}>
        {{ $slot }}
    </a>
@elseif ($name === 'nav-main')
    @php
        $navClasses = 'block cursor-pointer py-1 md:py-3 pl-1 align-middle text-blue-400 no-underline hover:text-gray-100 border-b-2 hover:border-blue-400';
        $navClasses .= Route::current()->getName() === $active ? ' border-blue-400' : ' border-gray-900';
    @endphp
    <a {{ $attributes(['class' => $navClasses ]) }}>
        <i class="fas {{ $icon }} fa-fw mr-3"></i><span
            class="pb-1 md:pb-0 text-sm">{{ $slot }}</span>
    </a>
@endif
