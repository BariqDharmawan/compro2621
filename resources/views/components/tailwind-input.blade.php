@props([
    'label',
    'name',
    'id' => null,
    'type' => 'text',
    'data' => null,
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
            @isset($data)
            {!! $data->{$name} ?? old($name) !!}
            @endisset
        @endisset
    </div>
    <input type="text" class="-z-50 opacity-0 absolute h-0 w-0 p-0 m-0" {{ $attributes->merge([
        'id' => $id ?? Str::slug($name),
        'name' => $name,
        'value' => isset($value) ? $value : (isset($data) ? $data->{$name} : old($name))
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
        ]) }}>@isset($value){{ $value }}@else @isset($data){{ $data->{$name} }}@else {{ old($name) }}@endisset @endisset</textarea>
    @break

    @case('file-custom')
    <label class="w-full mb-5 flex flex-col items-center px-4 py-6 bg-white text-green-lemon rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-green-500">
        <svg class="w-8 h-8" fill="#c9e265" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
        </svg>
        <span class="mt-2 text-base leading-normal"
        data-text="@isset($value)Ganti gambar @else Pilih gambar @endisset">
            @isset($value)
            Ganti {{ $label }}
            @else
            Pilih {{ $label }}
            @endisset
        </span>
        <input {{ $attributes->class(['opacity-0', 'h-0', 'w-0' , 'p-0', 'm-0'])->merge([
            'type' => 'file',
            'name' => $name,
            'id' => $id ?? Str::slug($name)
        ]) }} />
    </label>
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
    ]) }} @isset($value) value="{{ $value }}" @endisset @isset($data) value="{{ $data->{$name} }}" @endisset>

@endswitch

@error($name)
<small class="text-red-600 capitalize block py-1">{{ $message }}</small>
@enderror

@if ($type != 'select')
{{ $slot }}
@endif
