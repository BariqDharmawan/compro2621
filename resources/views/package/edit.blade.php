<x-app-layout class="shadow-lg">
    <x-slot name="header">
        Feature {{ $ourFeature->title }}
    </x-slot>

    @if (session('success'))
        <x-alert text="{{ session('success') }}" color="white" />
    @endif

    <x-card class="p-5">
        @include('our-feature.form', ['route' => route('our-feature.update', $ourFeature->id)])
    </x-card>
</x-app-layout>
