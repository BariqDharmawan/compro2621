@props(['text' => null, 'rounded' => 'default'])

<a href="javascript:void(0);" x-on:click="openModal = true"
{{ $attributes->class([
    'inline-flex', 'p-2', 'rounded' => $rounded == 'default', 'rounded-full' => $rounded == 'full' ,'items-center'
]) }}>
    @isset($text)
    {{ $text }}
    @endisset

    {{ $slot }}
</a>
