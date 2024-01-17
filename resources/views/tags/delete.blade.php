<x-form-layout>
    <div class="panel-heading">
        BLANQUEAR DATOS DEL TAG
    </div>
    <form action="{{route("tags.destroy",$tag)}}" method="post">
        @csrf
        @method("put")
    <div class="alert alert-danger fade in">
        <p>¿Desea blanquear los datos del tag?</p><br>
        <p>
            <x-primary-button class="ms-4"> {{ __('Sí') }} </x-primary-button>
            <x-cancel-button href="/tags">No</x-cancel-button>
        </p>
    </div>
    </form>
</x-form-layout>