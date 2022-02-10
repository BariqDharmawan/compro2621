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
            </x-card>
        @endforeach
    </div>

</x-app-layout>
