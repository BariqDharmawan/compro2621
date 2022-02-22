<x-app-layout class="shadow-lg">
    <x-slot name="header">
        Ubah metode {{ $payOption->name }}
    </x-slot>

    @if (session('success'))
        <x-alert text="{{ session('success') }}" color="white" />
    @endif

    <x-card class="p-5">
        @include('pay-option.form', ['route' => route('pay-option.update', $payOption->id)])
    </x-card>
</x-app-layout>
