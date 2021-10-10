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
        <link rel="stylesheet" href="{{ mix('css/all.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@kktsvetkov/heiho@0.3.3/heiho.min.css">
        <script src="https://cdn.jsdelivr.net/npm/@kktsvetkov/heiho@0.3.3/heiho.min.js"></script>
        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script>
            const tabs = document.querySelectorAll(".tabs");
            const tab = document.querySelectorAll(".tab");
            const panel = document.querySelectorAll(".tab-content");

            function onTabClick(event) {

                // deactivate existing active tabs and panel

                for (let i = 0; i < tab.length; i++) {
                    tab[i].classList.remove("active");
                }

                for (let i = 0; i < panel.length; i++) {
                    panel[i].classList.remove("active");
                }


                // activate new tabs and panel
                event.target.classList.add('active');
                let classString = event.target.getAttribute('data-target');
                console.log(classString);
                document.getElementById('panels').getElementsByClassName(classString)[0].classList.add("active");
            }

            for (let i = 0; i < tab.length; i++) {
                tab[i].addEventListener('click', onTabClick, false);
            }
        </script>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
