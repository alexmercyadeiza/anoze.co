<div class="lg:col-span-3 col-span-4">
    <div class="grid border-b border-gray-300">
        <div class="p-8 flex items-center justify-between">
            <p class="tracking-tight text-3xl font-bold uppercase tracking-wider">Prices</p>

            <a href="/director/logout">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
            </a>
        </div>
    </div>

    <!--After border-->
    <div class="border-b border-gray-300">

        <!--Prices-->
        <div class="grid grid-cols-4">
            @foreach ($prices as $price)


                <div class="p-3 border-r grid col-span-1 place">
                    <div class="grid grid-cols-1 place-items-center">
                        <p class="text-gray-600 text-sm tracking-tight">Kero</p>
                        <div class="md:flex lg:flex items-center text-gray-600 text-2xl tracking-tight">
                            <span class="font-bold">{{ $price->kerosene }}</span>

                        </div>
                    </div>
                </div>

                <div class="p-3 border-r grid col-span-1 place">
                    <div class="grid grid-cols-1 place-items-center">
                        <p class=" text-gray-600 text-sm tracking-tight">Diesel</p>
                        <div class="md:flex lg:flex items-center text-gray-600 text-2xl tracking-tight">
                            <span class="font-bold">{{ $price->diesel }}</span>

                        </div>
                    </div>
                </div>

                <div class="p-3 border-r grid col-span-1 place">
                    <div class="grid grid-cols-1 place-items-center">
                        <p class="text-gray-600 text-sm tracking-tight">Petrol</p>
                        <div class="md:flex lg:flex items-center text-gray-600 text-2xl tracking-tight">
                            <span class="font-bold">{{ $price->petrol }}</span>

                        </div>
                    </div>
                </div>

                <div class="p-3 border-r grid col-span-1 place">
                    <div class="grid grid-cols-1 place-items-center">
                        <p class=" text-gray-600 text-sm tracking-tight">Gas</p>
                        <div class="md:flex lg:flex items-center text-gray-600 text-2xl tracking-tight">
                            <span class="font-bold">{{ $price->gas }}</span>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!--End Prices-->

    <!--Recent Payments-->
    <div class="mt-8 ml-8">
        <p class="tracking-tight text-xl mb-3 md:mb-0 font-bold uppercase tracking-wider">Update Prices
        </p>
    </div>

    <form wire:submit.prevent="updatePrices">
        <div class="md:p-6 lg:p-6">
            <div class=" overflow-x-auto sm:-mx-6">

                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="grid grid-cols-4">
                        @foreach ($prices as $price)
                            <div class="space-y-2">
                                <label class="text-sm">Kerosene</label>
                                <input type="text" wire:model.defer="kerosene"
                                    class="mt-1 focus:ring-gray-500 focus:border-gray-500 block w-full shadow-sm sm:text-sm lg:text-xl @error('petrol') border-red-500 @enderror border-gray-300"
                                    placeholder="{{ $price->kerosene }}" />
                            </div>

                            <div class="space-y-2">
                                <label class="text-sm">Diesel</label>
                                <input type="text" wire:model.defer="diesel"
                                    class="mt-1 focus:ring-gray-500 focus:border-gray-500 block w-full shadow-sm sm:text-sm lg:text-xl @error('petrol') border-red-500 @enderror border-gray-300"
                                    placeholder="{{ $price->diesel }}" />
                            </div>

                            <div class="space-y-2">
                                <label class="text-sm">Petrol</label>
                                <input type="text" wire:model.defer="petrol"
                                    class="mt-1 focus:ring-gray-500 focus:border-gray-500 block w-full shadow-sm sm:text-sm lg:text-xl @error('petrol') border-red-500 @enderror border-gray-300"
                                    placeholder="{{ $price->petrol }}" />
                            </div>

                            <div class="space-y-2">
                                <label class="text-sm">Gas</label>
                                <input type="text" wire:model.defer="gas"
                                    class="mt-1 focus:ring-gray-500 focus:border-gray-500 block w-full shadow-sm sm:text-sm lg:text-xl @error('petrol') border-red-500 @enderror border-gray-300"
                                    placeholder="{{ $price->gas }}" />
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!--End Recent Payments-->

        <!--Button-->
        <div class="p-8 flex items-center space-x-4">
            <button type="submit"
                class="btn bg-black hover:bg-yellow-400 border-none hover:text-black flex items-center space-x-2">
                <span> Update </span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </button>

            <span x-data="{ open: false }" x-init="
                        @this.on('notify-saved', () => {
                            if (open === false) setTimeout(() => { open = false }, 2500);
                            open = true;
                        })
                    " x-show.transition.out.duration.1000ms="open" style="display: none;"
                class="text-green-600 text-xl font-bold">Updated!</span>
        </div>

    </form>

</div>
