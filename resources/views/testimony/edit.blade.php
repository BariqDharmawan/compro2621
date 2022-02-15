<x-app-layout class="shadow-lg">
    <x-slot name="header">
        Testimoni {{ $testimony->fullname }}
    </x-slot>

    @if (session('success'))
        <x-alert text="{{ session('success') }}" color="white" />
    @endif

    <x-card class="p-5">
        @include('testimony.form', ['route' => route('testimony.update', $testimony->id)])
    </x-card>
</x-app-layout>
