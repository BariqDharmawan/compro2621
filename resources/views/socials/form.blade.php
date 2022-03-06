<form action="{{ $route }}" method="post" enctype="multipart/form-data">
    @csrf

    @isset($social)
        @method('PUT')
    @endisset

    <div class="mb-3">
        <x-tailwind-input type="select" name="platform" label="Platform" class="capitalize"
        placeholder="Masukan platform nya" :data="isset($social) ? $social : null">
            @foreach ($platforms as $platform)
            <option value="{{ $platform }}">{{ $platform }}</option>
            @endforeach
        </x-tailwind-input>
    </div>

    <div class="mb-3">
        <x-tailwind-input name="username" label="Username"
        placeholder="Masukan username" :data="isset($social) ? $social : null" />
    </div>

    <div class="mb-3">
        <x-tailwind-input type="url" name="link" label="Link profile"
        placeholder="Masukan link profile" :data="isset($social) ? $social : null" />
    </div>

    <div class="mb-3 relative">
        <x-tailwind-input type="file-custom" id="upload" accept="image/*" name="icon"
        label="Icon" value="{{ isset($social) ? $social : null }}" />
    </div>

    <button type="submit" class="bg-green-lemon text-white py-2 px-5">Submit</button>

</form>
