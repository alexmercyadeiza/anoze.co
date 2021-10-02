<div class="lg:col-span-3 col-span-4">

    <div class="grid border-b border-gray-300">
        <div class="p-8 flex items-center justify-between">
            <p class="tracking-tight text-3xl font-bold uppercase tracking-wider">Sales</p>

            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
            </svg>
        </div>
    </div>

    <div class="p-8">
        <a href="/record/sales">
            <button class="btn bg-yellow-400 border-none text-black hover:text-white flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mb-1" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                </svg>
                <span>Record Sales </span>
            </button>
        </a>
    </div>

    <!--Recent Payments-->
    <div class="mt-8 ml-8">
        <p class="tracking-tight text-xl mb-6 md:mb-0 font-bold uppercase tracking-wider">Recent Sales Records</p>
    </div>



    <div class="md:p-6 lg:p-6">
        <div class=" overflow-x-auto sm:-mx-6">

            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200 border">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Date
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Sales
                                </th>

                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">

                            @foreach ($sales as $sale)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="h-10 w-10 text-yellow-600" fill="none" viewBox="0 0 24 24"
                                                    stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                                </svg>
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{ Carbon\Carbon::parse($sale->created_at)->toFormattedDateString() }}
                                                </div>

                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 colspan-3 whitespace-nowrap">
                                        <div class="md:grid md:grid-cols-3 md:gap-3 flex space-x-6">
                                            <div>Petrol</div>
                                            <div>{{ $sale->petrol_ltr }} (Ltrs)</div>
                                            <div>₦ {{ number_format($sale->petrol, 2) }}</div>
                                        </div>

                                        <div class="md:grid md:grid-cols-3 md:gap-3 flex space-x-6">
                                            <div>Kero</div>
                                            <div>{{ $sale->kerosene_ltr }} (Ltrs)</div>
                                            <div>₦ {{ number_format($sale->kerosene, 2) }}</div>
                                        </div>

                                        <div class="md:grid md:grid-cols-3 md:gap-3 flex space-x-6">
                                            <div>Gas</div>
                                            <div>{{ $sale->gas_kg }} (Kg)</div>
                                            <div>₦ {{ number_format($sale->gas, 2) }}</div>
                                        </div>

                                        <div class="md:grid md:grid-cols-3 md:gap-3 flex space-x-6">
                                            <div>Diesel</div>
                                            <div>{{ $sale->diesel_ltr }} (Ltrs)</div>
                                            <div>₦ {{ number_format($sale->diesel, 2) }}</div>
                                        </div>

                                        <!-- More Items -->

                                        <!-- Total Amount -->
                                        <div class="md:grid md:grid-cols-3 md:gap-3 flex space-x-6 mt-3">
                                            <div class="font-bold uppercase col-span-2">
                                                Total
                                            </div>
                                            <div class="font-bold">₦ {{ number_format($sale->total, 2) }}</div>
                                        </div>
                                    </td>
                                </tr>

                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

        </div>

    </div>

    <div class="p-8">
        {{ $sales->links() }}
    </div>

</div>
