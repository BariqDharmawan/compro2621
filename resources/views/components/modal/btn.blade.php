@props(['text' => null])

<a href="javascript:void(0);" x-on:click="openModal = true"
{{ $attributes->class(['inline-flex', 'p-2', 'rounded', 'items-center']) }}>
    @isset($text)
    {{ $text }}
    @endisset

    {{ $slot }}
</a>
