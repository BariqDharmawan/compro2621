<x-app-layout class="shadow-lg">
    <x-slot name="header">
        Edit Social Media {{ $social->platform }}
    </x-slot>

    @if (session('success'))
        <x-alert text="{{ session('success') }}" color="white" />
    @endif

    <x-card class="p-5">
        <img src="{{ Storage::url('socials/' . $social->icon) }}" alt="" srcset="" height="20px" width="20px" class="mb-3 mx-auto">
        @include('socials.form', ['route' => route('socials.update', $social->id)])
    </x-card>
</x-app-layout>
