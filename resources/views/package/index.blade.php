<x-app-layout>

    <x-slot name="header">
        Our Package
    </x-slot>

    <div class="mb-5">
        <a href="{{ route('our-package.create') }}" class="bg-green-500 text-white py-2 px-4 rounded-full">
            Tambah paket baru
        </a>
    </div>

    @if (session('success'))
        <x-alert text="{{ session('success') }}" color="white" />
    @endif

    <div class="grid grid-cols-3 gap-5">
        @foreach ($packages as $package)
            <x-card class="flex flex-col" class-footer="flex justify-between mt-auto border-t border-t-gray-200 pt-4 mt-auto">
                <div>
                    <p>{{ $package->judul }}</p>
                    <p>
                        <sup>Rp.</sup> <del> {{ number_format($package->harga_lama) }}</del>
                        <var>{{ number_format($package->harga_baru) }}</var>
                    <p>
                </div>

                <div class="py-3 wyswyg-package">{!! $package->deskripsi !!}</div>

                <x-slot name="footer">
                    <form action="{{ route('our-package.destroy', $package->id) }}" method="post">
                        @csrf @method('DELETE')

                        <button type="submit" class="bg-red-600 text-white py-2 px-5 btn-remove
                        rounded-full inline-flex items-center"
                        data-title-popup="Apakah kamu yakin ingin menghapus {{ $package->judul }}">
                            <box-icon type='solid' name='trash-alt' color="#fff"></box-icon>
                            Hapus
                        </button>
                    </form>

                    <a href="{{ route('our-package.edit', $package->id) }}"
                    class="bg-yellow-400 text-white py-2 px-4 rounded-full">Ubah</a>
                </x-slot>

                <div class="">

                </div>
            </x-card>
        @endforeach
    </div>

</x-app-layout>
