<x-app-layout class="shadow-lg">
    <x-slot name="header">
        Paket {{ $ourPackage->title }}
    </x-slot>

    @if (session('success'))
        <x-alert text="{{ session('success') }}" color="white" />
    @endif

    <x-card class="p-5">
        @include('package.form', ['route' => route('our-package.update', $ourPackage->id)])
    </x-card>
</x-app-layout>
