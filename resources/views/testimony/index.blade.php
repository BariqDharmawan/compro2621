<x-app-layout>

    <x-slot name="header">
        Testimony
    </x-slot>

    <div class="mb-5">
        <a href="{{ route('testimony.create') }}" class="bg-green-500 text-white py-2 px-4 rounded-full">
            Tambah Testimonial Baru
        </a>
    </div>

    <div class="grid grid-cols-3 gap-5">
        @foreach ($testimonies as $testimony)
        <x-card class="flex flex-col items-center"
        class-footer="flex justify-between w-full mt-auto border-t border-t-gray-200 pt-4">
            <img src="{{ is_null($testimony->avatar) ? Avatar::create($testimony->fullname)->toBase64() :
            Storage::url('testimony/'. $testimony->avatar) }}" alt=""
            class="block mx-auto mb-3 rounded-full object-cover w-16 h-16 object-cover">


            <p class="font-semibold text-lg text-center mb-1">{{ $testimony->fullname }}</p>
            <time datetime="{{ $testimony->review_at }}" class="block text-center text-xs mb-3">
                Review at: {{ $testimony->review_at->format('d M Y') }}
            </time>
            <p class="text-justify">{{ $testimony->desc }}</p>


            <x-slot name="footer">
                <form action="{{ route('testimony.destroy', $testimony->id) }}" method="post">
                    @csrf @method('DELETE')

                    <button type="submit" class="bg-red-600 text-white py-2 px-5 btn-remove
                    rounded-full inline-flex items-center"
                    data-title-popup="Apakah kamu yakin ingin menghapus testimony dari {{ $testimony->fullname }}">
                        <box-icon type='solid' name='trash-alt' color="#fff"></box-icon>
                        Hapus
                    </button>
                </form>

                <a href="{{ route('testimony.edit', $testimony->id) }}"
                class="bg-yellow-400 text-white py-2 px-4 rounded-full">Ubah</a>

            </x-slot>
        </x-card>
        @endforeach
    </div>

</x-app-layout>
