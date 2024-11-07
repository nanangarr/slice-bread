@extends('layouts.index')

@section('content')
<div class="container mx-auto">
    <h2 class="text-center relative text-[30px] font-bold mb-10 ">Bagaimana Cara Order</h2>
    <div id="order" class=" md:min-h-fit min-h-[60vh] flex justify-between items-start mb-4 py-4 px-8">

        <div class="flex items-center px-20 relative ">
            <img src="{{ asset('../../images/nastar.png') }}" alt="Gambar Utama"
                class="w-[280px] h-[360px] object-cover shadow-lg">

            <div class="w-[280px] py[-125px] p-4 flex flex-col gap-4 absolute right-[-80px] transform translate-y-1/4   bottom-0 rounded-lg ">
                <img src="{{ asset('../../images/Sabon.png') }}" alt="Gambar Tumpukan" class="object-cover ">
            </div>
        </div>

        <div class="w-full md:w-1/2">
            <div id="accordion-flush" data-accordion="collapse"
                data-active-classes="bg-white dark:bg-gray-900 text-gray-900 dark:text-white"
                data-inactive-classes="text-gray-500 dark:text-gray-400">
                <h2 id="accordion-flush-heading-1">
                    <button type="button"
                        class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3"
                        data-accordion-target="#accordion-flush-body-1" aria-expanded="true"
                        aria-controls="accordion-flush-body-1">
                        <span>Cara Order Via WhatsApp</span>
                        <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                    <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                        <ul class="list-disc list-inside space-y-2 text-gray-700 dark:text-gray-300">
                            <li>Buka halaman produk dan pilih roti yang ingin dipesan.</li>
                            <li>Setelah memilih produk, klik tombol "Pesan via WhatsApp" yang ada di halaman produk.
                            </li>
                            <li>Kamu akan diarahkan ke aplikasi WhatsApp dengan pesan otomatis berisi detail produk.
                                Cukup
                                kirimkan pesan tersebut kepada kami.</li>
                            <li>Tim kami akan segera mengonfirmasi pesananmu melalui WhatsApp.</li>
                            <li>Setelah pesanan dikonfirmasi, lakukan pembayaran sesuai instruksi yang diberikan.</li>
                        </ul>
                    </div>
                </div>
                <h2 id="accordion-flush-heading-2" class="mt-4">
                    <button type="button"
                        class="flex items-center justify-between w-full py-5 font-medium rtl:text-right text-gray-500 border-b border-gray-200 dark:border-gray-700 dark:text-gray-400 gap-3"
                        data-accordion-target="#accordion-flush-body-2" aria-expanded="false"
                        aria-controls="accordion-flush-body-2">
                        <span>Cara Order Via Website</span>
                        <svg data-accordion-icon class="w-3 h-3 shrink-0" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M9 5 5 1 1 5" />
                        </svg>
                    </button>
                </h2>
                <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                    <div class="py-5 border-b border-gray-200 dark:border-gray-700">
                        <ul class="list-disc list-inside space-y-2 text-gray-700 dark:text-gray-300">
                            <li>Pilih produk di halaman produk Slice Bread.</li>
                            <li>Klik "Tambah ke Keranjang" dan lanjutkan ke checkout.</li>
                            <li>Isi detail pengiriman dan pilih metode pembayaran.</li>
                            <li>Pesananmu akan diproses setelah pembayaran terverifikasi.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection