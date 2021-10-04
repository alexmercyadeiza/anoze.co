<div class="min-h-screen grid grid-rows-[1fr,auto]">
    <div class="grid grid-cols-1 p-6 bg-gray-50">
        <div class="place-self-center md:w-1/3 lg:w-1/3">
            <div class="space-y-6">
                <div class="">
                    <p class=" tracking-tight text-xl font-bold">&#9728; Always Oil & Gas
                    </p>
                </div>

                @error('login')
                    <div class="alert alert-warning">
                        <div class="flex-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                class="w-6 h-6 mx-2 stroke-current">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z">
                                </path>
                            </svg>
                            <label>{{ $message }}</label>
                        </div>
                    </div>

                @enderror

                <form wire:submit.prevent="login">
                    <div class="p-10 border border-gray-400 rounded-box space-y-4">
                        <div class="flex items-center justify-between">
                            <p class="font-bold text-3xl text-yellow-600">Login.</p>
                            <div class="badge text-xs">Manager Dashboard</div>
                        </div>

                        <hr />
                        <div class="col-span-6 sm:col-span-3">
                            <label class="block text-sm font-medium text-gray-700">Phone number</label>
                            <input type="text" wire:model.defer="email" onkeypress="return CheckNumeric()"
                                class="mt-1 focus:ring-gray-500 focus:border-gray-500 block w-full shadow-sm sm:text-sm lg:text-3xl border-gray-300" />

                            @error('email')
                                <label class="block text-sm font-medium text-red-700">{{ $message }}</label>
                            @enderror
                        </div>

                        <div class="col-span-6 sm:col-span-3">
                            <label class="block text-sm font-medium text-gray-700">Pin</label>
                            <input type="password" wire:model.defer="password" onkeypress="return CheckNumeric()"
                                class="mt-1 focus:ring-gray-500 focus:border-gray-500 block w-full shadow-sm sm:text-sm lg:text-3xl border-gray-300" />
                            @error('password')
                                <label class="block text-sm font-medium text-red-700">{{ $message }}</label>
                            @enderror
                        </div>

                        <div>
                            <button class="btn btn-warning space-x-2" type="submit">
                                <span>Sign in</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </form>

                <p class="text-2xs">Powered by <a href="#" class="font-bold underline">Anoze.co</a></p>
            </div>
        </div>
    </div>
</div>
