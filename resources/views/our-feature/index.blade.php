<x-app-layout class="shadow-lg">
    <x-slot name="header">
        Our Feature
    </x-slot>

    @if (session('success'))
        <x-alert text="{{ session('success') }}" color="white" />
    @endif

    <x-card class="p-5">
        <div class="grid grid-cols-3 gap-5">
            @foreach ($features as $feature)
                <x-card shadow="none" class="flex flex-col">
                    <div class="mb-4">
                        <p class="font-semibold mb-3">{{ $feature->title }}</p>
                        <p>{{ $feature->desc }}</p>
                    </div>

                    <div class="flex gap-3 mt-auto">
                        <div x-data="{openModal: false}">
                            <x-modal.btn class="bg-red-600 text-white px-4 rounded-full">
                                <box-icon type='solid' name='trash-alt' color="#fff"></box-icon>
                                Hapus
                            </x-modal.btn>
                            <x-modal>
                                <form action="{{ route('our-feature.destroy', $feature->id) }}" method="post">
                                    @csrf @method('PUT')
                                    <p class="text-xl font-semibold mb-4">
                                        Apakah kamu yakin ingin menghapus feature {{ $feature->title }}?
                                    </p>

                                    <button type="submit" class="bg-blue-600 hover:bg-blue-700
                                    duration-150 transition-all text-white p-3 rounded">
                                        Submit
                                    </button>
                                </form>
                            </x-modal>
                        </div>

                        <a href="" class="bg-yellow-400 text-white py-2 px-4 rounded-full">Ubah</a>
                    </div>
                </x-card>
            @endforeach
        </div>
    </x-card>
</x-app-layout>
