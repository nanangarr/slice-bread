@extends('layouts.index')

@section('content')
    <div class="container mx-auto px-20 py-8">
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr class="text-sm font-semibold tracking-wide text-left text-black uppercase border-b-2 dark:border-gray-300 bg-[#FFA500] dark:text-white dark:bg-grey-500">
                            <th class="px-6 py-4 w-16">No</th>
                            <th class="px-6 py-4 w-40">Gambar</th>
                            <th class="px-6 py-4">Nama Produk</th>
                            <th class="px-6 py-4">Harga</th>
                            <th class="px-6 py-4">Jumlah</th>
                            <th class="px-6 py-4">Total</th>
                            <th class="px-6 py-4 w-24">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($keranjangItems as $index => $item)
                            <tr class="text-gray-700 dark:text-black">
                                <td class="px-6 py-4 text-center">{{ $loop->iteration }}</td>
                                <td class="px-6 py-4">
                                    <div class="flex justify-center">
                                        <img class="h-32 w-32 object-cover rounded-lg" 
                                        src="{{ asset('images/produk/' . $item['image']) }}" 
                                        alt="Product Image" loading="lazy" />
                                    </div>
                                </td>
                                <td class="px-6 py-4">{{ $item['name'] }}</td>
                                <td class="px-6 py-4">Rp{{ number_format($item['unit_amount'], 0, ',', '.') }}</td>
                                <td class="px-6 py-4">{{ $item['quantity'] }}</td>
                                <td class="px-6 py-4">Rp{{ number_format($item['total_amount'], 0, ',', '.') }}</td>
                                <td class="px-6 py-4">
                                    <div class="flex justify-center">
                                        <form action="{{ route('menu.destroy', $item['id_produk']) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 hover:text-red-700 transition-colors duration-200" aria-label="Delete" onclick="return confirm('Are you sure you want to delete this item?')">
                                                <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <polyline points="3 6 5 6 21 6" />
                                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2" />
                                                    <line x1="10" y1="11" x2="10" y2="17" />
                                                    <line x1="14" y1="11" x2="14" y2="17" />
                                                </svg>
                                            </button>
                                        </form>
                                        
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="flex space-y-6 lg:mt-0 lg:w-full">
            <div class="mt-20 space-y-4 w-[648px] rounded-lg border border-x-mediumgrey bg-white p-4 shadow-sm dark:border-gray-700 dark:bg-gray-800 sm:p-6">
                <p class="text-xl font-bold text-gray-900 dark:text-white">Order Summary</p>

                <div class="space-y-4">
                    <div class="space-y-2">
                        <dl class="flex items-center justify-between gap-4">
                            <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Total Keranjang</dt>
                            <dd class="text-base font-medium text-gray-900 dark:text-white">Rp{{ number_format($subtotal, 0, ',', '.') }}</dd>
                        </dl>

                        <dl class="flex items-center justify-between gap-4">
                            <dt class="text-base font-normal text-gray-500 dark:text-gray-400">Diskon</dt>
                            <dd class="text-base font-medium text-green-600">Rp0</dd>
                        </dl>
                    </div>

                    <dl class="flex items-center justify-between gap-4 border-t border-gray-200 pt-2 dark:border-gray-700">
                        <dt class="text-base font-bold text-gray-900 dark:text-white">Total</dt>
                        <dd class="text-base font-bold text-gray-900 dark:text-white">Rp{{ number_format($subtotal, 0, ',', '.') }}</dd>
                    </dl>
                </div>
                <a href="/isidata"
                    class="flex w-full items-center justify-center rounded-lg bg-blue-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Proceed
                    to Checkout</a>
            </div>
        </div>
    </div>
@endsection
