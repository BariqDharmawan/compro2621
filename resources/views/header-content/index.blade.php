<x-app-layout class="shadow-lg">
    <x-slot name="header">
        Header content
    </x-slot>

    @if (session('success'))
        <x-alert text="{{ session('success') }}" color="white" />
    @endif

    <x-card class="p-5">
        <div>
            <p class="font-bold">Heading:</p>
            <p>{{ $header->heading }}</p>
        </div>
        <div class="mt-3">
            <p class="font-bold">Deskripsi:</p>
            <p>{{ $header->desc }}</p>
        </div>
        <div class="mt-3">
            <p class="font-bold">Video Youtube</p>
            <a data-fslightbox="gallery" href="{{ $header->video_link }}" class="text-blue-600">Lihat video</a>
        </div>

        <hr class="my-4">

        <div x-data="{openModal: false}">
            <x-modal.btn class="bg-green-500 text-white">
                <box-icon name='edit-alt' color="#fff"></box-icon>
                Edit konten
            </x-modal.btn>
            <x-modal>
                <form action="{{ route('header-content.update', 1) }}" method="post">
                    @csrf @method('PUT')
                    <div class="mb-3">
                        <label for="heading" class="block text-gray-600 mb-2 font-semibold">Heading title</label>
                        <input type="text" id="heading" name="heading"
                        class="h-12 border border-gray-300 overflow-hidden rounded block w-full"
                        placeholder="Masukan heading disini" value="{{ $header->heading }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="desc" class="block text-gray-600 mb-2 font-semibold">Deskripsi Singkat</label>
                        <textarea type="text" id="desc" name="desc" class="border border-gray-300 overflow-hidden
                        rounded block w-full"
                        placeholder="Masukan deskripsi singkat disini"
                        rows="5" required>{{ preg_replace(array('/\s{2,}/', '/[\t\n]/'), ' ', $header->desc) }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="video-link" class="block text-gray-600 mb-2 font-semibold">URL Video Youtube</label>
                        <input type="url" id="video-link" name="video_link"
                        class="border border-gray-300 overflow-hidden rounded block w-full"
                        placeholder="Masukan URL youtube nya disini" value="{{ $header->video_link }}" required>
                    </div>

                    <button type="submit"
                    class="bg-green-lemon hover:bg-green-400 duration-150 transition-all text-white p-3 rounded">
                        Submit
                    </button>
                </form>
            </x-modal>
        </div>

    </x-card>
</x-app-layout>
