<div class="mt-16 md:mt-0 lg:mt-0 xl:mt-0"></div>

<footer
    class="bg-gray-50 shadow shadow-lg border-t border-gray-300
            lg:hidden md:hidden xl:hidden fixed inset-x-0 bottom-0 p-4 mt-5">

    <div class="space-x-2 grid place-items-center">
        <div class="flex items-center space-x-12">


            <a href="/manager">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6 {{ Request::is('manager') ? 'text-yellow-600' : '' }}" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
            </a>

            <a href="/payments">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6 {{ Request::is('payments') || Request::is('record/sales') ? 'text-yellow-600' : '' }}"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
            </a>

            <a href="/upload">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-6 w-6 {{ Request::is('upload') ? 'text-yellow-600' : '' }}" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                </svg>
            </a>

            <a href="expenses">
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-5 w-5 {{ Request::is('expenses') ? 'text-yellow-600' : '' }}" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
                        clip-rule="evenodd" />
                </svg>
            </a>

        </div>
    </div>

</footer>
