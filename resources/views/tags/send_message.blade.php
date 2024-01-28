<x-form-layout>
<div>
      <h3 class="text-send-message">!Encontraste un tag!</h3>
      <h3 class="text-send-message">Enviale un mensaje al dueño para devolvérselo</h3>
      <br>
      <a class="btn-send" target="_blank" href="https://wa.me/{{$telephone}}?text=¡Hola!%20Encontré%20un%20objeto%20tuyo%20con%20TAG-IT%20y%20quiero%20devolvértelo">
        Avisar al dueño <span class="fab fa-whatsapp"></span></a>
      {{-- {{$telephone}} --}}
    </div>
</x-guest-layout>