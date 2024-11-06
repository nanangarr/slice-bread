@extends('layouts.index')

@section('content')
<div class="px-[40px] ">
    <div
        class="bg-[#C08D55] p-8 my-2 mt-5 relative rounded-tl-[60px] rounded-tr-[60px] rounded-br-[200px] rounded-bl-[20px] overflow-hidden py-8 h-[428px]  w-full flex justify-between">
        <div class="flex flex-col md:flex-row items-center justify-center  w-full">
            <div class="flex items-center z-10 px-4 py-8">
                <div class="text-center md:text-left md:max-w-md">
                    <p class="italic text-sm text-black mb-2">Kue Siap Santap ---</p>
                    <h1 class="text-4xl font-bold mb-2 text-black">Roti yang siap menemani Di setiap acaramuu..</h1>
                    <p class="mb-4 text-black">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Varius sed
                        pharetra
                        dictum neque massa congue.</p>
                    <div class="flex gap-4">
                        <button
                            class="border-2 border-[#FF9F0D] text-black hover:bg-[#FF9F0D] hover:text-white px-6 py-2 rounded transition duration-300">Lihat
                            Detail</button>
                        <button
                            class="border-2 border-[#FF9F0D] text-black hover:bg-[#FF9F0D] hover:text-white px-6 py-2 rounded transition duration-300">Berbelanja</button>
                    </div>
                </div>
            </div>
            <div class="mt-6 md:mt-0 md:ml-6">
                <img src="@/assets/images/misc/Gambar.png" class="aspect-[1.2] mt-5 object-contain" />
            </div>
        </div>
    </div>
</div>

<div id="layanan" class="p-20 my-2">
    <div class="flex flex-col gap-6 md:flex-row justify-between items-start text-center">
        <div class="w-full md:w-1/3 mb-8 md:mb-0">
            <div class="flex justify-center mb-2">
                <svg width="75" height="75" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                        stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
            <h3 class="text-xl font-semibold mb-1">Menu</h3>
            <p class="text-sm text-gray-600 ju">
                Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
                blind texts.
            </p>
        </div>
        <div class="w-full md:w-1/3 mb-8 md:mb-0 ">
            <div class="flex justify-center mb-2">
                <svg width="75" height="75" viewBox="0 0 24 24" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M11.2691 4.41115C11.5006 3.89177 11.6164 3.63208 11.7776 3.55211C11.9176 3.48263 12.082 3.48263 12.222 3.55211C12.3832 3.63208 12.499 3.89177 12.7305 4.41115L14.5745 8.54808C14.643 8.70162 14.6772 8.77839 14.7302 8.83718C14.777 8.8892 14.8343 8.93081 14.8982 8.95929C14.9705 8.99149 15.0541 9.00031 15.2213 9.01795L19.7256 9.49336C20.2911 9.55304 20.5738 9.58288 20.6997 9.71147C20.809 9.82316 20.8598 9.97956 20.837 10.1342C20.8108 10.3122 20.5996 10.5025 20.1772 10.8832L16.8125 13.9154C16.6877 14.0279 16.6252 14.0842 16.5857 14.1527C16.5507 14.2134 16.5288 14.2807 16.5215 14.3503C16.5132 14.429 16.5306 14.5112 16.5655 14.6757L17.5053 19.1064C17.6233 19.6627 17.6823 19.9408 17.5989 20.1002C17.5264 20.2388 17.3934 20.3354 17.2393 20.3615C17.0619 20.3915 16.8156 20.2495 16.323 19.9654L12.3995 17.7024C12.2539 17.6184 12.1811 17.5765 12.1037 17.56C12.0352 17.5455 11.9644 17.5455 11.8959 17.56C11.8185 17.5765 11.7457 17.6184 11.6001 17.7024L7.67662 19.9654C7.18404 20.2495 6.93775 20.3915 6.76034 20.3615C6.60623 20.3354 6.47319 20.2388 6.40075 20.1002C6.31736 19.9408 6.37635 19.6627 6.49434 19.1064L7.4341 14.6757C7.46898 14.5112 7.48642 14.429 7.47814 14.3503C7.47081 14.2807 7.44894 14.2134 7.41394 14.1527C7.37439 14.0842 7.31195 14.0279 7.18708 13.9154L3.82246 10.8832C3.40005 10.5025 3.18884 10.3122 3.16258 10.1342C3.13978 9.97956 3.19059 9.82316 3.29993 9.71147C3.42581 9.58288 3.70856 9.55304 4.27406 9.49336L8.77835 9.01795C8.94553 9.00031 9.02911 8.99149 9.10139 8.95929C9.16534 8.93081 9.2226 8.8892 9.26946 8.83718C9.32241 8.77839 9.35663 8.70162 9.42508 8.54808L11.2691 4.41115Z"
                        stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
            <h3 class="text-xl font-semibold mb-1">Rating</h3>
            <p class="text-sm text-gray-600">
                Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
                blind texts.
            </p>
        </div>
        <div class="w-full md:w-1/3">
            <div class="flex justify-center mb-2">
                <svg fill="#000000" width="65" height="75" viewBox="0 0 32 32" version="1.1"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M15.992 2c3.396 0 6.998 2.86 6.998 4.995v4.997c0 1.924-0.8 5.604-2.945 7.293-0.547 0.43-0.831 1.115-0.749 1.807 0.082 0.692 0.518 1.291 1.151 1.582l8.703 4.127c0.068 0.031 0.834 0.16 0.834 1.23l0.001 1.952-27.984 0.002v-2.029c0-0.795 0.596-1.045 0.835-1.154l8.782-4.145c0.63-0.289 1.065-0.885 1.149-1.573s-0.193-1.37-0.733-1.803c-2.078-1.668-3.046-5.335-3.046-7.287v-4.997c0.001-2.089 3.638-4.995 7.004-4.995zM15.992-0c-4.416 0-9.004 3.686-9.004 6.996v4.997c0 2.184 0.997 6.601 3.793 8.847l-8.783 4.145s-1.998 0.89-1.998 1.999v3.001c0 1.105 0.895 1.999 1.998 1.999h27.986c1.105 0 1.999-0.895 1.999-1.999v-3.001c0-1.175-1.999-1.999-1.999-1.999l-8.703-4.127c2.77-2.18 3.708-6.464 3.708-8.865v-4.997c0-3.31-4.582-6.995-8.998-6.995v0z">
                    </path>
                </svg>
            </div>
            <h3 class="text-xl font-semibold mb-1">Pengguna</h3>
            <p class="text-sm text-gray-600">
                Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
                blind texts.
            </p>
        </div>
    </div>
