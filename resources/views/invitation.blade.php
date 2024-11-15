<x-layouts.app>


    <div class="fixed bottom-14 right-4 z-10 flex flex-col space-y-2">
        <label class="swap swap-rotate py-2 px-2 bg-neutral rounded-full">
            <!-- this hidden checkbox controls the state -->
            <input type="checkbox" value="pastel" class="theme-controller" />

            <!-- sun icon -->
            <svg class="swap-on h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                    d="M5.64,17l-.71.71a1,1,0,0,0,0,1.41,1,1,0,0,0,1.41,0l.71-.71A1,1,0,0,0,5.64,17ZM5,12a1,1,0,0,0-1-1H3a1,1,0,0,0,0,2H4A1,1,0,0,0,5,12Zm7-7a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V4A1,1,0,0,0,12,5ZM5.64,7.05a1,1,0,0,0,.7.29,1,1,0,0,0,.71-.29,1,1,0,0,0,0-1.41l-.71-.71A1,1,0,0,0,4.93,6.34Zm12,.29a1,1,0,0,0,.7-.29l.71-.71a1,1,0,1,0-1.41-1.41L17,5.64a1,1,0,0,0,0,1.41A1,1,0,0,0,17.66,7.34ZM21,11H20a1,1,0,0,0,0,2h1a1,1,0,0,0,0-2Zm-9,8a1,1,0,0,0-1,1v1a1,1,0,0,0,2,0V20A1,1,0,0,0,12,19ZM18.36,17A1,1,0,0,0,17,18.36l.71.71a1,1,0,0,0,1.41,0,1,1,0,0,0,0-1.41ZM12,6.5A5.5,5.5,0,1,0,17.5,12,5.51,5.51,0,0,0,12,6.5Zm0,9A3.5,3.5,0,1,1,15.5,12,3.5,3.5,0,0,1,12,15.5Z" />
            </svg>

            <!-- moon icon -->
            <svg class="swap-off h-5 w-5 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                    d="M21.64,13a1,1,0,0,0-1.05-.14,8.05,8.05,0,0,1-3.37.73A8.15,8.15,0,0,1,9.08,5.49a8.59,8.59,0,0,1,.25-2A1,1,0,0,0,8,2.36,10.14,10.14,0,1,0,22,14.05,1,1,0,0,0,21.64,13Zm-9.5,6.69A8.14,8.14,0,0,1,7.08,5.22v.27A10.15,10.15,0,0,0,17.22,15.63a9.79,9.79,0,0,0,2.1-.22A8.11,8.11,0,0,1,12.14,19.73Z" />
            </svg>
        </label>

        <div x-data="{ playing: true }" x-init="$refs.audio.play()">
            <audio x-ref="audio" src="{{ asset('assets/music/music.mp4') }}" loop></audio>

            <label class="swap py-2 px-2 bg-neutral rounded-full">
                <!-- this hidden checkbox controls the state -->
                <input type="checkbox"
                    @click="playing = !playing; playing ? $refs.audio.play() : $refs.audio.pause()" />

                <!-- volume on icon -->
                <svg x-show="playing" x-transition class="fill-current" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path
                        d="M14,3.23V5.29C16.89,6.15 19,8.83 19,12C19,15.17 16.89,17.84 14,18.7V20.77C18,19.86 21,16.28 21,12C21,7.72 18,4.14 14,3.23M16.5,12C16.5,10.23 15.5,8.71 14,7.97V16C15.5,15.29 16.5,13.76 16.5,12M3,9V15H7L12,20V4L7,9H3Z" />
                </svg>

                <!-- volume off icon -->
                <svg x-show="!playing" x-transition class="fill-current" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" viewBox="0 0 24 24">
                    <path
                        d="M3,9H7L12,4V20L7,15H3V9M16.59,12L14,9.41L15.41,8L18,10.59L20.59,8L22,9.41L19.41,12L22,14.59L20.59,16L18,13.41L15.41,16L14,14.59L16.59,12Z" />
                </svg>
            </label>
        </div>
    </div>


    {{-- Hero --}}
    <div id="hero" class="hero min-h-screen bg-cover bg-center"
        style="background-image: url('{{ asset('assets/img/4.jpeg') }}')">
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
                            <span style="--value:10;"></span>
                        </span>
                        Hari
                    </div>
                    <div class="bg-neutral rounded-box text-neutral-content flex flex-col p-2">
                        <span class="countdown font-mono text-5xl">
                            <span style="--value:0;"></span>
                        </span>
                        Jam
                    </div>
                    <div class="bg-neutral rounded-box text-neutral-content flex flex-col p-2">
                        <span class="countdown font-mono text-5xl">
                            <span style="--value:24;"></span>
                        </span>
                        Menit
                    </div>
                    <div class="bg-neutral rounded-box text-neutral-content flex flex-col p-2">
                        <span class="countdown font-mono text-5xl">
                            <span style="--value:${counter};"></span>
                        </span>
                        Detik
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End Hero --}}

    {{-- Quran Card --}}
    <div id="quran" class="container max-w-5xl mx-auto flex flex-col my-12 items-center justify-center space-y-12">
        <h1 class="text-2xl font-extralight">Bismillahirrahmanirrahim</h1>
        <div class="card bg-neutral max-w-80 sm:max-w-96 lg:w-96 shadow-xl">
            <div class="card-body">
                <h2 class="card-title justify-center text-primary">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-20">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0 0 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                    </svg>

                </h2>
                <p class="text-3xl my-5">وَمِنْ آيَاتِهِ أَنْ خَلَقَ لَكُمْ مِنْ أَنْفُسِكُمْ أَزْوَاجًا لِتَسْكُنُوا
                    إِلَيْهَا وَجَعَلَ
                    بَيْنَكُمْ مَوَدَّةً وَرَحْمَةً إِنَّ فِي ذَلِكَ لَآيَاتٍ لِقَوْمٍ يَتَفَكَّرُونَ</p>
                <p class="text-justify">"Dan Di Antara Tanda-Tanda (Kebesaran)-Nya Ialah Dia Menciptakan
                    Pasangan-Pasangan Untukmu Dari
                    Jenismu Sendiri, Agar Kamu Cenderung Dan Merasa Tenteram Kepadanya, Dan Dia Menjadikan Di Antaramu
                    Rasa Kasih Dan Sayang. Sesungguhnya Pada Yang Demikian Itu Benar-Benar Terdapat Tanda-Tanda
                    (Kebesaran Allah) Bagi Kaum Yang Berpikir." (Q.S Ar-Rum : 21)</p>
            </div>
        </div>
    </div>
    {{-- End Quran Card --}}

    {{-- Wedding Couple Card --}}
    <div id="couple" class="container max-w-5xl mx-auto flex flex-col my-12 items-center justify-center space-y-12">
        <h1 class="text-4xl text-center">Wedding <br> Couple</h1>
        <p class="mb-5 text-center">
            Dengan memohon rahmat dan ridho Allah Subhanahu Wa Ta’ala, insyaaAllah kami akan menyelenggarakan acara
            pernikahan anak kami :
        </p>
        <div class="card bg-base-100 max-w-80 sm:max-w-96 lg:w-96 image-full w-96 shadow-xl">
            <figure>
                <img src="{{ asset('assets/img/1.jpeg') }}" alt="Foto Indi Sodikin" />
            </figure>
            <div class="card-body items-center text-center">
                <h2 class="card-title text-neutral font-bold">Indi Sodikin (Indi)</h2>
                <p class="text-neutral">Putra dari Bapak Onen (Alm) & Ibu Iin (Almh)</p>
            </div>
        </div>

        <div class="divider">&</div>

        <div class="card bg-base-100 max-w-80 sm:max-w-96 lg:w-96 image-full w-96 shadow-xl">
            <figure>
                <img src="{{ asset('assets/img/2.jpeg') }}" alt="Foto Astri Humairoh" />
            </figure>
            <div class="card-body items-center text-center">
                <h2 class="card-title text-neutral font-bold">Astri Humairoh S.Pd (Astri)</h2>
                <p class="text-neutral">Putri dari Bapak Asep Jamaludin & Ibu Pitriyah</p>
            </div>
        </div>
    </div>
    {{-- End Wedding Couple Card --}}

    {{-- Event Card --}}
    <div id="event" class="container max-w-5xl mx-auto flex flex-col my-12 items-center justify-center space-y-12">
        <h1 class="text-4xl text-center mt-12">Wedding <br> Event</h1>
        <p class="mb-5 text-center">
            Dengan segala kerendahan hati kami berharap kehadiran kehadiran Bapak/Ibu/Saudara/i dalam acara
            pernikahan
            kami yang akan diselenggarakan pada :
        </p>
        <div class="card bg-neutral max-w-80 sm:max-w-96 lg:w-96 shadow-xl py-12 rounded-t-[200px]">
            <div class="card-body">
                <h2 class="card-title justify-center text-primary">Akad Nikah</h2>
                <div class="divider">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-20">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                    </svg>
                </div>
                <h2 class="card-title justify-center text-primary">Minggu</h2>
                <h2 class="card-title justify-center text-primary text-5xl">| 01 |</h2>
                <h2 class="card-title justify-center text-primary">Desember 2024</h2>
                <h2 class="card-title justify-center text-primary">09:00 WIB - Selesai</h2>

                <div class="divider">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-20">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                    </svg>
                </div>
                <p class="text-center">Bertempat di, <br> Kediaman Mempelai Wanita <br> Dramaga Gang Haji Burhan RT
                    01/RW 03 Kel. Margajaya kec. Bogor Barat</p>

                <button class="btn max-w-screen mx-auto mt-5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                    </svg>
                    Lihat Lokasi
                </button>
            </div>
        </div>
        <div class="card bg-neutral max-w-80 sm:max-w-96 lg:w-96 shadow-xl py-12 rounded-b-[200px]">
            <div class="card-body">
                <h2 class="card-title justify-center text-primary">Resepsi</h2>
                <div class="divider">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-20">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 0 1 2.25-2.25h13.5A2.25 2.25 0 0 1 21 7.5v11.25m-18 0A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75m-18 0v-7.5A2.25 2.25 0 0 1 5.25 9h13.5A2.25 2.25 0 0 1 21 11.25v7.5m-9-6h.008v.008H12v-.008ZM12 15h.008v.008H12V15Zm0 2.25h.008v.008H12v-.008ZM9.75 15h.008v.008H9.75V15Zm0 2.25h.008v.008H9.75v-.008ZM7.5 15h.008v.008H7.5V15Zm0 2.25h.008v.008H7.5v-.008Zm6.75-4.5h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V15Zm0 2.25h.008v.008h-.008v-.008Zm2.25-4.5h.008v.008H16.5v-.008Zm0 2.25h.008v.008H16.5V15Z" />
                    </svg>
                </div>
                <h2 class="card-title justify-center text-primary">Minggu</h2>
                <h2 class="card-title justify-center text-primary text-5xl">| 01 |</h2>
                <h2 class="card-title justify-center text-primary">Desember 2024</h2>
                <h2 class="card-title justify-center text-primary">10:00 WIB - Selesai</h2>

                <div class="divider">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-20">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                    </svg>
                </div>
                <p class="text-center">Bertempat di, <br> Kediaman Mempelai Wanita <br> Dramaga Gang Haji Burhan RT
                    01/RW 03 Kel. Margajaya kec. Bogor Barat</p>
                <button class="btn max-w-screen mx-auto mt-5">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                    </svg>
                    Lihat Lokasi
                </button>
            </div>
        </div>

    </div>
    {{-- End Event Card --}}

    {{-- Gallery --}}
    <div id="gallery" class="container max-w-80 sm:max-w-full mx-auto">
        <div x-data="{ open: false, imageUrl: '' }" class="container lg:w-full md:w-96 sm:w-full mx-auto">
            <h1 class="mb-5 text-5xl text-center">Our Gallery</h1>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-5">
                @for ($i = 0; $i < 8; $i++)
                    <div>
                        <img @click="open = true; imageUrl = '{{ asset('assets/img/' . ($i + 1) . '.jpeg') }}'"
                            class="cursor-pointer h-auto max-w-full rounded-lg"
                            src="{{ asset('assets/img/' . ($i + 1) . '.jpeg') }}" alt="Gallery image" />
                    </div>
                @endfor
            </div>

            <!-- Modal for Zoomed Image -->
            <div x-show="open" x-cloak
                class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-75 p-4 z-50">
                <div @click.away="open = false" class="relative max-w-3xl mx-auto">
                    <button @click="open = false"
                        class="absolute top-2 right-2 text-white text-2xl font-bold">&times;</button>
                    <img :src="imageUrl" class="rounded-lg max-h-[90vh] w-auto">
                </div>
            </div>
        </div>
    </div>
    {{-- End Gallery --}}

    <div class="divider"></div>

    {{-- Gift --}}
    <div x-data="{ open: false }">
        <div id="gift"
            class="container max-w-5xl mx-auto flex flex-col my-12 items-center justify-center space-y-12">
            <h1 class="text-4xl text-center mt-12">Kirim Hadiah</h1>
            <p class="mb-5 text-center">
                Doa Restu Anda merupakan karunia yang sangat berarti bagi kami. Dan jika memberi adalah ungkapan tanda
                kasih Anda, Anda dapat memberi kado secara cashless.
            </p>
            <button @click="open = ! open" class="btn btn-neutral text-white">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M12 3.75v16.5M2.25 12h19.5M6.375 17.25a4.875 4.875 0 0 0 4.875-4.875V12m6.375 5.25a4.875 4.875 0 0 1-4.875-4.875V12m-9 8.25h16.5a1.5 1.5 0 0 0 1.5-1.5V5.25a1.5 1.5 0 0 0-1.5-1.5H3.75a1.5 1.5 0 0 0-1.5 1.5v13.5a1.5 1.5 0 0 0 1.5 1.5Zm12.621-9.44c-1.409 1.41-4.242 1.061-4.242 1.061s-.349-2.833 1.06-4.242a2.25 2.25 0 0 1 3.182 3.182ZM10.773 7.63c1.409 1.409 1.06 4.242 1.06 4.242S9 12.22 7.592 10.811a2.25 2.25 0 1 1 3.182-3.182Z" />
                </svg>

                Kirim Hadiah
            </button>
        </div>
        {{-- End Gift --}}

        {{-- Phone --}}
        <div id="phone" x-show="open" x-transition
            class="container w-full mx-auto my-12 items-center justify-center flex">
            <div class="mockup-phone">
                <div class="camera"></div>
                <div class="display">
                    <div class="artboard artboard-demo phone-1">
                        <div class="w-full">
                            <div class="card bg-white text-primary-content m-2">
                                <div class="card-body">
                                    <div class="flex justify-between">
                                        <h2 class="card-title text-sm">Indi Sodikin</h2>
                                        <img class="w-24" src="{{ asset('assets/img/bca.png') }}" alt="Logo BCA">
                                    </div>
                                    <p class="text-sm">6820723382</p>
                                    <div class="card-actions justify-end">
                                        <button class="btn btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M8.25 7.5V6.108c0-1.135.845-2.098 1.976-2.192.373-.03.748-.057 1.123-.08M15.75 18H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08M15.75 18.75v-1.875a3.375 3.375 0 0 0-3.375-3.375h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5A3.375 3.375 0 0 0 6.375 7.5H5.25m11.9-3.664A2.251 2.251 0 0 0 15 2.25h-1.5a2.251 2.251 0 0 0-2.15 1.586m5.8 0c.065.21.1.433.1.664v.75h-6V4.5c0-.231.035-.454.1-.664M6.75 7.5H4.875c-.621 0-1.125.504-1.125 1.125v12c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V16.5a9 9 0 0 0-9-9Z" />
                                            </svg>
                                            Copy No.Rek
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card bg-white text-primary-content m-2">
                                <div class="card-body">
                                    <div class="flex justify-between">
                                        <h2 class="card-title text-sm">Astri Humairoh</h2>
                                        <img class="w-24" src="{{ asset('assets/img/bca.png') }}" alt="Logo BCA">
                                    </div>
                                    <p class="text-sm">0954059321</p>
                                    <div class="card-actions justify-end">
                                        <button class="btn btn-sm">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M8.25 7.5V6.108c0-1.135.845-2.098 1.976-2.192.373-.03.748-.057 1.123-.08M15.75 18H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08M15.75 18.75v-1.875a3.375 3.375 0 0 0-3.375-3.375h-1.5a1.125 1.125 0 0 1-1.125-1.125v-1.5A3.375 3.375 0 0 0 6.375 7.5H5.25m11.9-3.664A2.251 2.251 0 0 0 15 2.25h-1.5a2.251 2.251 0 0 0-2.15 1.586m5.8 0c.065.21.1.433.1.664v.75h-6V4.5c0-.231.035-.454.1-.664M6.75 7.5H4.875c-.621 0-1.125.504-1.125 1.125v12c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V16.5a9 9 0 0 0-9-9Z" />
                                            </svg>
                                            Copy No.Rek
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End Phone --}}

    {{-- RSVP --}}
    <div id="rsvp"
        class="container max-w-5xl mx-auto flex flex-col my-12 items-center justify-center space-y-12">
        <h1 class="text-4xl text-center mt-12">RSVP</h1>
        <p class="mb-5 text-center">
            Kepada tamu undangan diharapkan untuk mengisi form kehadiran dibawah ini
        </p>

        <div role="alert" class="alert max-w-80 sm:max-w-96 lg:w-96" x-data="{ show: false }" x-show="show"
            x-on:rsvp-created.window="show = true; setTimeout(() => show = false, 3000)" x-transition.duration.500ms>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                class="stroke-info h-6 w-6 shrink-0">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
            <span>Form Berhasil Dikirim.</span>
        </div>

        <div class="card bg-neutral max-w-80 sm:max-w-96 lg:w-96 shadow-xl">
            <livewire:create-rsvp />
        </div>

    </div>
    {{-- End RSVP --}}

    {{-- Comment --}}
    <div id="comment"
        class="container max-w-5xl mx-auto flex flex-col my-12 items-center justify-center space-y-12">
        <h1 class="text-4xl text-center mt-12">Ucapan & Doa</h1>
        <p class="mb-5 text-center">
            Kirimkan ucapan dan doa untuk kedua mempelai
        </p>
        <div class="max-w-80 sm:max-w-96 lg:w-96">
            <livewire:create-comment />
        </div>

        <div class="w-80 sm:w-96 lg:w-96">
            <livewire:show-comment />
        </div>

        <div class="card bg-neutral text-neutral-content max-w-80 sm:max-w-96 lg:w-96">
            <div class="card-body items-center text-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
                </svg>

                <p>“Tidak ada solusi yang lebih sempurna dari pernikahan untuk dua orang yang saling mencintai”.</p>
                <div class="card-actions justify-end">
                    <button class="btn btn-ghost">HR. Ibnu Majah</button>
                </div>
            </div>
        </div>

    </div>
    {{-- End Comment --}}

    {{-- Footer --}}
    <footer class="footer footer-center bg-primary text-primary-content p-10 mb-5">
        <aside>
            <p class="font-bold">
                Merupakan suatu kebahagiaan dan kehormatan bagi kami, apabila Bapak/Ibu/Saudara/i, berkenan hadir dan
                memberikan do’a restu kepada Kami.
            </p>
            <p>Kami Yang Berbahagia <br> Indi & Astri</p>
        </aside>
    </footer>
    {{-- End Footer --}}
</x-layouts.app>
