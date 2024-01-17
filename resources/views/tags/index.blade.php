<x-app-layout>
<script type="text/javascript">
        $(document).ready(function() {
            $('#tabla').DataTable({
                columnDefs: [{
                   orderable: false,
                   targets: [8,9]
               }]}
            );
        });
</script>
      <div>
        <div>
          <h3 class="mb-10 text-3xl font-bold dark:text-white">Tags</h3>
            <a href="{{route('tags.create')}}" class="mb-10 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Nuevo Tag</a>
        </div>
        <div>
            @if(count($tags)>0)
          <br>    
          <table id='tabla' class='display'>
              <thead>
              <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>WhatsApp</th>
                <th>Email</th>
                <th>Estado</th>
                <th>Creado</th>
                <th>Actualizado</th>
                <th>QR</th>
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
                        <td>{{$item->email}}  </td>
                        <td {{$item->used == 0 ? 'style=background-color:#41b33e' : 'style=background-color:#d11a1a'}}>{{$item->used == 0 ? 'Sin Utilizar': 'Utilizado'}}  </td>
                        <td>{{$item->created_at->format('d/m/Y H:i:s')}}  </td>
                        <td>{{$item->updated_at != null ? $item->updated_at->format('d/m/Y H:i:s') : ''}}  </td>
                        <td>{!! QrCode::size(100)->generate(env('APP_URL').'/tag/'.$item->hash."/edit") !!}</td>
                        {{-- <td>{!! QrCode::format('png')->size(100)->merge(asset('logo.png', .3, true))->generate(env('APP_URL').'/tag/'.$item->hash."/edit") !!}</td> --}}

                        <td>
                        <a class="accionmenu" href="{{route('tags.edit',$item->id) }}" title='Actualizar Registro' data-toggle='tooltip'><i class='fas fa-edit'></i></span></a>
                        <a class="accionmenu" href="{{route('tags.delete',$item->id) }}" title='Eliminar Registro' data-toggle='tooltip'><span class='fas fa-trash-alt'></span></a>
                        </td>
                    </tr>
                    @endforeach
                    {{-- {!! QrCode::format('png')->merge('http://127.0.0.1:8000/logo.jpg', .3, true)->generate('Hola') !!} --}}
            </tbody>
            </table>
        @else
            <p class='lead'><em>No hay registros.</em></p>
        @endif
        </div>
      </div>
</x-app-layout>