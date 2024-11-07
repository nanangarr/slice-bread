@extends('layouts.index')

@section('content')
    <div
        class="grid md:grid-cols-2 gap-16 items-center relative overflow-hidden p-8 shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] rounded-3xl max-w-6xl mx-auto bg-white mt-4 font-[sans-serif] before:absolute before:right-0 before:w-[300px]  before:h-full max-md:before:hidden">
        <div>
            <h2 class="text-gray-800 text-3xl font-extrabold">Informasi Kontak</h2>
            <p class="text-sm text-gray-500 mt-4 leading-relaxed">Punya pertanyaan spesifik? Tim kami yang berpengalaman siap berinteraksi dengan Anda.</p>

            <form>
                <div class="space-y-4 mt-8">
                    <input type="text" placeholder="Nama Lengkap"
                        class="px-2 py-3 bg-white w-full text-gray-800 text-sm border-b border-gray-300 focus:border-blue-600 outline-none" />
                    <div class="grid grid-cols-2 gap-6">
                        <input type="text" placeholder="Kab/Kota"
                            class="px-2 py-3 bg-white w-full text-gray-800 text-sm border-b border-gray-300 focus:border-blue-600 outline-none" />

                        <input type="text" placeholder="Kode Pos"
                            class="px-2 py-3 bg-white w-full text-gray-800 text-sm border-b border-gray-300 focus:border-blue-600 outline-none" />
                    </div>
                    <input type="number" placeholder="Nomor Hp"
                        class="px-2 py-3 bg-white w-full text-gray-800 text-sm border-b border-gray-300 focus:border-blue-600 outline-none" />

                    <input type="email" placeholder="Email"
                        class="px-2 py-3 bg-white w-full text-gray-800 text-sm border-b border-gray-300 focus:border-blue-600 outline-none" />

                    <textarea placeholder="Pesan Khusus"
                        class="px-2 pt-3 bg-white w-full text-gray-800 text-sm border-b border-gray-300 focus:border-blue-600 outline-none"></textarea>
                </div>

                <button type="button"
                    class="mt-8 flex items-center justify-center text-sm w-full rounded-md px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" fill='#fff' class="mr-2"
                        viewBox="0 0 548.244 548.244">
                        <path fill-rule="evenodd"
                            d="M392.19 156.054 211.268 281.667 22.032 218.58C8.823 214.168-.076 201.775 0 187.852c.077-13.923 9.078-26.24 22.338-30.498L506.15 1.549c11.5-3.697 24.123-.663 32.666 7.88 8.542 8.543 11.577 21.165 7.879 32.666L390.89 525.906c-4.258 13.26-16.575 22.261-30.498 22.338-13.923.076-26.316-8.823-30.728-22.032l-63.393-190.153z"
                            clip-rule="evenodd" data-original="#000000" />
                    </svg>
                    Kirim Pertanyaan
                </button>
            </form>
        </div>
        <div class="p-10 relative h-full max-md:min-h-[350px]">
            <iframe src="https://maps.app.goo.gl/6gw5gKPH2irBRNmS6"
                class="left-0 top-0 h-full w-full rounded-lg lg:rounded-tr-none lg:rounded-bl-lg" frameborder="0"
                allowfullscreen></iframe>
        </div>
    </div>
@endsection
