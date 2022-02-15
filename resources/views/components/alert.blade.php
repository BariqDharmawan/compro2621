@props(['type' => 'success', 'text' => null, 'color'])

<div {{ $attributes->class([
    'mb-4',
    'p-3',
    'rounded-lg',
    'bg-green-500' => $type == 'success',
    'bg-red-600' => $type == 'danger',
    'text-white' => $color == 'white'
]) }}>
    @isset($text)
    <p class="m-0 font-bold">{{ $text }}</p>
    @endisset
    {{ $slot }}
</div>

