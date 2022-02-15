<form action="{{ $route }}" method="post" enctype="multipart/form-data">
    @csrf

    @isset($testimony)
        @method('PUT')
    @endisset
    <div class="mb-3">
        <x-tailwind-input name="fullname" label="Nama orang" placeholder="Masukan nama orang nya"
        :data="isset($testimony) ? $testimony : null" />
    </div>

    <div class="mb-3">
        <x-tailwind-input type="textarea" name="desc" label="Kalimat review" placeholder="Masukan kalimat review nya"
        :data="isset($testimony) ? $testimony : null" />
    </div>

    <div class="mb-3">
        <x-tailwind-input type="date" name="review_at" max="{{ date('Y-m-d') }}"
        min="{{ date('Y-m-d', strtotime(Carbon\Carbon::create('2000-01-01'))) }}"
        label="Tanggal Review" placeholder="Pilih tanggal review"
        value="{{ isset($testimony) ? $testimony->review_at->format('Y-m-d') : null }}" />
    </div>

    <div class="mb-3 relative">
        <x-tailwind-input type="file-custom" id="upload" accept="image/*" name="avatar"
        label="Profile Avatar" value="{{ isset($testimony) ? $testimony : null }}" />
    </div>

    <button type="submit"
    class="bg-green-lemon hover:bg-green-400 duration-150 transition-all text-white p-3 rounded">
        Submit
    </button>
</form>
