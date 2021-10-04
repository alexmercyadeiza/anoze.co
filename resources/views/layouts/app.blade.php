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
        @include('layouts.navigation')

        {{ $slot }}
        @include('layouts.footer')
    </div>
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js"
        data-turbolinks-eval="false" data-turbo-eval="false"></script>

    <script>
        new Pikaday({
            field: document.getElementById('datepicker')
        })

        function FormatCurrency(ctrl) {
            //Check if arrow keys are pressed - we want to allow navigation around textbox using arrow keys
            if (event.keyCode == 37 || event.keyCode == 38 || event.keyCode == 39 || event.keyCode == 40) {
                return;
            }
            var val = ctrl.value;
            val = val.replace(/,/g, "")
            ctrl.value = "";
            val += '';
            x = val.split('.');
            x1 = x[0];
            x2 = x.length > 1 ? '.' + x[1] : '';
            var rgx = /(\d+)(\d{3})/;
            while (rgx.test(x1)) {
                x1 = x1.replace(rgx, '$1' + ',' + '$2');
            }
            ctrl.value = x1 + x2;
        }

        function CheckNumeric() {
            return event.keyCode >= 48 && event.keyCode <= 57 || event.keyCode == 46;
        }
    </script>
</body>

</html>
