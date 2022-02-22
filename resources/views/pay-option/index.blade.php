<x-app-layout>

    <x-slot name="header">
        Metode Pembayaran
    </x-slot>

    <div class="mb-5">
        <a href="{{ route('pay-option.create') }}" class="bg-green-500 text-white py-2 px-4 rounded-full">
            Tambah metode Pembayaran
        </a>
    </div>

    <div class="grid grid-cols-3 gap-5">
        @foreach ($payOptions as $payOption)
            <x-card class="flex flex-col"
            class-footer="flex justify-between w-full mt-auto border-t border-t-gray-200 pt-4">
                <img src="{{ Storage::url('pay-option/' . $payOption->img) }}" alt="" srcset="" class="h-20 w-20 mx-auto">
                <p class="text-center mt-3 font-bold text-lg capitalize">{{ $payOption->name }}</p>

                <x-slot name="footer">
                    <form action="{{ route('pay-option.destroy', $payOption->id) }}" method="post">
                        @csrf @method('DELETE')

                        <button type="submit" class="bg-red-600 text-white py-2 px-5 btn-remove
                        rounded-full inline-flex items-center"
                        data-title-popup="Apakah kamu yakin ingin menghapus metode pembayaran {{ $payOption->name }}">
                            <box-icon type='solid' name='trash-alt' color="#fff"></box-icon>
                            Hapus
                        </button>
                    </form>

                    <a href="{{ route('pay-option.edit', $payOption->id) }}"
                    class="bg-yellow-400 text-white py-2 px-4 rounded-full">Ubah</a>

                </x-slot>
            </x-card>
        @endforeach
    </div>

</x-app-layout>
