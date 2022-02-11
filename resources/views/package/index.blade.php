<x-app-layout class="shadow-lg">

    <x-slot name="header">
        Our Package
    </x-slot>

    @if (session('success'))
        <x-alert text="{{ session('success') }}" color="white" />
    @endif

    <div class="grid grid-cols-3 gap-5">
        @foreach ($packages as $package)
            <x-card>
                <p>{{ $package->title }}</p>
                <p>
                    <s> <sup>Rp.</sup> {{ number_format($package->old_price) }}</s>
                </p>
                <p>
                    <var> <sup>Rp.</sup> {{ number_format($package->new_price) }}</var>
                </p>

                <div class="py-3 wyswyg-package">{!! $package->content !!}</div>

                <div class="flex justify-between mt-auto border-t border-t-gray-300">
                    <form action="{{ route('our-package.destroy', $package->id) }}" method="post">
                        @csrf @method('DELETE')

                        <button type="submit" class="bg-red-600 text-white py-2 px-5 btn-remove
                        rounded-full inline-flex items-center"
                        data-title-popup="Apakah kamu yakin ingin menghapus {{ $package->title }}">
                            <box-icon type='solid' name='trash-alt' color="#fff"></box-icon>
                            Hapus
                        </button>
                    </form>

                    <a href="{{ route('our-package.edit', $package->id) }}"
                        class="bg-yellow-400 text-white py-2 px-4 rounded-full">Ubah</a>
                </div>
            </x-card>
        @endforeach
    </div>

</x-app-layout>
