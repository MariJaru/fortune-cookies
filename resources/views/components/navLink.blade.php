{{--custom nav link--}}

@props(['active' => false])

<a
    {{ $attributes }}
    class="{{ $active ? 'text-red' : '' }}"
>
    {{ $slot }}
</a>
