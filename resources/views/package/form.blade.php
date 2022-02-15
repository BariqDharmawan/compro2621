<form action="{{ $route }}" method="post" enctype="multipart/form-data">
    @csrf

    @isset($ourPackage)
        @method('PUT')
    @endisset
    <div class="mb-3">
        <x-tailwind-input name="judul" label="Judul Paket" placeholder="Masukan judulnya disini"
        :data="isset($ourPackage) ? $ourPackage : null" />
    </div>

    <div class="mb-3">
        <x-tailwind-input type="number" name="harga_lama" label="Harga Lama (tidak wajib)" :data="isset($ourPackage) ? $ourPackage : null" />
    </div>

    <div class="mb-3">
        <x-tailwind-input type="number" name="harga_baru" label="Harga Baru" :data="isset($ourPackage) ? $ourPackage : null">
            <small class="text-gray-400">Jika paket tidak memiliki harga lama, masukan harga utamanya disini</small>
        </x-tailwind-input>
    </div>

    <div class="mb-3 relative">
        <x-tailwind-input height="200px" placeholder="Masukan penjelasan paket" type="wysiwyg" name="deskripsi"
        label="Konten" :data="isset($ourPackage) ? $ourPackage : null" required />
    </div>

    <button type="submit"
    class="bg-green-lemon hover:bg-green-400 duration-150 transition-all text-white p-3 rounded">
        Submit
    </button>
</form>
