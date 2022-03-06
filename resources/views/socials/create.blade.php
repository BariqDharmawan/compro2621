<x-app-layout class="shadow-lg">
    <x-slot name="header">
        Tambah Social Media
    </x-slot>

    @if (session('success'))
        <x-alert text="{{ session('success') }}" color="white" />
    @endif

    <x-card class="p-5">
        @include('socials.form', ['route' => route('socials.store')])
    </x-card>
</x-app-layout>
