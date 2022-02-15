<x-app-layout class="shadow-lg">
    <x-slot name="header">
        Tambah Feature Baru
    </x-slot>

    @if (session('success'))
        <x-alert text="{{ session('success') }}" color="white" />
    @endif

    <x-card class="p-5">
        @include('our-feature.form', ['route' => route('our-feature.store')])
    </x-card>
</x-app-layout>
