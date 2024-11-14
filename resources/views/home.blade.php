<x-layouts.app>
    <div x-data="{ backgroundImage: window.innerWidth >= 1024 ? '{{ asset('assets/img/home-desktop.jpeg') }}' : '{{ asset('assets/img/home.jpeg') }}' }" x-init="window.addEventListener('resize', () => backgroundImage = window.innerWidth >= 1024 ? '{{ asset('assets/img/home-desktop.jpeg') }}' : '{{ asset('assets/img/home.jpeg') }}')" class="hero min-h-screen bg-cover bg-center"
        :style="`background-image: url('${backgroundImage}')`">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-neutral-content text-center">
            <div class="hero-title text-white max-w-md">
                <h1 class="mb-5 text-5xl font-bold">The Wedding Of</h1>
                <h1 class="mb-5 text-5xl font-bold">Indi & Astri</h1>
                <p class="mb-5">
                    Kepada Yth. Bapak/Ibu/Saudara/i
                    <br>
                    <livewire:show-name />
                </p>
                <a href="{{ route('invitation') }}" wire:navigate class="btn btn-neutral text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21.75 9v.906a2.25 2.25 0 0 1-1.183 1.981l-6.478 3.488M2.25 9v.906a2.25 2.25 0 0 0 1.183 1.981l6.478 3.488m8.839 2.51-4.66-2.51m0 0-1.023-.55a2.25 2.25 0 0 0-2.134 0l-1.022.55m0 0-4.661 2.51m16.5 1.615a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V8.844a2.25 2.25 0 0 1 1.183-1.981l7.5-4.039a2.25 2.25 0 0 1 2.134 0l7.5 4.039a2.25 2.25 0 0 1 1.183 1.98V19.5Z" />
                    </svg>

                    Buka Undangan
                </a>
            </div>
        </div>
    </div>
</x-layouts.app>
