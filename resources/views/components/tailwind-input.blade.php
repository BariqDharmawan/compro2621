@props([
    'label',
    'name',
    'id' => null,
    'type' => 'text',
    'data',
    'placeholder' => null,
    'value' => null,
    'rows' => '5',
    'height' => null
])

<label for="old-price" class="block text-gray-600 mb-2 font-semibold">{{ $label }}</label>

@switch($type)
    @case('select')
    <select {{ $attributes->class([
        'p-3',
        'rounded',
        'w-full',
        'block',
        'border',
        'border-gray-300',
        'overflow-hidden',
    ])->merge(['name' => $name, 'id' => $id ?? Str::slug($name)]) }}>
        {{ $slot }}
    </select>

    @case('wysiwyg')
    <div class="wysiwyg" id="wysiwyg-{{ $id ?? Str::slug($name) }}" data-placeholder="{{ $placeholder }}"
    data-height="{{ $height }}">
        @isset($value)
        {!! $value !!}
        @else
        {!! $data->{$name} ?? old($name) !!}
        @endisset
    </div>
    <input type="text" class="-z-50 opacity-0 absolute h-0 w-0 p-0 m-0" {{ $attributes->merge([
        'id' => $id ?? Str::slug($name),
        'name' => $name,
        'value' => isset($value) ? $value : ($data->{$name} ?? old($name))
    ]), }} />
    @break

    @case('textarea')
        <textarea {{ $attributes->class([
            'border',
            'border-gray-300',
            'overflow-hidden',
            'rounded',
            'block',
            'w-full'
        ])->merge([
            'placeholder' => $placeholder,
            'id' => $id ?? Str::slug($name),
            'name' => $name,
            'rows' => $rows,
        ]) }}>@isset($value){{ $value }}@else @if($data != null){{ $data->{$name} }}@else {{ old($name) }} @endif @endisset</textarea>
    @break

    @default
    <input {{ $attributes->class([
        'h-12', 'border', 'border-gray-300', 'overflow-hidden', 'rounded', 'block', 'w-full'
    ])->merge([
        'placeholder' => $placeholder,
        'type' => $type,
        'name' => $name,
        'id' => $id ?? Str::slug($name),
        'value' => $value ?? old($name)
    ]) }} @isset($value) value="{{ $value }}" @endisset @if($data != null) value="{{ $data->{$name} }}" @endif>

@endswitch

@error($name)
<small class="text-red-600 capitalize block py-1">{{ $message }}</small>
@enderror

@if ($type != 'select')
{{ $slot }}
@endif
