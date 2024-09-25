@props(['active'=>false])

<a class="link {{ $active ? 'bg-gray-900 text-white'
        : 'text-gray-300
             hover:bg-gray-700 hover:text-white' }}"
    {{ $attributes }}>{{ $slot }}</a>
