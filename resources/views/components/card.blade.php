@props(['shadow' => 'default', 'bg' => 'white', 'pd' => '3', 'rounded' => 'lg'])

<div {{ $attributes->class([
    'shadow' => $shadow == 'default',
    'shadow-sm' => $shadow == 'sm',
    'shadow-lg' => $shadow == 'lg',
    'shadow-md' => $shadow == 'md',
    'border',
    'border-gray-200',
    'p-3' => $pd == '3',
    'bg-white' => $bg == 'white',
    'rounded-' . $rounded,
]) }}>
    {{ $slot }}
</div>
