<x-app-layout class="shadow-lg">

    <x-slot name="header">
        Our Feature
    </x-slot>

    <div class="mb-5">
        <a href="{{ route('our-feature.create') }}" class="bg-green-500 text-white py-2 px-4 rounded-full">
            Tambah fitur baru
        </a>
    </div>

    @if (session('success'))
        <x-alert text="{{ session('success') }}" color="white" />
    @endif

    <x-card class="p-5">
        <div class="grid grid-cols-3 gap-5">
            @foreach ($features as $feature)
                <x-card shadow="none" class="flex flex-col">
                    <img src="{{ Storage::url('feature/' . $feature->img) }}" alt=""
                    class="block mx-auto rounded-full w-20 h-20 mb-3 object-cover">

                    <div class="mb-4">
                        <p class="font-semibold mb-3 text-center">{{ $feature->title }}</p>
                        <p>{{ $feature->desc }}</p>
                    </div>

                    <div class="flex justify-between mt-auto">
                        <form action="{{ route('our-feature.destroy', $feature->id) }}" method="post">
                            @csrf @method('DELETE')

                            <button type="submit" class="bg-red-600 text-white py-2 px-5 btn-remove
                            rounded-full inline-flex items-center"
                            data-title-popup="Apakah kamu yakin ingin menghapus {{ $feature->title }}">
                                <box-icon type='solid' name='trash-alt' color="#fff"></box-icon>
                                Hapus
                            </button>
                        </form>

                        <a href="{{ route('our-feature.edit', $feature->id) }}"
                        class="bg-yellow-400 text-white py-2 px-4 rounded-full">Ubah</a>
                    </div>
                </x-card>
            @endforeach
        </div>
    </x-card>
</x-app-layout>
