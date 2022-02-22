<form action="{{ $route }}" method="post" enctype="multipart/form-data">
    @csrf

    @isset($payOption)
        @method('PUT')
    @endisset

    <div class="mb-3">
        <x-tailwind-input name="name" label="Nama metode"
        placeholder="Masukan nama metode pembayaran (contoh: Alfamart)"
        :data="isset($payOption) ? $payOption : null" />
    </div>

    <div class="mb-3 relative">
        <x-tailwind-input type="file-custom" id="upload" accept="image/*" name="img"
        label="Gambar" value="{{ isset($payOption) ? $payOption : null }}" />
    </div>

    <button type="submit" class="bg-green-lemon text-white py-2 px-5">Submit</button>

</form>
