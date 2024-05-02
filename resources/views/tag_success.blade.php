<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tag It</title>

       <script src="https://cdn.tailwindcss.com"></script>
        <link href="{{ asset('css/font-awesome/css/all.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
       <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </head>
    <body class="antialiased">
        @if (session()->has('success'))
            @php
                // Clear the flashed message once it has been displayed
                Session::forget('success');
            @endphp
                    <script>
                        swal("¡Listo! Ya podés usar tus Tag-it.","", "success");
                    </script>
            @endif
        <div>
            <div class="flex justify-center items-center">
            <!-- Primera fila -->
                    <img src='{{asset('logo-main.png')}}' class="w-88 h-auto">
            </div>
           
            <div class="flex w-full p-8 bg-black text-white absolute bottom-0 block">
                <div class="w-1/2">
                    © Tag-it Buenos Aires, Argentina
                </div>

                <div class="w-1/2">
                    <p class="text-left">Todos los derechos reservados</p>
                </div>
            </div>
        </div>
    </body>
</html>
