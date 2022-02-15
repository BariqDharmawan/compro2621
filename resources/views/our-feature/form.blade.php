<form action="{{ $route }}" method="post" enctype="multipart/form-data">
    @csrf

    @isset($ourFeature)
        @method('PUT')
    @endisset
    <div class="mb-3">
        <label for="heading" class="block text-gray-600 mb-2 font-semibold">Judul Fitur</label>
        <input type="text" id="title" name="title"
        class="h-12 border border-gray-300 overflow-hidden rounded block w-full"
        placeholder="Masukan heading disini" @isset($ourFeature) value="{{ $ourFeature->title }}" @endisset required>
    </div>

    <div class="mb-3">
        <label for="desc" class="block text-gray-600 mb-2 font-semibold">Deskripsi Fitur</label>
        <textarea id="desc" name="desc"
        class="border border-gray-300 overflow-hidden rounded block w-full"
        placeholder="Masukan deskripsi singkat disini"
        rows="5" required>@isset($ourFeature){{ $ourFeature->desc }}@endisset</textarea>
    </div>

    <label class="w-full mb-5 flex flex-col items-center px-4 py-6 bg-white text-green-lemon rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:bg-blue hover:text-green-500">
        <svg class="w-8 h-8" fill="#c9e265" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
        </svg>
        <span class="mt-2 text-base leading-normal"
        data-text="@isset($ourFeature)Ganti gambar @else Pilih gambar @endisset">
            @isset($ourFeature)
            Ganti gambar
            @else
            Pilih gambar
            @endisset
        </span>
        <input type='file' name="img" class="hidden" id="upload" />
    </label>

    <button type="submit"
    class="bg-green-lemon hover:bg-green-400 duration-150 transition-all text-white p-3 rounded">
        Submit
    </button>
</form>
