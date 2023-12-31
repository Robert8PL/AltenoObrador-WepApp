<x-app-layout>
   
  
      <div class="container mx-auto w-full p-4 ">
       
        <h1 class="text-2xl font-bold text-teal-500 mb-4 mt-5 ml-4">Lista de Clientes  <x-button class="ml-12" id="agregarClientes">Agregar</x-button></h1>

        {{-- Modal para agregar clientes --}}
       
        <div class="custom-modal m-add-cliente w-screen h-screen hidden left-0 top-0 backdrop-blur-sm transition">

            <div class="absolute center-modal bg-gray-200 opacity-75 rounded-xl "> 
                    <div class="p-2 pt-8 font-sans text-center">
                        <h3 class="text-2xl text-gray-800 font-bold">Agregar un cliente</h3>


                        <form action="{{route('clientes.store')}}" method="post" class="mt-5">
                            @csrf
                            <input type="text" id="nombreAdd" name="nombreAdd"  placeholder="Nombre" class="rounded-xl bg-gray-100 bg-transparent w-3/4 text-center mb-5">
                            <input type="tel" id="telefonoAdd" name="telefonoAdd"  maxlength="10" placeholder="Telefono" class="rounded-xl bg-gray-100 bg-transparent w-3/4 text-center mb-5">
                            <input type="email" id="correoAdd" name="correoAdd"  placeholder="Correo electronico (opcional)" class="rounded-xl bg-gray-100 bg-transparent w-3/4 text-center mb-5">
                            <input type="text" id="dirAdd" name="dirAdd"  placeholder="Dirección" class="rounded-xl bg-gray-100 bg-transparent w-3/4 text-center mb-2"> <br>
                               
                                <input type="checkbox" name="activo" id="activo" class="my-8">
                                <label for="activo">Habilitar al cliente</label> <br>

                            

                                    <input type="submit" value="Registrar" id="addCli" class="w-40 h-8 bg-blue-700 font-sans font-bold text-xl text-white rounded-xl ring-1 ring-gray-500 cursor-pointer transition-all hover:bg-blue-900 hover:text-teal-300 hover:shadow-md hover:ring-2  disabled:opacity-25 disabled:cursor-not-allowed">
                                    <button type="button" id="btn-cerrar"  class="w-40 h-8 ml-5 bg-red-700 font-sans font-bold text-xl text-white rounded-xl ring-1 ring-red-500   transition-all hover:bg-red-900  hover:shadow-md hover:ring-2">Cancelar</button>
                                   
                                   <br> <small id="infoAddCli" class="mt-4 font-bold text-red-500"></small>
                                </div>
                        </form>

                    </div>
            </div>

                {{-- Modal para editar clientes --}}

                <div class="custom-modal m-edit-cliente w-screen h-screen hidden top-0 left-0 backdrop-blur-sm">

                    <div class="absolute center-modal bg-gray-200 opacity-75 rounded-xl "> 
                            <div class="p-2 pt-8 font-sans text-center">
                                <h3 class="text-2xl text-gray-800 font-bold">Editar cliente</h3>
        
        
                                <form action="{{route('clientes.update')}}" method="POST" class="mt-5">
                                    @csrf
                                    @method('PUT')
                                    <input type="text" id="nombreEdit"  name="nombreEdit" placeholder="Nombre" class="rounded-xl bg-gray-100 bg-transparent w-3/4 text-center mb-5">
                                    <input type="tel" maxlength="10" id="telefonoEdit" name="telefonoEdit" placeholder="Telefono" class="rounded-xl bg-gray-100 bg-transparent w-3/4 text-center mb-5">
                                    <input type="email" id="correoEdit" name="correoEdit" placeholder="Correo electronico (opcional)" class="rounded-xl bg-gray-100 bg-transparent w-3/4 text-center mb-5">
                                    <input type="text" id="dirEdit" name="dirEdit" placeholder="Dirección" class="rounded-xl bg-gray-100 bg-transparent w-3/4 text-center mb-5"> 
                                    <input type="hidden" name="id_cli" id="id_cli" value="">
                                    <br>
                                    
                                            <input type="submit" value="Editar" id="btnEditCli" class="w-40 h-8 bg-blue-700 font-sans font-bold text-xl text-white rounded-xl ring-1 ring-gray-500 cursor-pointer transition-all hover:bg-blue-900 hover:text-teal-300 hover:shadow-md hover:ring-2  disabled:opacity-25 disabled:cursor-not-allowed">
                                            <button type="button" id="btn-cerrar2"  class="w-40 h-8 ml-5 mb-2 bg-red-700 font-sans font-bold text-xl text-white rounded-xl ring-1 ring-red-500   transition-all hover:bg-red-900  hover:shadow-md hover:ring-2">Cancelar</button>
                                            <br> <small id="infoEditCli" class=" font-bold text-red-500"></small>
                                        </div>
                                </form>
        
                            </div>
                    </div>


                    {{-- Modal inhabilitar clientes --}}

                    <div class="custom-modal m-delete-clientes w-full p-2 h-full hidden left-0 top-0 backdrop-blur-sm transition">

                        <div class="h-48 bg-gray-200 center-modal relative top-1/4 left-1/4 opacity-75 rounded-xl "> 
                                <div class="p-2 pt-5 font-sans text-center">
                                    
                                    <h3 class="text-2xl text-red-700 font-bold mb-3">Inhabilitar cliente</h3>
                                    <p class="font-bold text-gray-700">¿Esta seguro que desea deshabilitar este cliente?</p>
                                    <small class="text-green-800 font-bold">Podrá habilitarlo de nuevo en cualquier momento</small>

            
                                    <form action="{{route('clientes.destroy', ['cliente' => '0'])}}" method="post" class="mt-5">
                                        @csrf
                                        @method('DELETE')
                                                <input type="hidden" name="id_cli" id="cliId" value=""> 
                                                <input type="submit" value="Inhabilitar" class="w-40 h-8 bg-red-700 font-sans font-bold text-xl text-white rounded-xl ring-1 ring-red-500 cursor-pointer transition-all hover:bg-red-900  hover:shadow-md hover:ring-2">
                                                <button type="button" id="btn-cerrar3"  class="w-40 h-8 ml-5 bg-blue-700 font-sans font-bold text-xl text-white rounded-xl ring-1 ring-gray-500   transition-all hover:bg-blue-900  hover:shadow-md hover:ring-2">Cancelar</button>
                                    </form>
                                    
                                </div>
            
                        </div>
                    </div>

                            {{-- Modal habilitar clientes --}}

                    <div class="custom-modal m-enable-clientes w-full p-2 h-full hidden left-0 top-0 backdrop-blur-sm transition">

                        <div class="h-48 bg-gray-200 center-modal relative top-1/4 left-1/4 opacity-75 rounded-xl "> 
                                <div class="p-2 pt-5 font-sans text-center">
                                    
                                    <h3 class="text-2xl text-green-700 font-bold mb-3">Habilitar cliente</h3>
                                    <p class="font-bold text-gray-700">¿Esta seguro que desea habilitar este cliente?</p>
                                    <small class="text-green-800 font-bold">Esta accion de puede deshacer en cualquier momento</small>

            
                                    <form action="{{route('clientes.update')}}" method="post" class="mt-5">
                                        @csrf
                                        @method('put')
                                                <input type="hidden" name="id_cli" id="cliEnaId" value=""> 
                                                <input type="submit" value="Habilitar" class="w-40 h-8 bg-green-700 font-sans font-bold text-xl text-white rounded-xl ring- ring-green-500 cursor-pointer transition-all hover:bg-green-900  hover:shadow-md hover:ring-2">
                                                <button type="button" id="btn-cerrar4"  class="w-40 h-8 ml-5 bg-blue-700 font-sans font-bold text-xl text-white rounded-xl ring-1 ring-gray-500   transition-all hover:bg-blue-900  hover:shadow-md hover:ring-2">Cancelar</button>
                                    </form>
                                    
                                </div>
            
                        </div>
                    </div>

        </div>

        <table class="w-3/4 lg:w-11/12 mx-auto mb-2 bg-white border border-gray-300">
            <thead>
               

                <tr class="bg-gray-800 text-white">
                    <th class="py-2 px-4 border-b">Cliente</th>
                    <th class="py-2 px-4 border-b">Dirección</th>
                    <th class="py-2 px-4 border-b">Contacto</th>
                    <th class="py-2 px-4 border-b">Deuda</th>
                    <th class="py-2 px-4 border-b">Estado</th>
                    <th class="py-2 px-4 border-b">Acciones</th>
                </tr>
            </thead>
            <tbody> 
                 @foreach($clientes as $cliente)
                 <p class="hidden">{{ $deudaEstado = ($cliente->deuda * 100 / 50000) }}</p>
                
                 <tr class="text-center hover:bg-slate-100" id="cl{{$cliente->id}}" 
                    data-nombre="{{$cliente->nombre}}"
                    data-dir="{{$cliente->direccion}}"
                    data-tel="{{$cliente->tel}}"
                    data-correo={{$cliente->email}}
                    >
                     <td class="py-2 px-4 border-b"> {{ $cliente->nombre }}</td>
                     <td class="py-2 px-4 border-b"> {{ $cliente->direccion }}  </td>
                     <td class="py-2 px-4 border-b"> {{ $cliente->tel}} <br> {{$cliente->email}} </td>
                     <td class="py-2 px-4 border-b font-bold text-{{ 
                      $deudaEstado < 25 ? 'blue' : ($deudaEstado < 50 ? 'amber' : 
                      ($deudaEstado < 65 ? 'orange' : 'red'))
                      }}-500"> ${{ $cliente->deuda }} / $50,000 </td>

                <td class="py-2 px-4 border-b font-bold">
                    <span class="{{ ($cliente->estado == 1) ? 'text-green-500' : 'text-red-500' }}">
                         {{ $cliente->estado ? 'ACTIVO' : 'INACTIVO' }} 
                    </span>
                </td>
                <td class="border-b"> <x-button class="bg-yellow-500 my-2 editarClientes" id="{{$cliente->id}}">Editar</x-button>
               @if ($cliente->estado == 0)
                   
               <x-button class="bg-green-500 habilitarClientes mb-1" id="{{$cliente->id}}">Habilitar</x-button>
               @else

               <x-button class="bg-red-500 eliminarClientes mb-1" id="{{$cliente->id}}">Inhabilitar</x-button>
               @endif
               
            
            
                   
               
                </td>
            </tr>
                 @endforeach 
            </tbody>
        </table>
        {{$clientes->links()}}

        <script src="{{asset('cusmComponents.js')}}"></script>
  </x-app-layout>