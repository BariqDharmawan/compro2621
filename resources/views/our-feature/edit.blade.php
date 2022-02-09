<x-app-layout class="shadow-lg">
    <x-slot name="header">
        Feature {{ $ourFeature->title }}
    </x-slot>

    @if (session('success'))
        <x-alert text="{{ session('success') }}" color="white" />
    @endif

    <x-card class="p-5">
        <form action="{{ route('our-feature.update', $ourFeature->id) }}" method="post">
            @csrf @method('PUT')
            <button type="submit"
            class="bg-green-lemon hover:bg-green-400 duration-150 transition-all text-white p-3 rounded">
                Submit
            </button>
        </form>
    </x-card>
</x-app-layout>
