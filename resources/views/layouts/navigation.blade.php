<div class="border-r border-gray-300 hidden lg:block sticky top-0 h-screen">
    <div class="p-8">
        <div class="flex items-center space-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-900" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd"
                    d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                    clip-rule="evenodd" />
            </svg>

            <p class="tracking-tight font-bold text-3xl text-gray-900 uppercase tracking-widest">Always</p>
            <span class="tracking-tight text-xs text-gray-800 font-semibold">Oil & Gas</span>
        </div>
    </div>

    <div class="p-8 space-y-4">

        <a href="/manager" class="font-medium uppercase tracking-widest">
            <div
                class="{{ Request::is('manager') ? 'bg-yellow-400' : '' }} p-3 flex items-center justify-between cursor-pointer rounded-md hover:rounded-md hover:bg-yellow-200 focus:bg-yellow-100">
                <span>Home</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </div>
        </a>

        <hr />

        <a href="/upload" class="font-medium uppercase tracking-widest">
            <div
                class="{{ Request::is('upload') ? 'bg-yellow-400' : '' }} p-3 flex items-center justify-between cursor-pointer rounded-md hover:bg-yellow-300 focus:bg-yellow-100">
                <span> Upload Receipt </span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </div>
        </a>

        <hr />

        <a href="/payments" class="font-medium uppercase tracking-widest">
            <div
                class="{{ Request::is('payments') ? 'bg-yellow-400' : '' }} p-3 flex items-center justify-between cursor-pointer rounded-md hover:bg-yellow-300 focus:bg-yellow-100">
                <span> Payments </span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </div>
        </a>

        <hr />

        <a href="/expenses" class="font-medium uppercase tracking-widest">
            <div
                class=" {{ Request::is('expenses') ? 'bg-yellow-400' : '' }} p-3 flex items-center justify-between cursor-pointer rounded-md hover:bg-yellow-300 focus:bg-yellow-100">
                <span>Expenses</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z"
                        clip-rule="evenodd" />
                </svg>
            </div>
        </a>

        <hr />

    </div>
</div>
