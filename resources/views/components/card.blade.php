@props([
    'shadow' => 'default',
    'bg' => 'white',
    'pd' => '4',
    'rounded' => 'lg',
    'header' => null,
    'footer' => null,
    'classFooter' => null
])

<div {{ $attributes->class([
    'shadow' => $shadow == 'default',
    'shadow-sm' => $shadow == 'sm',
    'shadow-lg' => $shadow == 'lg',
    'shadow-md' => $shadow == 'md',
    'shadow-none' => $shadow == 'none',
    'border',
    'border-gray-200',
    'bg-white' => $bg == 'white',
    'rounded-' . $rounded,
]) }}>
    @isset($header)
    <div class="{{ $pd == '4' ? 'p-4' : 'p-' . $pd }}">
        {{ $header }}
    </div>
    @endisset

    <div class="h-full flex flex-col {{ $pd == '4' ? 'p-4' : 'p-' . $pd }}">
        {{ $slot }}
    </div>

    @isset($footer)
    <div class="{{ $pd == '4' ? 'p-4' : 'p-' . $pd }} {{ $classFooter }}">{{ $footer }}</div>
    @endisset

</div>
