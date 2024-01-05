<x-app-layout>
<script type="text/javascript">
        $(document).ready(function() {
            $('#tabla').DataTable({
                columnDefs: [{
                   orderable: false,
                   targets: [8]
               }]}
            );
        });
</script>
<div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="page-header clearfix">
            <h2 class="pull-left">Tags</h2>
            <a href="{{route('tags.create')}}" class="btn btn-success pull-right">Nuevo Tag</a>
          </div>

          @if(count($tags)>0)
              <table id='tabla' class='display menutable'>
              <thead>
              <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>WhatsApp</th>
                <th>Estado</th>
                <th>Hash</th>
                <th>Creado</th>
                <th>Actualizado</th>
                <th>Acciones</th>
              </tr>
              </thead>
              <tbody>
                @foreach ($tags as $item)
                    <tr>
                        <td>{{$item->id}} </td>
                        <td>{{$item->name}}  </td>
                        <td>{{$item->surname}}  </td>
                        <td>{{$item->whatsapp}}  </td>
                        <td>{{$item->used == 0 ? 'Sin Utilizar': 'Utilizado'}}  </td>
                        <td>{{$item->hash}}  </td>
                        <td>{{$item->created_at->format('d/m/Y H:i:s')}}  </td>
                        <td>{{$item->updated_at}}  </td>
                        <td>
                        {{-- <a class="accionmenu" href="{{route('tags.edit',$item->id) }}" title='Actualizar Registro' data-toggle='tooltip'><i class='fas fa-edit'></i></span></a>
                        <a class="accionmenu" href="{{route('tags.delete',$item->id) }}" title='Eliminar Registro' data-toggle='tooltip'><span class='fas fa-trash-alt'></span></a> --}}
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        @else
            <p class='lead'><em>No hay registros.</em></p>
        @endif
        </div>
      </div>
    </div>
</x-app-layout>