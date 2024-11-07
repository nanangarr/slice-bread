@extends('layouts.index')

@section('content')
    <div class="flex p-20 ">
        <div class="flex w-[438px] h-[376px] border-2 border-x-mediumgrey border-opacity-50">
            <img src="{{ asset('../../images/RotiAnggur.jpg') }}" alt="" class="object-cover aspect-[1.3]">
        </div>
        <div class="flex flex-col ml-10 w-[656px]">
            <h2 class="text-3xl font-bold">Roti Anggur</h2>
            <p class="text-base font-regular mt-4 pb-4 border-b-2 text-x-mediumgrey">Nikmati perpaduan sempurna roti lembut
                dengan
                isian creamy cheese dan
                manisnya orangeberry segar. Setiap gigitannya menghadirkan rasa yang kaya dan lembut, cocok untuk
                menemani secangkir kopi atau teh. Pas untuk sarapan atau camilan santai. Rasakan sensasi orangeberry
                yang segar dan keju yang lezat dalam satu gigitan!</p>
            <div class="mt-4 sm:items-center sm:gap-4 sm:flex">
                <p class="text-2xl font-extrabold text-gray-900 sm:text-3xl dark:text-white">
                    Rp8.000
                </p>
                <div class="flex items-center gap-2 mt-2 sm:mt-0">
                    <div class="flex items-center gap-1">
                        <svg v-for="star in 5" :key="star" class="w-4 h-4 text-yellow-300" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path
                                d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                        </svg>
                    </div>
                    <p class="text-sm font-medium leading-none text-gray-500 dark:text-gray-400">
                        (5.0)
                    </p>
                </div>
            </div>

            <div class="items-center mt-4">
                <button type="button" id="decrement-button-2" data-input-counter-decrement="counter-input-2"
                    class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                    <svg class="h-2.5 w-2.5 text-gray-900 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h16" />
                    </svg>
                </button>
                <input type="text" id="counter-input-2" data-input-counter
                    class="w-10 shrink-0 border-0 bg-transparent text-center text-sm font-medium text-gray-900 focus:outline-none focus:ring-0 dark:text-white"
                    placeholder="" value="1" required />
                <button type="button" id="increment-button-2" data-input-counter-increment="counter-input-2"
                    class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                    <svg class="h-2.5 w-2.5 text-gray-900 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 1v16M1 9h16" />
                    </svg>
                </button>
            </div>

            <div class="sm:gap-4 sm:items-center sm:flex sm:mt-8">
                <a href="#" title=""
                    class="text-white mt-4 sm:mt-0 bg-orange-500 hover:bg-orange-800 focus:ring-4 focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-orange-600 dark:hover:bg-orange-500 focus:outline-none dark:focus:ring-orange-800 flex items-center justify-center"
                    role="button">
                    <svg class="w-5 h-5 -ms-2 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6" />
                    </svg>
                    Add to cart
                </a>
                <a href="/total" title=""
                    class="flex items-center justify-center py-2.5 px-5 text-sm font-medium text-white focus:outline-none bg-blue-700 rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-orange-500 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-500 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:tblue-700 dark:hover:bg-gray-500"
                    role="button">
                    Beli Sekarang
                </a>
            </div>
        </div>
    </div>
@endsection
