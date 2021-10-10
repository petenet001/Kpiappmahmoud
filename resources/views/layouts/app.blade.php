<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  
        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>

        {{-- <script src="https://unpkg.com/read-excel-file@4.1.0/bundle/read-excel-file.min.js"></script> --}}

        <script src="https://bossanova.uk/jspreadsheet/v3/jexcel.js"></script>
        <link rel="stylesheet" href="https://bossanova.uk/jspreadsheet/v3/jexcel.css" type="text/css" />
        <script src="https://jsuites.net/v3/jsuites.js"></script>
        <link rel="stylesheet" href="https://jsuites.net/v3/jsuites.css" type="text/css" />

        <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.13.5/jszip.js"></script>
        <script src="https://bossanova.uk/jspreadsheet/v3/xlsx.js"></script>

    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')
        {{-- <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.15.1/shim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.15.1/xlsx.full.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.15.1/jszip.js"></script> --}}
        @livewireScripts

        <script>
            jexcel.fromSpreadsheet('https://bossanova.uk/jspreadsheet/v3/list.xlsx', function(result) {
                if (! result.length) {
                    console.error('Jspreadsheet: Something went wrong.');
                } else {
                    if (result.length == 1) {
                        jexcel(document.getElementById('spreadsheet4'), result[0]);
                    } else {
                        jexcel.createTabs(document.getElementById('spreadsheet4'), result);
                    }
                }
            });
            </script>
{{-- 
        <script type="text/javascript">
          var input = document.getElementById("input");
        input.addEventListener("change", function () {
            readXlsxFile(input.files[0]).then(function (data) {
                var i = 0;

                data.map((row, index) => {
                    if (i == 0) {
                        let table = document.getElementById("tbl-data");
                        generateTableHead(table, row);
                    }

                    if (i > 0) {
                        let table = document.getElementById("tbl-data");
                        generateTableRows(table, row);
                    }
                    i++;
                });
            
            });
});

function generateTableHead(table, data) {
    let thead = table.createTHead();
    let row = thead.insertRow();
    for (let key of data) {
        let th = document.createElement("th");
        let text = document.createTextNode(key);
        th.appendChild(text);
        row.appendChild(th);
    }
}

function generateTableRows(table, data) {
    let newRow = table.insertRow(-1);
    data.map((row, index) => {
        let newCell = newRow.insertCell();
        let newText = document.createTextNode(row);
        newCell.appendChild(newText);
    });
}

            

          </script> --}}
    </body>
</html>
