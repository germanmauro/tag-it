<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tag It</title>

       <script src="https://cdn.tailwindcss.com"></script>
        <link href="{{ asset('css/font-awesome/css/all.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
       
    </head>
    <body class="antialiased">
        <div>
            {{-- @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}
            <div class="flex">
            <!-- Primera fila -->
                    <img src='{{asset('logo-main.png')}}' class="w-48 h-auto">
            </div>
            <div class="flex justify-center">
                <img src='{{asset('images/home.jpg')}}' class="principal-image">
            </div>
            <div class="flex justify-center">
                <h1 class="title">RECUPERÁ TUS OBJETOS PERDIDOS</h1>
            </div>
            <div class="contact-icons flex justify-end m-4 gap-4">
              <a href="https://wa.me/541167431033?text=Quiero%20mas%20info">
                <span class="fab fa-whatsapp"></span>
              </a>
                <a href="https://www.instagram.com/tagit.ar/"><span class="fab fa-instagram"></span></a>
                <a href="mailto:holatagit@gmail.com"><span class="fas fa-envelope"></span></a>
            </div>
            <div class="flex">
                <div class="p-8 column-section lg:w-1/4">
                    <p>Qué es</p>
                </div>
                <div class="lg:w-3/4">
                    <div class="flex">
                        <div class="p-8 lg:w-2/3">
                            <p class="text-description">Tag-<span class="primary-color">it</span> es una etiqueta de poliamida para coser en  los ​objetos que necesites identificar.
                        Por ejemplo ropa ​del colegio, muñecos, mochila, etc.</p>
                        </div>
                        <div class="p-8 lg:w-1/3">
                            <img src="{{asset('images/rollo.jpeg')}}" alt="tag-it">
                        </div>
                    </div>
                    <div class="flex">
                        <div class="p-8 lg:w-2/3">
                            <p class="text-description">Tag-<span class="primary-color">it</span> contiene un código QR con tus datos de ​contacto.</p>
                            <br>
                            <br>
                            <p class="text-description">Cuando alguien encuentre un objeto tuyo, escaneará ​con su celular el código QR de tu Tag-it y 
                                se pondrá en ​contacto con vos para devolvértelo.</p>
                        </div>
                        <div class="p-8 lg:w-1/3">
                            <img src="{{asset('images/qr.jpeg')}}" alt="tag-it">
                            
                        </div>
                    </div>
                    <div class="flex">
                        <div class="w-full">
                            <p class="text-details">
                                Tag-<span class="primary-color">it</span> no es un sistema de geolocalización.​
                                <br>
                                La persona que escanee tu Tag-<span class="primary-color">it</span> podrá ver tu número de WhatsApp o e-mail para contactarte.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex">
                <div class="p-8 column-section lg:w-1/4">
                    <p>Cómo se usa</p>
                </div>
                <div class="lg:w-3/4">
                    <div class="flex">
                        <div class="p-8 lg:w-2/3">
                            <div class="flex">
                                <div class="w-1/10">
                                    <p class="text-numbers">1</p> 
                                </div>
                                <div class="w-9/10 pl-5">
                                    <p class="text-description">
                                        Escaneá con tu celular el código QR de una de ​tus etiquetas Tag-<span class="primary-color">it</span>. 
                                    </p>
                                </div>
                            </div>
                            <div class="flex mt-8">
                                <div class="w-1/10">
                                    <p class="text-numbers">2</p> 
                                </div>
                                <div class="w-9/10 pl-5">
                                    <p class="text-description">
                                        Completá el formulario con tus datos de ​contacto.
                                        <br>
                                        Es importante que coloques el e-mail y whatsapp ​que habitualmente usás para que cuando ​alquien encuentre tu Tag-<span class="primary-color">it</span> te enteres ​enseguida. 
                                    </p>
                                </div>
                            </div>
                            <div class="flex mt-8">
                                <div class="w-1/10">
                                    <p class="text-numbers">3</p> 
                                </div>
                                <div class="w-9/10 pl-5">
                                    <p class="text-description">
                                        Cosé el Tag-<span class="primary-color">it</span> en un lugar visible de la ropa u ​objeto que quieras recuperar.
                                    </p>
                                </div>
                            </div>
                            <div class="flex mt-8">
                                <div class="w-1/10">
                                    <p class="text-numbers">4</p> 
                                </div>
                                <div class="w-9/10 pl-5">
                                    <p class="text-description">
                                        ¡Listo! La persona que encuentre tu Tag-<span class="primary-color">it</span> te ​contactará por e-mail o whatsapp para ​devolvértelo.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="p-8 lg:w-1/3">
                            <img src="{{asset('images/sweater.jpeg')}}" alt="tag-it">
                            <div class="contact-icons m-4 gap-4">
                            <a href="https://wa.me/541167431033?text=Quiero%20mas%20info">
                                <span class="fab fa-whatsapp"></span>
                            </a>
                                <a href="https://www.instagram.com/tagit.ar/"><span class="fab fa-instagram"></span></a>
                                <a href="mailto:holatagit@gmail.com"><span class="fas fa-envelope"></span></a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="flex">
                <div class="p-8 column-section lg:w-1/4">
                    <p>Quiero mi Tag-it</p>
                </div>
                <div class="lg:w-3/4">
                    <div class="flex">
                        <div class="p-8 lg:w-1/2">
                            <p class="text-numbers text-center">PRECIO</p>
                            <p class="text-numbers text-center">LANZAMIENTO</p>
                        </div>
                        <div class="p-8 lg:w-1/2">
                            <img src="{{asset('images/rollo.jpeg')}}" alt="tag-it">
                        </div>
                    </div>
                    
                </div>
            </div>
                <div class="pbg-white flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
                    <div class="hite bg-wtext-center text-sm text-gray-500 dark:text-gray-400 sm:text-left">
                        <div class="flex items-center gap-4">
                            <a href="https://github.com/sponsors/taylorotwell" class="group inline-flex items-center hover:text-gray-700 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="-mt-px mr-1 w-5 h-5 stroke-gray-400 dark:stroke-gray-600 group-hover:stroke-gray-600 dark:group-hover:stroke-gray-400">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                                Sponsor
                            </a>
                        </div>
                    </div>

                    <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
                    </div>
                </div>
        </div>
    </body>
</html>
