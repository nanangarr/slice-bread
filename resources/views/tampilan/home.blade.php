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
                <img src="{{ asset('../../images/Gambar.png') }}" class="aspect-[1.2] mt-5 object-contain" />
            </div>
        </div>
    </div>
</div>

<div id="layanan" class="p-20 my-2">
    <div class="flex flex-col gap-6 md:flex-row justify-between items-start text-center">
        <div class="w-full md:w-1/3 mb-8 md:mb-0">
            <div class="flex justify-center mb-2">
                <img src="{{ asset('../../images/Bill.png') }}" />
            </div>
            <h3 class="text-xl font-semibold mb-1">Menu</h3>
            <p class="text-sm text-gray-600 ju">
                Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
                blind texts.
            </p>
        </div>
        <div class="w-full md:w-1/3 mb-8 md:mb-0 ">
            <div class="flex justify-center mb-2">
                <img src="{{ asset('../../images/Star.png') }}" />
            </div>
            <h3 class="text-xl font-semibold mb-1">Rating</h3>
            <p class="text-sm text-gray-600">
                Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the
                blind texts.
            </p>
        </div>
        <div class="w-full md:w-1/3">
            <div class="flex justify-center mb-2">
                <img src="{{ asset('../../images/LUser.png') }}" />
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
                        <img src="{{ asset('../../images/Abon.png') }}" alt="Donat" class="w-16 h-16 object-cover rounded-">
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
                        <img src="{{ asset('../../images/vanila.png') }}" alt="Donat" class="w-16 h-16 object-cover">
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
                        <img src="{{ asset('../../images/anggur.png') }}" alt="Donat" class="w-16 h-16 object-cover">
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
                        <img src="{{ asset('../../images/abon.png') }}" alt="Donat" class="w-16 h-16 object-cover">
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
                        <img src="{{ asset('../../images/vanila.png') }}" alt="Donat" class="w-16 h-16 object-cover">
                    </div>
                    <h3 class="text-xl font-semibold text-center mb-2">Roti Anggur</h3>
                    <p class="text-gray-600 text-center">(86 dishes)</p>
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-end mb-6 py-6">
        <a href="/menu" class="underline text-[#faa005]">
            Telusuri Lebih Banyak...
        </a>
    </div>
</div>

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

<script>
import { onMounted } from 'vue'
import { initFlowbite } from 'flowbite'

onMounted(() => {
  initFlowbite();
})
</script>
