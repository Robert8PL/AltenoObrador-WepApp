<x-app-layout>
   
  
      <div class="container mx-auto w-full p-4 ">
       
        <h1 class="text-2xl font-bold text-teal-500 mb-4 mt-5 ml-4">Lista de Clientes  <x-button class="ml-12" id="agregarClientes">Agregar</x-button></h1>

        {{-- Modal para agregar clientes --}}
       
        <div class="custom-modal m-clientes w-screen h-screen hidden left-0 top-0 backdrop-blur-sm transition">

            <div class="w-2/6 h-3/5 bg-gray-200 relative top-1/4 left-1/4 opacity-75 rounded-xl "> 
                    <div class="p-2 pt-8 font-sans text-center">
                        <h3 class="text-2xl text-gray-800 font-bold">Agregar un cliente</h3>


                        <form action="" method="post" class="mt-5">
                            <input type="text" id="nombre" placeholder="Nombre" class="rounded-xl bg-gray-100 bg-transparent w-3/4 text-center mb-5">
                            <input type="text" id="Telefono" placeholder="Telefono" class="rounded-xl bg-gray-100 bg-transparent w-3/4 text-center mb-5">
                            <input type="text" id="correo" placeholder="Correo electronico" class="rounded-xl bg-gray-100 bg-transparent w-3/4 text-center mb-5">
                            <input type="text" id="dir" placeholder="Dirección" class="rounded-xl bg-gray-100 bg-transparent w-3/4 text-center mb-2"> <br>
                               
                                <input type="checkbox" name="activo" id="activo" class="my-8">
                                <label for="activo">Habilitar al cliente</label> <br>

                            

                                    <input type="submit" value="Registrar" class="w-40 h-8 bg-blue-700 font-sans font-bold text-xl text-white rounded-xl ring-1 ring-gray-500 cursor-pointer transition-all hover:bg-blue-900 hover:text-teal-300 hover:shadow-md hover:ring-2">
                                    <button type="button" id="btn-cerrar"  class="w-40 h-8 ml-5 bg-red-700 font-sans font-bold text-xl text-white rounded-xl ring-1 ring-red-500   transition-all hover:bg-red-900  hover:shadow-md hover:ring-2">Cancelar</button>
                                </div>
                        </form>

                    </div>
            </div>

                {{-- Modal para editar clientes --}}

                <div class="custom-modal m-edit-clientes w-screen h-screen hidden left-0 top-0 backdrop-blur-sm transition">

                    <div class="w-2/6 h-3/6 bg-gray-200 relative top-1/4 left-1/4 opacity-75 rounded-xl "> 
                            <div class="p-2 pt-8 font-sans text-center">
                                <h3 class="text-2xl text-gray-800 font-bold">Editar cliente</h3>
        
        
                                <form action="" method="update" class="mt-5">
                                    <input type="text" id="nombre" placeholder="Nombre" class="rounded-xl bg-gray-100 bg-transparent w-3/4 text-center mb-5">
                                    <input type="text" id="dir" placeholder="Dirección" class="rounded-xl bg-gray-100 bg-transparent w-3/4 text-center mb-5"> 
                                    <input type="text" id="Telefono" placeholder="Telefono" class="rounded-xl bg-gray-100 bg-transparent w-3/4 text-center mb-5">
                                    <input type="text" id="correo" placeholder="Correo electronico" class="rounded-xl bg-gray-100 bg-transparent w-3/4 text-center mb-5">
                                    <br>
                                    
                                            <input type="submit" value="Registrar" class="w-40 h-8 bg-blue-700 font-sans font-bold text-xl text-white rounded-xl ring-1 ring-gray-500 cursor-pointer transition-all hover:bg-blue-900 hover:text-teal-300 hover:shadow-md hover:ring-2">
                                            <button type="button" id="btn-cerrar2"  class="w-40 h-8 ml-5 bg-red-700 font-sans font-bold text-xl text-white rounded-xl ring-1 ring-red-500   transition-all hover:bg-red-900  hover:shadow-md hover:ring-2">Cancelar</button>
                                        </div>
                                </form>
        
                            </div>
                    </div>


                    {{-- Modal inhabilitar clientes --}}

                    <div class="custom-modal m-delete-clientes w-full p-2 h-full hidden left-0 top-0 backdrop-blur-sm transition">

                        <div class="w-2/5 h-48 bg-gray-200 relative top-1/4 left-1/4 opacity-75 rounded-xl "> 
                                <div class="p-2 pt-5 font-sans text-center">
                                    
                                    <h3 class="text-2xl text-red-700 font-bold mb-3">Inhabilitar cliente</h3>
                                    <p class="font-bold text-gray-700">¿Esta seguro que desea deshabilitar el cliente?</p>
                                    <small class="text-green-800 font-bold">Podrá habilitarlo de nuevo en cualquier momento</small>

            
                                    <form action="" method="delete" class="mt-5">
                                                <input type="submit" value="Eliminar" class="w-40 h-8 bg-red-700 font-sans font-bold text-xl text-white rounded-xl ring-1 ring-red-500 cursor-pointer transition-all hover:bg-red-900  hover:shadow-md hover:ring-2">
                                                <button type="button" id="btn-cerrar3"  class="w-40 h-8 ml-5 bg-blue-700 font-sans font-bold text-xl text-white rounded-xl ring-1 ring-gray-500   transition-all hover:bg-blue-900  hover:shadow-md hover:ring-2">Cancelar</button>
                                    </form>
                                    
                                </div>
            
                        </div>
                    </div>


        </div>
        <table class="w-3/4 mx-auto bg-white border border-gray-300">
            <thead>
               

                <tr class="bg-gray-800 text-white">
                    <th class="py-2 px-4 border-b">Cliente</th>
                    <th class="py-2 px-4 border-b">Dirección</th>
                    <th class="py-2 px-4 border-b">Deuda</th>
                    <th class="py-2 px-4 border-b">Estado</th>
                    <th class="py-2 px-4 border-b">Acciones</th>
                </tr>
            </thead>
            <tbody>
              {{--   @foreach($clientes as $cliente) --}}
              <tr class="text-center">
                <td class="py-2 px-4 border-b">{{-- {{ $cliente->nombre }} --}} Jenifer Guadalupe Torres lopez </td>
                <td class="py-2 px-4 border-b">{{-- {{ $cliente->direccion }} --}}  Av. Juan palomar y arias #548</td>
                <td class="py-2 px-4 border-b text-green-500">{{-- {{ $cliente->deuda }} --}} $10,000 / $50,000</td>
                <td class="py-2 px-4 border-b">
                    <span class="{{-- {{ $cliente->estado ? 'text-green-500' : 'text-red-500' }} --}} text-green-500">
                       {{--  {{ $cliente->estado ? 'Activo' : 'Inactivo' }} --}} ACTIVO
                    </span>
                </td>
                <td class="border-b"> <x-button class="bg-yellow-500" id="editarClientes">Editar</x-button>
                <x-button class="bg-red-500" id="eliminarClientes">Eliminar</x-button>
                </td>
            </tr>
                    <tr class="text-center">
                        <td class="py-2 px-4 border-b">{{-- {{ $cliente->nombre }} --}} Juan Hernandez</td>
                        <td class="py-2 px-4 border-b">{{-- {{ $cliente->direccion }} --}}  Av. Juan palomar y arias #556</td>
                        <td class="py-2 px-4 border-b text-yellow-500">{{-- {{ $cliente->deuda }} --}} $28,000 / $50,000</td>
                        <td class="py-2 px-4 border-b">
                            <span class="{{-- {{ $cliente->estado ? 'text-green-500' : 'text-red-500' }} --}} text-green-500">
                               {{--  {{ $cliente->estado ? 'Activo' : 'Inactivo' }} --}} ACTIVO
                            </span>
                        </td>
                        <td class="border-b"> <x-button class="bg-yellow-500">Editar</x-button>
                        <x-button class="bg-red-500">Eliminar</x-button>
                        </td>
                    </tr>

                    <tr class="text-center">
                        <td class="py-2 px-4 border-b">{{-- {{ $cliente->nombre }} --}} Alonso Gimenez</td>
                        <td class="py-2 px-4 border-b">{{-- {{ $cliente->direccion }} --}}  Av. Golfo de cortes #3954</td>
                        <td class="py-2 px-4 border-b text-red-500">{{-- {{ $cliente->deuda }} --}} $45,000 / $50,000</td>
                        <td class="py-2 px-4 border-b">
                            <span class="{{-- {{ $cliente->estado ? 'text-green-500' : 'text-red-500' }} --}} text-green-500">
                               {{--  {{ $cliente->estado ? 'Activo' : 'Inactivo' }} --}} ACTIVO
                            </span>
                        </td>
                        <td class="border-b"> <x-button class="bg-yellow-500">Editar</x-button>
                        <x-button class="bg-red-500">Eliminar</x-button>
                        </td>
                    </tr>

                    <tr class="text-center">
                        <td class="py-2 px-4 border-b">{{-- {{ $cliente->nombre }} --}} Adolfo Lopez Acosta</td>
                        <td class="py-2 px-4 border-b">{{-- {{ $cliente->direccion }} --}}  Av. Mariano otero #895</td>
                        <td class="py-2 px-4 border-b text-blue-500">{{-- {{ $cliente->deuda }} --}} $0 / $50,000</td>
                        <td class="py-2 px-4 border-b">
                            <span class="{{-- {{ $cliente->estado ? 'text-green-500' : 'text-red-500' }} --}} text-green-500">
                               {{--  {{ $cliente->estado ? 'Activo' : 'Inactivo' }} --}} ACTIVO
                            </span>
                        </td>
                        <td class="border-b"> <x-button class="bg-yellow-500">Editar</x-button>
                        <x-button class="bg-red-500">Eliminar</x-button>
                        </td>
                    </tr>
               {{--  @endforeach --}}
            </tbody>
        </table>
    </div>



  </x-app-layout>