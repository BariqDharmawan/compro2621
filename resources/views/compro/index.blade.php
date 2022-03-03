<x-app-layout class="shadow-lg">
    <x-slot name="header">
        Compro Detail
    </x-slot>

    <img src="{{ Storage::url('compro/'. $compro->logo) }}" alt="" srcset="" class="mx-auto block h-48">

    @if (session('success'))
        <x-alert text="{{ session('success') }}" color="white" />
    @endif

    <form action="{{ route('compro.update', 1) }}" method="post" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="mb-3">
            <x-tailwind-input label="Company Name" name="name" value="{{ $compro->name }}" />
        </div>

        <div class="mb-3">
            <x-tailwind-input rows="5" type="textarea" label="Company Summary" name="summary" value="{{ $compro->summary }}" />
        </div>

        <div class="mb-3">
            <x-tailwind-input type="file-custom" id="upload" accept="image/*" name="logo"
            label="Logo company" value="{{ isset($compro) ? $compro : null }}" />
        </div>

        <button type="submit"
        class="bg-green-lemon hover:bg-green-400 duration-150 transition-all text-white p-3 rounded">
            Submit
        </button>
    </form>

</x-app-layout>
