<div>
    <div id="hero" class="hero min-h-screen bg-cover bg-center"
        style="background-image: url('{{ asset('assets/img/4.jpeg') }}')" wire:poll.1s>
        <div class="hero-overlay"></div>
        <div class="hero-content text-neutral-content text-center">
            <div class="hero-title text-white max-w-md">
                <h1 class="mb-5 text-5xl font-bold">The Wedding Of</h1>
                <h1 class="mb-5 text-5xl font-bold">Indi & Astri</h1>
                <p class="mb-5">
                    1 Desember 2024
                </p>
                <div class="grid auto-cols-max grid-flow-col gap-5 text-center">
                    <div class="bg-neutral rounded-box text-neutral-content flex flex-col p-2">
                        <span class="countdown font-mono text-5xl">
                            <span style="--value:{{ $days }}"></span>
                        </span>
                        Hari
                    </div>
                    <div class="bg-neutral rounded-box text-neutral-content flex flex-col p-2">
                        <span class="countdown font-mono text-5xl">
                            <span style="--value:{{ $hours }}"></span>
                        </span>
                        Jam
                    </div>
                    <div class="bg-neutral rounded-box text-neutral-content flex flex-col p-2">
                        <span class="countdown font-mono text-5xl">
                            <span style="--value:{{ $minutes }}"></span>
                        </span>
                        Menit
                    </div>
                    <div class="bg-neutral rounded-box text-neutral-content flex flex-col p-2">
                        <span class="countdown font-mono text-5xl">
                            <span style="--value:{{ $seconds }}"></span>
                        </span>
                        Detik
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
