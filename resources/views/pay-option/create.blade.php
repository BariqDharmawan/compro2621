<x-app-layout class="shadow-lg">
    <x-slot name="header">
        Tambah Metode Pembayaran Baru
    </x-slot>

    @if (session('success'))
        <x-alert text="{{ session('success') }}" color="white" />
    @endif

    <x-card class="p-5">
        @include('pay-option.form', ['route' => route('pay-option.store')])
    </x-card>
</x-app-layout>
