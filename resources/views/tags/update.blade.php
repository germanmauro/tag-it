<x-app-layout>
 <script src="{{ asset('js/jquery.min.js') }}"></script>
<script type="text/javascript">
        $(document).ready(function() {
            $('#tabla').DataTable({
                columnDefs: [{
                   orderable: false,
                   targets: [2]
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
                <th>Nombre</th>
                <th>Categoría</th>
                <th>Acciones</th>
              </tr>
              </thead>
              <tbody>
                @foreach ($tags as $item)
                    <tr>
                        <td>{{$item->id}} </td>
                        <td>{{$item->hash}}  </td>
                        <td>
                        {{-- <a class="accionmenu" href="{{route('specialty.edit',$item->id) }}" title='Actualizar Registro' data-toggle='tooltip'><i class='fas fa-edit'></i></span></a>
                        <a class="accionmenu" href="{{route('specialty.delete',$item->id) }}" title='Eliminar Registro' data-toggle='tooltip'><span class='fas fa-trash-alt'></span></a> --}}
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