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
       <script>
        window.location.href = 'https://www.instagram.com/tagit_qr';
       </script>
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
              <a href="https://wa.me/541167431033?text=¡Hola!%20Quiero%20mi%20TAG-IT">
                <span class="fab fa-whatsapp"></span>
              </a>
                <a href="https://www.instagram.com/tagit_qr/"><span class="fab fa-instagram"></span></a>
                <a href="mailto:holatagit@gmail.com"><span class="fas fa-envelope"></span></a>
            </div>
            <div class="lg:flex">
                <div class="p-8 column-section lg:w-1/4 sm:w-full">
                    <p>Qué es</p>
                </div>
                <div class="lg:w-3/4 sm:w-full">
                    <div class="lg:flex">
                        <div class="p-8 lg:w-2/3">
                            <p class="text-description">Tag-<span class="primary-color">it</span> es una etiqueta de poliamida para coser en  los ​objetos que necesites identificar.
                        Por ejemplo ropa ​del colegio, muñecos, mochila, etc.</p>
                        </div>
                        <div class="p-8 lg:w-1/3">
                            <img src="{{asset('images/rollo.jpeg')}}" alt="tag-it">
                        </div>
                    </div>
                    <div class="lg:flex">
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
                    <div class="lg:flex">
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
            <div class="lg:flex">
                <div class="p-8 column-section lg:w-1/4">
                    <p>Cómo se usa</p>
                </div>
                <div class="lg:w-3/4">
                    <div class="lg:flex">
                        <div class="p-8 lg:w-2/3">
                            <div class="lg:flex">
                                <div class="w-1/10">
                                    <p class="text-numbers">1</p> 
                                </div>
                                <div class="w-9/10 pl-5">
                                    <p class="text-description">
                                        Escaneá con tu celular el código QR de una de ​tus etiquetas Tag-<span class="primary-color">it</span>. 
                                    </p>
                                </div>
                            </div>
                            <div class="lg:flex mt-8">
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
                            <div class="lg:flex mt-8">
                                <div class="w-1/10">
                                    <p class="text-numbers">3</p> 
                                </div>
                                <div class="w-9/10 pl-5">
                                    <p class="text-description">
                                        Cosé el Tag-<span class="primary-color">it</span> en un lugar visible de la ropa u ​objeto que quieras recuperar.
                                    </p>
                                </div>
                            </div>
                            <div class="lg:flex mt-8">
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
                            <a href="https://wa.me/541167431033?text=¡Hola!%20Quiero%20mi%20TAG-IT">
                                <span class="fab fa-whatsapp"></span>
                            </a>
                                <a href="https://www.instagram.com/tagit_qr/"><span class="fab fa-instagram"></span></a>
                                <a href="mailto:holatagit@gmail.com"><span class="fas fa-envelope"></span></a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="lg:flex">
                <div class="p-8 column-section lg:w-1/4">
                    <p>Quiero mi Tag-it</p>
                </div>
                <div class="lg:w-3/4">
                    <div class="lg:flex">
                        <div class="p-8 lg:w-1/2">
                            <p class="text-numbers text-center">PRECIO</p>
                            <p class="text-numbers text-center">LANZAMIENTO</p>
                        </div>
                        <div class="p-8 lg:w-1/2">
                            <p class="text-description text-center">SOLO POR ENERO Y FEBRERO</p>
                            <p class="text-discount text-center">20% OFF</p>
                            <p class="text-precio text-center">$3999</p>
                            <p class="text-description text-center">100 ETIQUETAS</p>
                            <p class="text-description text-center">PRECIO REGULAR $4999</p>
                        </div>
                    </div>
                    <div class="lg:flex">
                        <div class="p-8 w-full">
                            <p class="text-description text-center">Escribinos y sumate a la comunidad Tag-<span class='primary-color'>it</span>.
                                  <br>  ¡Cada vez somos más!</p>
                        </div>
                    </div>
                    <div class="lg:flex">
                        <div class="p-8 lg:w-1/2">
                            <p class="text-description text-center">
                                +54-911-6743-1033
                                <br>
                                holatagit@gmail.com
                                <br>
                                @tagit_qr
                            </p>
                        </div>
                        <div class="lg:w-1/2 contact-icons justify-end m-4 gap-4">
                            <a href="https://wa.me/541167431033?text=¡Hola!%20Quiero%20mi%20TAG-IT">
                            <span class="fab fa-whatsapp"></span>
                            </a>
                            <a href="https://www.instagram.com/tagit_qr/"><span class="fab fa-instagram"></span></a>
                            <a href="mailto:holatagit@gmail.com"><span class="fas fa-envelope"></span></a>
                        </div>
                    </div>
                </div>
            </div>
                    <div class="flex p-8 bg-black text-white">
                        <div class="w-1/2">
                            © Tag-it Buenos Aires, Argentina
                        </div>

                        <div class="w-1/2">
                            <p class="text-left">Todos los derechos reservados</p>
                        </div>
        </div>
    </body>
</html>
