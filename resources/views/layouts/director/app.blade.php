<!DOCTYPE html>
<html lang="en" data-theme="cyberpunk">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="The retail gas industry managment software." />
    <meta name="tags" content="Petrol, Gas, Diesel, Kerosene" />

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!--Use LARAPEX Charts Here-->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

    <style>
        .turbolinks-progress-bar {
            height: 5px;
            background-color: #E0BE36;
        }

    </style>

    @livewireStyles
</head>

<body>
    <div class="grid grid-cols-4 min-h-screen">
        @include('layouts.director.navigation')

        {{ $slot }}
        @include('layouts.footer')
    </div>
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js"
        data-turbolinks-eval="false" data-turbo-eval="false"></script>
</body>

</html>
