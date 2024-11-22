@extends('layouts.index')

@section('content')
    <div class="flex px-20 py-6 ">
        <div class="flex w-[438px] h-[376px] border-2 border-x-mediumgrey border-opacity-50">
            <img src="/images//produk/{{ $produk->image }}" alt="{{ $produk->name }}" class="object-cover aspect-[1.3]">
        </div>
        <div class="flex flex-col ml-10 w-[656px]">
            <h2 class="text-3xl font-bold">{{ $produk->name }}</h2>
            <p class="text-base font-regular mt-4 pb-4 border-b-2 text-x-mediumgrey">{{ $produk->description }}</p>
            <div class="mt-4 sm:items-center sm:gap-4 sm:flex">
                <p class="text-2xl font-extrabold text-gray-900 sm:text-3xl dark:text-white">
                    {{ number_format($produk->price, 0) }}
                </p>
            </div>

            <!-- Menampilkan pesan error jika ada -->
            @if ($errors->any())
                <div class="bg-red-500 text-white p-3 rounded-md mb-4">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('keranjang.store') }}" method="POST">
                @csrf
                <input type="hidden" name="id_produk" value="{{ $produk->id_produk}}">
                <div class="items-center mt-4">
                    <button type="button" id="decrease" 
                        class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                        <svg class="h-2.5 w-2.5 text-gray-900 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 1h16" />
                        </svg>
                    </button>
                    <input type="number"
                        class="w-10 shrink-0 border-0 bg-transparent text-center text-sm font-medium text-gray-900 focus:outline-none focus:ring-0 dark:text-white"
                        name="quantity" id="quantity" value="1" required min="1"/>
                    <button type="button" id="increase" 
                        class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700">
                        <svg class="h-2.5 w-2.5 text-gray-900 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 1v16M1 9h16" />
                        </svg>
                    </button>
                </div>

                <div class="sm:gap-4 sm:items-center sm:flex sm:mt-8">
                    <button type="submit"
                        class="text-white mt-4 sm:mt-0 bg-orange-500 hover:bg-orange-800 focus:ring-4 focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-orange-600 dark:hover:bg-orange-500 focus:outline-none dark:focus:ring-orange-800 flex items-center justify-center">
                        <svg class="w-5 h-5 -ms-2 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6" />
                        </svg>
                        Add to cart
                    </button>                
            </form>
                <a href="/total" title=""
                    class="flex items-center justify-center py-2.5 px-5 text-sm font-medium text-white focus:outline-none bg-blue-700 rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-orange-500 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-500 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:tblue-700 dark:hover:bg-gray-500"
                    role="button">
                    Beli Sekarang
                </a>
            </div>
        </div>
    </div>

    <style>
        input[type="number"]::-webkit-outer-spin-button,
        input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        input[type="number"] {
            -moz-appearance: textfield;
        }
    </style>

    <script>
        let currentQuantity = 1; 

        const quantityInput = document.getElementById("quantity");
        quantityInput.value = currentQuantity;

        const increaseButton = document.getElementById("increase");
        const decreaseButton = document.getElementById("decrease");

        increaseButton.addEventListener("click", function() {
            currentQuantity += 1;
            quantityInput.value = currentQuantity;
        });

        decreaseButton.addEventListener("click", function() {
            if (currentQuantity > 1) {
                currentQuantity -= 1;
                quantityInput.value = currentQuantity;
            }
        });
    </script>
@endsection