</div>

<div class="p-20">
    <div id="MenuFavorit" class="bg-white md:min-h-fit min-h-[60vh] flex items-center justify-center mb-4 py-4">
        <h1 class="text-center relative">
            <span class="font-bold text-[#faa005] text-[30px]">M<span
                    class="font-bold text-[#000000] text-[30px]">enu</span></span>
            <span class="font-bold text-[#faa005] text-[30px] underline">F<span
                    class="font-bold text-[#000000] text-[30px]">avorit</span></span>
        </h1>
    </div>
    <div class="flex justify-start -mx-4">
        <div class="w-full sm:w-1/2 md:w-1/5 px-4 mb-8">
            <div class="bg-white rounded-lg shadow-md overflow-hidden max-w-xs mx-auto">
                <div class="p-4">
                    <div class="w-28 h-28 bg-[#794400] rounded-full mx-auto mb-4 flex items-center justify-center">
                        <img src="@/assets/images/misc/abon.png" alt="Donat" class="w-16 h-16 object-cover rounded-">
                    </div>
                    <h3 class="text-xl font-semibold text-center mb-2">Roti Abon</h3>
                    <p class="text-gray-600 text-center">(86 dishes)</p>
                </div>
            </div>
        </div>

        <div class="w-full sm:w-1/2 md:w-1/5 px-4 mb-8">
            <div class="bg-white rounded-lg shadow-md overflow-hidden max-w-xs mx-auto">
                <div class="p-4">
                    <div class="w-28 h-28 bg-[#794400] rounded-full mx-auto mb-4 flex items-center justify-center">
                        <img src="@/assets/images/misc/vanila.png" alt="Donat" class="w-16 h-16 object-cover">
                    </div>
                    <h3 class="text-xl font-semibold text-center mb-2">Roti Vanila</h3>
                    <p class="text-gray-600 text-center">(86 dishes)</p>
                </div>
            </div>
        </div>

        <div class="w-full sm:w-1/2 md:w-1/5 px-4 mb-8">
            <div class="bg-white rounded-lg shadow-md overflow-hidden max-w-xs mx-auto">
                <div class="p-4">
                    <div class="w-28 h-28 bg-[#794400] rounded-full mx-auto mb-4 flex items-center justify-center">
                        <img src="@/assets/images/misc/anggur.png" alt="Donat" class="w-16 h-16 object-cover">
                    </div>
                    <h3 class="text-xl font-semibold text-center mb-2">Roti Anggur</h3>
                    <p class="text-gray-600 text-center">(86 dishes)</p>
                </div>
            </div>
        </div>

        <div class="w-full sm:w-1/2 md:w-1/5 px-4 mb-8">
            <div class="bg-white rounded-lg shadow-md overflow-hidden max-w-xs mx-auto">
                <div class="p-4">
                    <div class="w-28 h-28 bg-[#794400] rounded-full mx-auto mb-4 flex items-center justify-center">
                        <img src="@/assets/images/misc/anggur.png" alt="Donat" class="w-16 h-16 object-cover">
                    </div>
                    <h3 class="text-xl font-semibold text-center mb-2">Roti Anggur</h3>
                    <p class="text-gray-600 text-center">(86 dishes)</p>
                </div>
            </div>
        </div>

        <div class="w-full sm:w-1/2 md:w-1/5 px-4 mb-8">
            <div class="bg-white rounded-lg shadow-md overflow-hidden max-w-xs mx-auto">
                <div class="p-4">
                    <div class="w-28 h-28 bg-[#794400] rounded-full mx-auto mb-4 flex items-center justify-center">
                        <img src="@/assets/images/misc/anggur.png" alt="Donat" class="w-16 h-16 object-cover">
                    </div>
                    <h3 class="text-xl font-semibold text-center mb-2">Roti Anggur</h3>
                    <p class="text-gray-600 text-center">(86 dishes)</p>
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-end mb-6 py-6">
        <a href="" class="underline text-[#faa005]">
            Telusuri Lebih Banyak...
        </a>
    </div>
</div>

<div class="container mx-auto">
    <h2 class="text-center relative text-[30px] font-bold mb-10 ">Bagaimana Cara Order</h2>
    <div id="order" class=" md:min-h-fit min-h-[60vh] flex justify-between items-start mb-4 py-4 px-8">

        <div class="flex items-center px-20 relative">
            <img src="@/assets/images/misc/RotiTawar.jpg" alt="Gambar Utama"
                class="w-[300px] h-[300px] object-cover shadow-lg">

            <div class="w-[280px] py[-125px] p-4 flex flex-col gap-4 absolute right-[-80px] bottom-0 rounded-lg ">
                <img src="@/assets/images/misc/RotiTawar.jpg" alt="Gambar Tumpukan" class="object-cover ">
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

<script>
import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite'

onMounted(() => {
  initFlowbite();
})
</script>
