<x-guest-layout>
<div>
      <p class="description-pink">!Encontraste un tag!</p>
      <p class="description-yellow">Enviale un mensaje al dueño para que pueda recuperarlo</p>
      <a target="_blank" href="https://wa.me/{{$telephone}}?text=Encontré%20un%20objeto%20tuyo%20y%20quiero%20devolvertelo">
        <img class="h-auto max-w-40" src={{asset('images/whatsapp.png')}} /></a>
      {{-- {{$telephone}} --}}
    </div>
</x-guest-layout>