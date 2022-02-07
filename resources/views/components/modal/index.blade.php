<div x-show="openModal" x-on:click="openModal = false" x-on:keydown.escape.prevent.stop="openModal = false"
:aria-labelledby="$id('modal-title')" x-id="['modal-title']" x-transition.opacity
{{ $attributes->class([
    'bg-opacity-50', 'bg-black', 'fixed', 'top-0', 'left-0', 'w-full', 'h-full', 'z-20', 'flex', 'justify-center', 'items-center'
])->merge([
    'role' => "dialog",
    'aria-modal' => "true"
]) }}>
    <div class="bg-white rounded-lg p-4 border border-gray-200 w-6/12 max-w-screen-md"
    x-on:click.stop x-trap.noscroll.inert="openModal">
        {{ $slot }}
    </div>
</div>
