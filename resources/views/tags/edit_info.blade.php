<x-form-layout>
    <div class="panel-heading">
        <h3 class="mb-4 text-white">CARGE LA INFORMACIÓN DE SU TAG PARA QUE PUEDA SER RASTREADO</h3>
    </div>
    <form method="POST" action="{{ route('tags.update_info',$tag) }}">
        @csrf
        @method("put")
        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Nombre')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$tag->name" autofocus autocomplete="name" required/>
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Name -->
        <div>
            <x-input-label for="surname" :value="__('Apellido')" />
            <x-text-input id="surname" class="block mt-1 w-full" type="text" name="surname" :value="$tag->surname" autofocus autocomplete="surname" required />
            <x-input-error :messages="$errors->get('surname')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="$tag->email" autocomplete="email" required/>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Whatsapp -->
        <div class="mt-4">
            <x-input-label for="whatsapp" :value="__('WhatsApp')" />
            <x-text-input id="whatsapp" class="block mt-1 w-full" type="text" name="whatsapp" :value="$tag->whatsapp" autocomplete="whatsapp" required/>
            <x-input-error :messages="$errors->get('whatsapp')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-cancel-button class="ms-4"
            href="/">
                Cancelar
            </x-cancel-button>

            <x-primary-button class="ms-4">
                {{ __('Generar') }}
            </x-primary-button>
        </div>
    </form>
</x-form-layout>
