<div class="lg:col-span-3 col-span-4">

    <div class="grid border-b border-gray-300">
        <div class="p-8 flex items-center justify-between">
            <div class="flex items-center space-x-3">
                <a href="/payments">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                    </svg>
                </a>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
            </svg>
        </div>
    </div>

    <form wire:submit.prevent="record">
        <div class="p-8">
            <p class="tracking-tight text-3xl font-bold uppercase tracking-wider mb-6">Record Sales (ltrs)</p>

            <div class="mb-6">

                <div x-data=" { open: false }" x-init="
                        @this.on('notify-saved-already', () => {
                            if (open === false) setTimeout(() => { open = false }, 2500);
                            open = true;
                        })
                    " x-show.transition.out.duration.1000ms="open" style="display: none;" class="alert alert-error">
                    <div class="flex-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            class="w-6 h-6 mx-2 stroke-current">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                            </path>
                        </svg>
                        <label>Record has already been saved for today.</label>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-6">
                <div>
                    <label for="first-name" class="block font-bold font-medium text-gray-700">Petrol</label>
                    <input type="text" wire:model.defer="petrol" onkeypress="return CheckNumeric()"
                        class="mt-1 focus:ring-gray-500 focus:border-gray-500 block w-full shadow-sm sm:text-sm lg:text-xl @error('petrol') border-red-500 @enderror border-gray-300"
                        placeholder="Type (0) if no sales." />
                </div>

                <div>
                    <label for="first-name" class="block font-bold font-medium text-gray-700">Diesel</label>
                    <input type="text" wire:model.defer="diesel" onkeypress="return CheckNumeric()"
                        class="mt-1 focus:ring-gray-500 focus:border-gray-500 block w-full shadow-sm sm:text-sm lg:text-xl @error('diesel') border-red-500 @enderror border-gray-300"
                        placeholder="Type (0) if no sales." />
                </div>

                <div>
                    <label for="first-name" class="block font-bold font-medium text-gray-700">Kerosene</label>
                    <input type="text" wire:model.defer="kerosene" onkeypress="return CheckNumeric()"
                        class="mt-1 focus:ring-gray-500 focus:border-gray-500 block w-full shadow-sm sm:text-sm lg:text-xl @error('kerosene') border-red-500 @enderror border-gray-300"
                        placeholder="Type (0) if no sales." />

                </div>

                <div>
                    <label for="first-name" class="block font-bold font-medium text-gray-700">Gas (Kg)</label>
                    <input type="text" wire:model.defer="gas" onkeypress="return CheckNumeric()"
                        class="mt-1 focus:ring-gray-500 focus:border-gray-500 block w-full shadow-sm sm:text-sm lg:text-xl @error('gas') border-red-500 @enderror border-gray-300"
                        placeholder="Type (0) if no sales." />
                </div>
            </div>
        </div>
        <!--Navigation-->
        <div class="px-8 flex items-center space-x-3">
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
</div>
