<x-app-layout class="shadow-lg">
    <x-slot name="header">
        Tambah Testimony Baru
    </x-slot>

    @if (session('success'))
        <x-alert text="{{ session('success') }}" color="white" />
    @endif

    <x-card class="p-5">
        @include('testimony.form', ['route' => route('testimony.store')])
    </x-card>
</x-app-layout>
