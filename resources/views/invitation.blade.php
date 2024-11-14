<x-layouts.app>
    {{-- Hero --}}
    <div class="hero min-h-screen bg-cover bg-center" style="background-image: url('{{ asset('assets/img/4.jpeg') }}')">
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
    <div class="container max-w-5xl mx-auto flex flex-col my-12 items-center justify-center space-y-12">
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
        <div class="card bg-neutral max-w-80 sm:max-w-96 lg:w-96 shadow-xl">
            <div class="card-body">
                <label class="form-control w-full max-w-xs">
                    <div class="label">
                        <span class="label-text">Nama</span>
                    </div>
                    <input type="text" placeholder="Nama" class="input input-bordered w-full max-w-xs" />
                </label>
                <label class="form-control w-full max-w-xs">
                    <div class="label">
                        <span class="label-text">Jumlah</span>
                    </div>
                    <input type="text" placeholder="Jumlah" class="input input-bordered w-full max-w-xs" />
                </label>
                <label class="form-control w-full max-w-xs">
                    <div class="label">
                        <span class="label-text">Konfirmasi</span>
                    </div>
                    <select class="select select-bordered">
                        <option>Saya Akan Datang</option>
                        <option>Maaf, saya tidak bisa datang</option>
                    </select>
                </label>
                <button class="btn w-full mt-4">Kirim</button>
            </div>
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
        <div class="max-w-80 sm:max-w-96 lg:w-96 mx-auto">
            <label class="form-control w-full">
                <div class="label">
                    <span class="label-text">Nama</span>
                </div>
                <input type="text" placeholder="Nama" class="input input-bordered w-full" />
            </label>
            <label class="form-control w-full">
                <div class="label">
                    <span class="label-text">Ucapan</span>
                </div>
                <input type="text" placeholder="Ucapan" class="input input-bordered w-full" />
            </label>
            <label class="form-control w-full">
                <div class="label">
                    <span class="label-text">Konfirmasi</span>
                </div>
                <select class="select select-bordered">
                    <option>Hadir</option>
                    <option>Tidak Hadir</option>
                </select>
            </label>
            <button class="btn w-full mt-4">Kirim</button>
        </div>

        <div class="max-w-80 sm:max-w-96 lg:w-96 mx-auto">
            <div class="chat chat-start">
                <div class="chat-header">
                    Miftah Fadilah
                    <time class="text-xs opacity-50">2 hours ago</time>
                </div>
                <div class="chat-bubble">Test 1</div>
                <div class="chat-footer opacity-50">Seen</div>
            </div>
            <div class="chat chat-start">
                <div class="chat-header">
                    Karung
                    <time class="text-xs opacity-50">2 hour ago</time>
                </div>
                <div class="chat-bubble">Test 2</div>
                <div class="chat-footer opacity-50">Delivered</div>
            </div>
        </div>

        <div class="card bg-neutral text-neutral-content w-96">
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
    <footer class="footer footer-center bg-primary text-primary-content p-10">
        <aside>
            <p class="font-bold">
                ACME Industries Ltd.
                <br />
                Providing reliable tech since 1992
            </p>
            <p>Copyright © {new Date().getFullYear()} - All right reserved</p>
        </aside>
        <nav>
            <div class="grid grid-flow-col gap-4">
                <a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                            d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z">
                        </path>
                    </svg>
                </a>
                <a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                            d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z">
                        </path>
                    </svg>
                </a>
                <a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        class="fill-current">
                        <path
                            d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z">
                        </path>
                    </svg>
                </a>
            </div>
        </nav>
    </footer>
    {{-- End Footer --}}
</x-layouts.app>
