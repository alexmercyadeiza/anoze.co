<div class="lg:col-span-3 col-span-4">
    <div class="grid border-b border-gray-300">
        <div class="p-8 flex items-center justify-between">
            <p class="tracking-tight text-3xl font-bold uppercase tracking-wider">Upload Teller</p>
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
            </svg>
        </div>
    </div>

    <!-- Upload -->
    <div class="p-8 border-b border-gray-300">
        <form wire:submit.prevent="save" enctype="multipart/form-data">
            <div class="space-y-8">
                <div class="space-y-4">
                    <input type="file" wire:model="teller">
                    @error('teller')
                        <div class="alert alert-warning ">
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
                </div>

                @if ($teller)
                    <div class="w-1/3 border-2 border-gray-200 p-3 space-y-3">
                        <p class="uppercase text-sm font-bold text-wider">Preview</p>
                        <img src="{{ $teller->temporaryUrl() }}">
                    </div>
                @endif

                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <p class=" uppercase text-sm font-bold text-wider mb-3">
                            Teller Date</p>
                        <input type="date" wire:model.defer="date"
                            class="mt-1 block w-full text-xl @error('date') border-red-600 @enderror border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" />
                    </div>

                    <div>
                        <p class=" uppercase text-sm font-bold text-wider mb-3">
                            Select Bank</p>

                        <select wire:model.defer="bank"
                            class="block w-full border @error('bank') border-red-600 @enderror border-gray-300 bg-white  shadow-sm focus:outline-none focus:ring-yellow-500 focus:border-gray-500 text-sm md:text-xl">
                            <option selected>Select Bank</option>
                            <option value="Guaranty Trust Bank">GTB</option>
                            <option value="First Bank">First Bank</option>
                            <option value="Unity Bank">Unity</option>
                            <option value="United Bank for Africa">UBA</option>
                            <option value="Zenith Bank">Zenith</option>

                        </select>

                    </div>
                </div>

                <div class="flex items-center space-x-3">
                    <button type="submit"
                        class="btn bg-yellow-400 border-none text-black hover:text-white flex items-center space-x-2">+
                        Upload</button>

                    <span x-data="{ open: false }" x-init="
                        @this.on('notify-saved', () => {
                            if (open === false) setTimeout(() => { open = false }, 2500);
                            open = true;
                        })
                    " x-show.transition.out.duration.1000ms="open" style="display: none;"
                        class="text-green-600 text-xl">Saved!</span>
                </div>
            </div>
        </form>
    </div>


    <div>
        <!--Recent Payments-->
        <div class="mt-8 ml-8 mb-6 md:mb-0">
            <p class="tracking-tight text-xl font-bold uppercase tracking-wider">Recent Teller Uploads</p>
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
                                        Teller Date
                                    </th>
                                    <!--<th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Bank
                                    </th>-->

                                    <th scope="col"
                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($uploads as $upload)
                                    <tr class="hover:bg-gray-50 cursor-pointer"
                                        wire:click="image({{ $upload->created_at }})">


                                        <td class="px-6 py-4 whitespace-nowrap ">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="h-7 w-7 mt-2 text-yellow-600""
                                                        viewBox=" 0 0 20 20" fill="currentColor">
                                                        <path
                                                            d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z" />
                                                        <path d="M9 13h2v5a1 1 0 11-2 0v-5z" />
                                                    </svg>
                                                </div>
                                                <div class="ml-4">
                                                    <div class="text-sm font-medium text-gray-900">
                                                        {{ $upload->created_at }}
                                                    </div>

                                                </div>
                                            </div>
                                        </td>

                                        <!--<td class="px-6 py-4 whitespace-nowrap">
                                            <div class="text-gray-900">Guaranty Trust Bank</div>
                                        </td>-->

                                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                            <a class="btn btn-xs btn-neutral rounded"
                                                href="{{ asset('storage/tellers/' . $upload->file) }}">
                                                View
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="inline-block w-4 h-4 ml-1 stroke-current" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                            </a>
                                        </td>


                                    </tr>

                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

        </div>

        <!--Page Navigation-->
        <div class="px-8 mb-14">
            {{ $uploads->links() }}
        </div>

    </div>
</div>
