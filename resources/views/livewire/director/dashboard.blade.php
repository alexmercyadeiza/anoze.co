<div class="lg:col-span-3 col-span-4">
    <div class="grid border-b border-gray-300">
        <div class="p-8 flex items-center justify-between">
            <p class="tracking-tight text-3xl font-bold uppercase tracking-wider">Dashboard</p>

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
                        <p class="text-gray-600 text-sm tracking-tight">PMS</p>
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

    <!--<div class="p-8">
        <div class="alert bg-yellow-200">
            <div class="flex-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="flex-shrink-0 w-6 h-6 mx-2 text-gray-900">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9">
                    </path>
                </svg>
                <label>
                    <h4 class="text-gray-900 uppercase font-bold text-sm">Beta 1.0</h4>
                    <p class="text-xs">
                        This is a beta software. Report bugs here: <a href="mailto:help@anoze.co"
                            class="underline">
                            help@anoze.co</a>
                    </p>
                </label>
            </div>
            <div class="flex-none">

                <svg xmlns="http://www.w3.org/2000/svg"
                    class="w-6 h-6 stroke-current cursor-pointer text-yellow-500 hover:text-yellow-900"
                    viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                        clip-rule="evenodd" />
                </svg>

            </div>
        </div>

    </div>-->

    <!--Chart-->
    <!--<div class=" border-b">
        <div class="p-8">
            <p class=" tracking-tight text-xl font-bold uppercase tracking-wider">Fuel
                Levels</p>
        </div>

        <div class="p-4" id="chart"></div>
    </div>-->

    <!--Recent Payments-->
    <div class="mt-8 ml-8">
        <p class="tracking-tight text-xl mb-3 md:mb-0 font-bold uppercase tracking-wider">Recent payments (By Station)
        </p>
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
                                    Station
                                </th>

                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Bank
                                </th>
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
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow-500"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-300">
                                                Okene
                                            </div>

                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-gray-300">null</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-gray-300">{{ Carbon\Carbon::parse()->toFormattedDateString() }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-xl text-gray-300">₦ 00.0</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <button class="btn btn-xs btn-neutral rounded" disabled>
                                        Download Teller
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            class="inline-block w-4 h-4 ml-1 stroke-current">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7"></path>
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
    <!--End Recent Payments-->

    <!--Button-->
    <div class="p-8">
        <a href="/director/payments">
            <button class="btn bg-black hover:bg-yellow-400 border-none hover:text-black flex items-center space-x-2">
                <span> View all payments </span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </button>
        </a>
    </div>

    <div class="p-8 mt-10 border-t">
        <p class="text-sm font-medium tracking-tight">For Support, Info & Enquiries: Call <span
                class="tracking-wider font-bold">+ 234 703 248 2790</span></p>
    </div>
</div>


<script>
    var options = {
        series: [{
            name: 'Used',
            data: [{
                    x: 'Kero',
                    y: 3500,
                    goals: [{
                        name: 'Initial',
                        value: 5000,
                        strokeWidth: 5,
                        strokeColor: '#E0BE36',
                    }]
                },
                {
                    x: 'Diesel',
                    y: 2500,
                    goals: [{
                        name: 'Initial',
                        value: 5000,
                        strokeWidth: 5,
                        strokeColor: '#998650',
                    }]
                },
                {
                    x: 'PMS',
                    y: 3000,
                    goals: [{
                        name: 'Initial',
                        value: 5000,
                        strokeWidth: 5,
                        strokeColor: '#548A42',
                    }]
                },
                {
                    x: 'Gas',
                    y: 4320,
                    goals: [{
                        name: 'Initial',
                        value: 5000,
                        strokeWidth: 5,
                        strokeColor: '#6FAF5A',
                    }]
                },
            ]
        }],
        chart: {
            height: 350,
            type: 'bar'
        },
        plotOptions: {
            bar: {
                columnWidth: '60%'
            }
        },
        colors: ['#E0BE36'],
        dataLabels: {
            enabled: false
        },
        legend: {
            show: false,
            showForSingleSeries: false,
            customLegendItems: ['Used', 'Initial'],
            markers: {
                fillColors: ['#E0BE36', '#998650', '#D8F793', '#D8F793']
            }
        },
        grid: {
            show: false,
        }
    };

    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();
</script>
