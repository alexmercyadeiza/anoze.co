<div class="lg:col-span-3 col-span-4">

    <div class="grid border-b border-gray-300">
        <div class="p-8 flex items-center justify-between">
            <p class="tracking-tight text-3xl font-bold uppercase tracking-wider">Record Expenses</p>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
            </svg>
        </div>
    </div>

    <form wire:submit.prevent="save" class="border-b pb-8">

        <div class="p-8">
            <div class="grid grid-cols-1 lg:w-1/2 gap-6">
                <div>
                    <label for="first-name" class="block font-bold font-medium text-gray-700">Date</label>
                    <input type="date" wire:model="date"
                        class="mt-1 focus:ring-gray-500 focus:border-gray-500 block w-full shadow-sm sm:text-sm lg:text-xl @error('date') border-red-600 @enderror border-gray-300" />
                </div>

                <div class="space-y-3">
                    <label class="block font-bold font-medium text-gray-700">Type</label>

                    <div class=" col-start-1 col-end-2">
                        <div class="flex items-center">
                            <select wire:model="type"
                                class="block w-full border border-gray-300 bg-white  shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-gray-500 text-sm md:text-xl">
                                <option value="0" selected>Select Expense</option>
                                <option value="cash">Cash</option>
                                <option value="petrol">Petrol</option>
                                <option value="diesel">Diesel</option>
                                <option value="kerosene">Kerosene</option>
                                <option value="gas">Gas</option>
                            </select>
                            <!--Spinner-->
                            <svg wire:loading wire:target="type" class="ml-3 animate-spin h-5 w-5 text-gray-400"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                    stroke-width="4" />
                                <path class="opacity-75" fill="currentColor"
                                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z" />
                            </svg>
                        </div>
                    </div>
                </div>



                @if ($type === 'cash')
                    <div>
                        <label class="block font-bold font-medium text-gray-700">Amount</label>
                        <input type="text" wire:model.defer="cash" onkeypress="return CheckNumeric()"
                            onkeyup="FormatCurrency(this)"
                            class="mt-1 focus:ring-gray-500 focus:border-gray-500 block w-full shadow-sm sm:text-sm lg:text-3xl @error('cash') border-red-600 @enderror border-gray-300" />
                    </div>
                @endif

                @if ($type === 'gas')
                    <div>
                        <label class="block font-bold font-medium text-gray-700">Kg</label>
                        <input type="text" wire:model.defer="gas" onkeypress="return CheckNumeric()"
                            class="mt-1 focus:ring-gray-500 focus:border-gray-500 block w-full shadow-sm sm:text-sm lg:text-3xl @error('gas') border-red-600 @enderror  border-gray-300" />
                    </div>
                @endif

                @if ($type === 'diesel')
                    <div>
                        <label class="block font-bold font-medium text-gray-700">Ltrs</label>
                        <input type="text" wire:model.defer="diesel" onkeypress="return CheckNumeric()"
                            class="mt-1 focus:ring-gray-500 focus:border-gray-500 block w-full shadow-sm sm:text-sm lg:text-3xl @error('diesel') border-red-600 @enderror  border-gray-300" />
                    </div>
                @endif

                @if ($type === 'petrol')
                    <div>
                        <label class="block font-bold font-medium text-gray-700">Ltrs</label>
                        <input type="text" wire:model.defer="petrol" onkeypress="return CheckNumeric()"
                            class="mt-1 focus:ring-gray-500 focus:border-gray-500 block w-full shadow-sm sm:text-sm lg:text-3xl @error('petrol') border-red-600 @enderror  border-gray-300" />
                    </div>
                @endif

                @if ($type === 'kerosene')
                    <div>
                        <label class="block font-bold font-medium text-gray-700">Ltrs</label>
                        <input type="text" wire:model.defer="kerosene" onkeypress="return CheckNumeric()"
                            class="mt-1 focus:ring-gray-500 focus:border-gray-500 block w-full shadow-sm sm:text-sm lg:text-3xl @error('kerosene') border-red-600 @enderror border-gray-300" />
                    </div>
                @endif
            </div>

        </div>
        <!--Button-->
        <div class="px-8 flex items-center space-x-4">
            <button type="submit"
                class="btn bg-yellow-400 border-none text-black hover:text-white flex items-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span> Record </span>
            </button>

            <span x-data="{ open: false }" x-init="
                        @this.on('notify-saved', () => {
                            if (open === false) setTimeout(() => { open = false }, 2500);
                            open = true;
                        })
                    " x-show.transition.out.duration.1000ms="open" style="display: none;"
                class="text-green-600 text-xl">Saved!</span>
        </div>
    </form>

    <div class="mt-8 ml-8">
        <p class="tracking-tight text-xl mb-3 md:mb-0 font-bold uppercase tracking-wider">Recent Expenses</p>
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
                                    Description
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
                            @foreach ($expenses as $expense)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">

                                            <div class="text-sm font-medium text-gray-900">
                                                {{ Carbon\Carbon::parse($expense->created_at)->toFormattedDateString() }}
                                            </div>

                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-gray-900">{{ $expense->desc }}</div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-gray-900">₦ {{ $expense->amount }}
                                        </div>
                                    </td>
                                    <td>
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5 text-red-600 cursor-pointer hover:text-red-800"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="p-8">
                {{ $expenses->links() }}
            </div>

        </div>

    </div>

</div>
