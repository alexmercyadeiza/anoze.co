<div class="lg:col-span-3 col-span-4">
    <div class="grid border-b border-gray-300">
        <div class="p-8 flex items-center justify-between">
            <p class="tracking-tight text-3xl font-bold uppercase tracking-wider">Payments</p>

            <a href="/director/logout">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
            </a>
        </div>
    </div>

    @if (!$sales_id)

        <!--Recent Payments-->
        <div class="mt-8 ml-8 space-y-4">
            <p class="tracking-tight text-sm mb-3 md:mb-0 font-bold uppercase tracking-wider">Select Station
            </p>

            <!-- Select Corp & Create Investment Button -->
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <div class="col-start-1 col-end-2">
                    <div class="flex items-center">
                        <select id="country" wire:model="fid"
                            class="block w-full border border-yellow-300 bg-white -sm focus:outline-none focus:ring-yellow-500 focus:border-yellow-500 text-sm md:text-l">
                            <option selected>Select Station</option>
                            @foreach ($stations as $station)
                                <option value="{{ $station->id }}">{{ $station->branch }}</option>
                            @endforeach
                        </select>
                        <div wire:loading wire:target="stations" class="ml-3 animate-spin h-5 w-5 text-gray-400"></div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!--Table-->
    @if ($sales_id)

        @foreach ($sales as $sale)
            <div class="md:p-6 lg:p-6">
                <div class=" overflow-x-auto sm:-mx-6">
                    <div class="align-middle inline-block min-w-full sm:px-6 lg:px-8 space-x-2">
                        <div>
                            <button wire:click="setFid({{ $sale->fid }})"
                                class="btn bg-yellow-400 text-black hover:bg-black-400 hover:text-white border-none">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    class="inline-block w-4 h-4 stroke-current transform rotate-180 mr-2">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7">
                                    </path>
                                </svg>
                                Back
                            </button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="border-t md:p-6 lg:p-6">
                <div class=" overflow-x-auto sm:-mx-6">
                    <div
                        class="py-2 flex items-center justify-between align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="font-bold text-xl">
                            {{ Carbon\Carbon::parse($sale->created_at)->toFormattedDateString() }}</div>

                        <div>
                            <a href="../storage/tellers/{{ $teller }}"
                                class="btn bg-black text-white hover:bg-yellow-400 hover:text-black border-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                    <path fill-rule="evenodd"
                                        d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                View Teller
                            </a>
                        </div>

                    </div>
                </div>
            </div>


            <div class="border md:p-6 lg:p-6">
                <div class=" overflow-x-auto sm:-mx-6">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8 space-y-6">

                        <div class="font-bold uppercase">
                            Sales
                        </div>

                        <div class="border">

                            <div class="flex flex-col">
                                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                        <div class="overflow-hidden">
                                            <table class="min-w-full divide-y divide-gray-200">
                                                <thead class="bg-gray-50">
                                                    <tr>
                                                        <th scope="col"
                                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                            Type
                                                        </th>

                                                        <th scope="col"
                                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                            Quantity
                                                        </th>

                                                        <th scope="col"
                                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                            Amount
                                                        </th>

                                                    </tr>
                                                </thead>
                                                <tbody class="bg-white divide-y divide-gray-200">
                                                    <tr>

                                                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                                                            Petrol
                                                        </td>

                                                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                                                            {{ $sale->petrol_ltr }}
                                                        </td>

                                                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                                                            ₦ {{ number_format($sale->petrol, 2) }}
                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                                                            Diesel
                                                        </td>

                                                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                                                            {{ $sale->diesel_ltr }}
                                                        </td>

                                                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                                                            ₦ {{ number_format($sale->diesel, 2) }}
                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                                                            Gas
                                                        </td>

                                                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                                                            {{ $sale->gas_kg }}
                                                        </td>

                                                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                                                            ₦ {{ number_format($sale->gas, 2) }}
                                                        </td>

                                                    </tr>

                                                    <tr>

                                                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                                                            Kerosene
                                                        </td>

                                                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                                                            {{ $sale->kerosene_ltr }}
                                                        </td>

                                                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                                                            ₦ {{ number_format($sale->kerosene, 2) }}
                                                        </td>


                                                    </tr>

                                                    <tr class="bg-black text-white">

                                                        <td class="px-6 py-4 whitespace-nowrap font-bold">
                                                            Total
                                                        </td>

                                                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                                                        </td>

                                                        <td class="px-6 py-4 whitespace-nowrap font-bold">
                                                            ₦ {{ number_format($sale->total, 2) }}
                                                        </td>

                                                    </tr>


                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach

        <!--Expenses-->
        <div class="md:p-6 lg:p-6">
            <div class=" overflow-x-auto sm:-mx-6">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8 space-y-5">

                    <div class="font-bold uppercase">
                        Expenses
                    </div>

                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="overflow-hidden">
                                    <table class="min-w-full divide-y border divide-gray-200">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Date
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Description
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Amount
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            @foreach ($expenses as $expense)
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                                        {{ Carbon\Carbon::parse($expense->created_at)->toFormattedDateString() }}
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                                        {{ $expense->desc }}
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                                                        ₦ {{ number_format($expense->amount, 2) }}
                                                    </td>
                                                </tr>
                                            @endforeach
                                            <tr class="bg-black font-bold text-white">
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    Total
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">

                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    ₦ {{ number_format($sum_expenses, 2) }}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="font-bold uppercase space-y-2 py-10">
                        <div>
                            Grand Total
                        </div>

                        <div class="text-2xl">
                            ₦ {{ number_format($total, 2) }}
                        </div>

                    </div>
                </div>
            </div>
        </div>

    @endif

    @if ($fid)
        @foreach ($payments as $payment)
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
                                            Amount
                                        </th>

                                        <th scope="col"
                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        </th>
                                    </tr>

                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center">

                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-500"
                                                    viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M3 3a1 1 0 011-1h12a1 1 0 011 1v3a1 1 0 01-.293.707L12 11.414V15a1 1 0 01-.293.707l-2 2A1 1 0 018 17v-5.586L3.293 6.707A1 1 0 013 6V3z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ Carbon\Carbon::parse($payment->created_at)->toFormattedDateString() }}
                                                    </div>

                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-gray-900">₦ 1000.00</div>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <button wire:click="details({{ $payment->id }})"
                                                class="btn btn-xs btn-neutral">
                                                View Details
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    class="inline-block w-4 h-4 ml-1 stroke-current">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M9 5l7 7-7 7"></path>
                                                </svg>
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif

    <!--End Recent Payments-->
</div>
