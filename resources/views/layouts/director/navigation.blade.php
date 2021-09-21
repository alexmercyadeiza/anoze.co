<div class=" border-r hidden lg:block sticky top-0 h-screen">
    <div class="p-8 bg-gray-900">
        <div class="flex items-center space-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-yellow-500" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd"
                    d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                    clip-rule="evenodd" />
            </svg>

            <p class="tracking-tight font-bold text-3xl  uppercase tracking-widest text-white">Always</p>
            <span class="tracking-tight text-xs font-semibold text-white">Oil & Gas</span>
        </div>
    </div>

    <div class="p-8 space-x-8">


        <a href="/director" class="font-medium uppercase tracking-widest">
            <div
                class="{{ Request::is('director') ? 'bg-yellow-400' : '' }} p-3  border-gray-300 flex items-center justify-between cursor-pointer rounded-md hover:border-gray-900 hover:rounded-md hover:bg-yellow-200 hover:text-gray-900 focus:bg-yellow-100">
                <div class="items-center space-x-3 flex">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-500" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                    </svg>
                    <span>Home</span>
                </div>


            </div>
        </a>

        <a href="/upload" class="font-medium uppercase tracking-widest">
            <div
                class="{{ Request::is('upload') ? 'bg-yellow-400' : '' }} p-3 flex  items-center justify-between cursor-pointer rounded-md hover:border-gray-900 hover:rounded-md hover:bg-yellow-200 hover:text-gray-900 focus:bg-yellow-100">
                <div class="items-center space-x-3 flex">

                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-500" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            d="M5.5 13a3.5 3.5 0 01-.369-6.98 4 4 0 117.753-1.977A4.5 4.5 0 1113.5 13H11V9.413l1.293 1.293a1 1 0 001.414-1.414l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13H5.5z" />
                        <path d="M9 13h2v5a1 1 0 11-2 0v-5z" />
                    </svg>
                    <span> Receipts </span>
                </div>

            </div>
        </a>

        <a href="/upload" class="font-medium uppercase tracking-widest mt-6">
            <div
                class="{{ Request::is('upload') ? 'bg-yellow-400' : '' }} p-3 flex  items-center justify-between cursor-pointer rounded-md hover:border-gray-900 hover:rounded-md hover:bg-yellow-200 hover:text-gray-900 focus:bg-yellow-100">
                <div class="items-center space-x-3 flex">

                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-500" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                            clip-rule="evenodd" />
                    </svg>
                    <span> Payments </span>
                </div>

            </div>
        </a>

        <a href="/upload" class="font-medium uppercase tracking-widest mt-6">
            <div
                class="{{ Request::is('upload') ? 'bg-yellow-400' : '' }} p-3 flex  items-center justify-between cursor-pointer rounded-md hover:border-gray-900 hover:rounded-md hover:bg-yellow-200 hover:text-gray-900 focus:bg-yellow-100">
                <div class="items-center space-x-3 flex">

                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-500" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM7 9a1 1 0 000 2h6a1 1 0 100-2H7z"
                            clip-rule="evenodd" />
                    </svg>
                    <span> Expenses </span>
                </div>

            </div>
        </a>

        <a href="/upload" class="font-medium uppercase tracking-widest mt-6">
            <div
                class="{{ Request::is('upload') ? 'bg-yellow-400' : '' }} p-3 flex  items-center justify-between cursor-pointer rounded-md hover:border-gray-900 hover:rounded-md hover:bg-yellow-200 hover:text-gray-900 focus:bg-yellow-100">
                <div class="items-center space-x-3 flex">

                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-500" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path
                            d="M5 4a1 1 0 00-2 0v7.268a2 2 0 000 3.464V16a1 1 0 102 0v-1.268a2 2 0 000-3.464V4zM11 4a1 1 0 10-2 0v1.268a2 2 0 000 3.464V16a1 1 0 102 0V8.732a2 2 0 000-3.464V4zM16 3a1 1 0 011 1v7.268a2 2 0 010 3.464V16a1 1 0 11-2 0v-1.268a2 2 0 010-3.464V4a1 1 0 011-1z" />
                    </svg>
                    <span> Prices </span>
                </div>

            </div>
        </a>

    </div>

    <div class="p-8">
    </div>
</div>
