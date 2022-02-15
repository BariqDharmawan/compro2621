<x-app-layout class="shadow-lg">
    <x-slot name="header">
        Tambah Package Baru
    </x-slot>

    @if (session('success'))
        <x-alert text="{{ session('success') }}" color="white" />
    @endif

    <x-card class="p-5">
        @include('package.form', ['route' => route('our-package.store')])
    </x-card>
</x-app-layout>
