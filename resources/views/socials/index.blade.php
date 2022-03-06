<x-app-layout>

    <x-slot name="header">
        Social Media
    </x-slot>

    <div class="mb-5">
        <a href="{{ route('socials.create') }}" class="bg-green-500 text-white py-2 px-4 rounded-full">
            Tambah social media
        </a>
    </div>

    <ul class="divide-y-2 divide-gray-300 border border-gray-300">
        @foreach ($socials as $social)
            <li class="p-3 bg-white">
                <a href="{{ $social->link }}" class="flex gap-3">
                    <img src="{{ Storage::url('socials/' . $social->icon) }}" alt="" srcset="" height="20px" width="20px">
                    <span>{{ $social->username }}</span>
                    <span class="capitalize">({{ $social->platform }})</span>
                </a>

                <div class="flex mt-5 justify-between items-center">
                    <a href="{{ route('socials.edit', $social->id) }}"
                    class="px-4 py-2 rounded-full bg-yellow-300 text-black">Ubah</a>
                    <form action="{{ route('socials.destroy', $social->id) }}" method="post">
                        @csrf @method('DELETE')

                        <button type="submit" class="bg-red-600 text-white py-2 px-5 btn-remove
                        rounded-full inline-flex items-center"
                        data-title-popup="Apakah kamu yakin ingin menghapus social {{ $social->platform }}">
                            <box-icon type='solid' name='trash-alt' color="#fff"></box-icon>
                            Hapus
                        </button>
                    </form>
                </div>
            </li>
        @endforeach
    </ul>

</x-app-layout>
