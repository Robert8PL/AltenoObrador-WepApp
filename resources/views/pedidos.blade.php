<x-app-layout>

    {{-- modal elim pedidos --}}

    <div class="custom-modal m-delete-clientes w-full p-2 h-full hidden left-0 top-0 backdrop-blur-sm ">

        <div class="h-48 bg-gray-200 center-modal relative top-1/4 left-1/4 opacity-75 rounded-xl "> 
                <div class="p-2 pt-5 font-sans text-center">
                    
                    <h3 class="text-2xl text-red-700 font-bold mb-3" id="agregarClientes">Cancelar pedido</h3>
                    <p class="font-bold text-gray-700">¿Esta seguro que desea cancelar?</p>
                    <small class="text-red-500 font-bold">Esta accion es irreversible</small>


                    <form action="" method="post" class="mt-5">
                        @csrf
                        
                                <input type="hidden" name="id_cli" id="cliId" value=""> 
                                <input type="submit" value="Inhabilitar" class="w-40 h-8 bg-red-700 font-sans font-bold text-xl text-white rounded-xl ring-1 ring-red-500 cursor-pointer transition-all hover:bg-red-900  hover:shadow-md hover:ring-2">
                                <button type="button" id="btn-cerrar3"  class="w-40 h-8 ml-5 bg-blue-700 font-sans font-bold text-xl text-white rounded-xl ring-1 ring-gray-500   transition-all hover:bg-blue-900  hover:shadow-md hover:ring-2">Cancelar</button>
                    </form>
                    
                </div>

        </div>
    </div>

    <div class="custom-modal m-add-cliente w-screen h-screen hidden left-0 top-0 backdrop-blur-sm transition">

        <div class="absolute center-modal2 bg-gray-200 opacity-75 rounded-xl "> 
                <div class="p-2 pt-8 font-sans text-center">
                    <h3 class="text-2xl text-gray-800 font-bold">Nuevo pedido</h3>


                    <form action="{{route('clientes.store')}}" method="post" class="mt-5">
                        @csrf
                        <p class="text-xl mb-3 font-bold text-gray-600">Cliente</p>
                        <select id="carnes" name="carnes" class="my-5 w-3/4 bg-transparent border border-gray-300 hover:border-gray-500 px-4 py-2 pr-8 rounded-xl shadow-md leading-tight focus:outline-none focus:shadow-outline-blue focus:border-blue-500">
                            <!-- Aquí puedes usar un bucle para generar las opciones desde tu base de datos -->
                            <option value="1" selected>Seleccione un producto</option>
                            <option value="2">Short Rib</option>
                            <option value="3">Brisket</option>
                            <option value="4">Pierna</option>
                            <option value="4">Lomo</option>
                     <option value="4">Tomahawk</option>

                            <!-- Fin del bucle -->
                        </select>
                       <p class="text-xl mb-3 font-bold text-gray-600">Datos de pedido</p>

                       <div class="flex justify-center align-items-start m-0">

                           <select id="carnes" name="carnes" class="my-5 w-3/4 bg-transparent border border-gray-300 hover:border-gray-500 px-4 py-2 pr-8 rounded-xl shadow-md leading-tight focus:outline-none focus:shadow-outline-blue focus:border-blue-500">
                            <!-- Aquí puedes usar un bucle para generar las opciones desde tu base de datos -->
                            <option value="1" selected>Seleccione un producto</option>
                            <option value="2">Short Rib</option>
                            <option value="3">Brisket</option>
                            <option value="4">Pierna</option>
                            <option value="4">Lomo</option>
                     <option value="4">Tomahawk</option>

                            <!-- Fin del bucle -->
                        </select>
                        <input type="text" id="nombreAdd" name="nombreAdd"  placeholder="Cantidad" class="rounded-xl bg-gray-100 bg-transparent w-1/4 h-1/4 text-center my-auto mb-5">
  
                    </div>
                    
                    <div class="flex justify-center align-items-start m-0">

                        <select id="carnes" name="carnes" class="my-5 w-3/4 bg-transparent border border-gray-300 hover:border-gray-500 px-4 py-2 pr-8 rounded-xl shadow-md leading-tight focus:outline-none focus:shadow-outline-blue focus:border-blue-500">
                         <!-- Aquí puedes usar un bucle para generar las opciones desde tu base de datos -->
                         <option value="1" selected>Seleccione un producto</option>
                         <option value="2">Short Rib</option>
                         <option value="3">Brisket</option>
                         <option value="4">Pierna</option>
                         <option value="4">Lomo</option>
                     <option value="4">Tomahawk</option>

                         <!-- Fin del bucle -->
                     </select>
                     <input type="text" id="nombreAdd" name="nombreAdd"  placeholder="Cantidad" class="rounded-xl bg-gray-100 bg-transparent w-1/4 h-1/4 text-center my-auto mb-5">

                 </div>     <div class="flex justify-center align-items-start m-0">

                    <select id="carnes" name="carnes" class="my-5 w-3/4 bg-transparent border border-gray-300 hover:border-gray-500 px-4 py-2 pr-8 rounded-xl shadow-md leading-tight focus:outline-none focus:shadow-outline-blue focus:border-blue-500">
                     <!-- Aquí puedes usar un bucle para generar las opciones desde tu base de datos -->
                     <option value="1" selected>Seleccione un producto</option>
                     <option value="2">Short Rib</option>
                     <option value="3">Brisket</option>
                     <option value="4">Pierna</option>
                     <option value="4">Lomo</option>
                     <option value="4">Tomahawk</option>
                     <!-- Fin del bucle -->
                 </select>
                 <input type="text" id="nombreAdd" name="nombreAdd"  placeholder="Cantidad" class="rounded-xl bg-gray-100 bg-transparent w-1/4 h-1/4 text-center my-auto mb-5">

             </div>
                      
                            
             <label for="fecha" class="block text-gray-700 font-bold mb-2">Selecciona una fecha:</label>
             <input type="date" id="fecha" name="fecha" class="block w-3/4 bg-transparent border border-gray-300 mb-4 mx-auto hover:border-gray-500 px-4 py-2 pr-8 rounded-xl shadow-md leading-tight focus:outline-none focus:shadow-outline-blue focus:border-blue-500">
          
                        

                                <input type="submit" value="Registrar" id="addCli" class="w-40 h-8 bg-blue-700 font-sans font-bold text-xl text-white rounded-xl ring-1 ring-gray-500 cursor-pointer transition-all hover:bg-blue-900 hover:text-teal-300 hover:shadow-md hover:ring-2  disabled:opacity-25 disabled:cursor-not-allowed">
                                <button type="button" id="btn-cerrar"  class="w-40 h-8 ml-5 bg-red-700 font-sans font-bold text-xl text-white rounded-xl ring-1 ring-red-500   transition-all hover:bg-red-900  hover:shadow-md hover:ring-2">Cancelar</button>
                               
                               <br> <small id="infoAddCli" class="mt-4 font-bold text-red-500"></small>
                            </div>
                    
                    
                        </form>
                </div>
        </div>
    

    <h1 class="text-3xl mt-8 ml-10 mb-10 text-teal-600">Hay pedidos pendientes <x-button class="ml-10" id="agregarCliente">Agregar pedido</x-button></h1>

<div class=" grid sm:grid-cols-1  md:grid-cols-2 xl:grid-cols-3 2xl:grid-cols-4">

        <div class="my-2 mx-2 w-4/6 sm:w-5/6 xl:10/12 sm:mx-7 sm:my-7 border-2 border-shadow-md rounded-lg border-teal-600  antialiased" >

                <h2 class="text-3xl mt-3 ml-10  mb-6 text-blue-600 ">Pedido #1</h2>
                <p class="ml-16 text-gray-600 text-xl"> Mercancia: 
                        <ol class="ml-24 text-gray-600">
                            <li>20K - Short rib - $20,000</li>
                            <li>30k - Tomahawk - $28,000</li>
                            
                        </ol>
                </p>
                <p class="ml-16 text-lg text-red-500">Costo total: $48,000 </p>
                <p class="ml-16 text-green-500 mt-6">Pago: 30,000 </p>
                <p class="ml-16 text-red-900 ">Deuda: $28,000</p>

                <hr class="text-gray-300 border-1 border-gray-400 my-4">
                <h2  class="text-xl mt-3 ml-10 text-blue-600">Detalles del cliente</h2>
                <p class="ml-16 my-2 text-gray-600">Nombre: Jenifer Guadalupe</p>
                <p class="ml-16 my-2 text-gray-600">Direccion:  Av. Juan palomar y arias #548</p>
                <p class="ml-16 my-2 text-gray-600">Pedido realizado el dia: miercoles 15 de noviembre del 2023</p>
                <p class="ml-16 my-2 text-gray-600">Fecha de entrega: Viernes 17 de noviembre del 2023 </p>
                <hr class="text-gray-300 border-1 border-gray-400 my-4">
                
                <h2  class="text-xl mt-3 ml-10 text-blue-600">Estado de la entrega</h2>
                <h3  class="text-md mt-3 ml-10 text-green-600">PASO 1/4 - PEDIDO TOMADO</h3>

                <div class="flex flex-col justify-end align-items-center w-full">
    
                    <x-button class="m-5 mx-auto w-5/6 flex md:w-8/12 justify-center">Empacar el pedido</x-button>
                
                </div>
                <hr class="text-gray-300 border-1 border-gray-400 my-4">

    
                <div class="flex flex-col justify-center align-items-center w-full">
    
                    <h4 class="text-red-500 text-xl mx-auto">¡Cuidado!</h4>
                    <x-button class="m-5 mx-auto w-5/6 flex md:w-8/12 justify-center  bg-yellow-500">Contactar al cliente</x-button>
                    <x-button class="m-5 mx-auto w-5/6 flex md:w-8/12 justify-center eliminarClientes bg-red-700">Cancelar pedido</x-button>
                </div>
        </div>


        <div class="my-2 mx-2 w-4/6 sm:w-5/6 xl:10/12 sm:mx-7 sm:my-7 border-2 border-shadow-md rounded-lg border-teal-600  antialiased" >

            <h2 class="text-3xl mt-3 ml-10  mb-6 text-blue-600 ">Pedido #2</h2>
            <p class="ml-16 text-gray-600 text-xl"> Mercancia: 
                    <ol class="ml-24 text-gray-600">
                        <li>20K - Short rib - $20,000</li>
                        <li>30k - Tomahawk - $28,000</li>
                        
                    </ol>
            </p>
            <p class="ml-16 text-lg text-red-500">Costo total: $48,000 </p>
            <p class="ml-16 text-green-500 mt-6">Pago: 30,000 </p>
            <p class="ml-16 text-red-900 ">Deuda: $28,000</p>

            <hr class="text-gray-300 border-1 border-gray-400 my-4">
            <h2  class="text-xl mt-3 ml-10 text-blue-600">Detalles del cliente</h2>
            <p class="ml-16 my-2 text-gray-600">Nombre: Jenifer Guadalupe</p>
            <p class="ml-16 my-2 text-gray-600">Direccion:  Av. Juan palomar y arias #548</p>
            <p class="ml-16 my-2 text-gray-600">Pedido realizado el dia: miercoles 15 de noviembre del 2023</p>
            <p class="ml-16 my-2 text-gray-600">Fecha de entrega: Viernes 17 de noviembre del 2023 </p>
            <hr class="text-gray-300 border-1 border-gray-400 my-4">
            
            <h2  class="text-xl mt-3 ml-10 text-blue-600">Estado de la entrega</h2>
            <h3  class="text-md mt-3 ml-10 text-green-600">PASO 1/4 - PEDIDO TOMADO</h3>

            <div class="flex flex-col justify-end align-items-center w-full">

                <x-button class="m-5 mx-auto w-5/6 flex md:w-8/12 justify-center">Empacar el pedido</x-button>
            
            </div>
            <hr class="text-gray-300 border-1 border-gray-400 my-4">


            <div class="flex flex-col justify-center align-items-center w-full">

                <h4 class="text-red-500 text-xl mx-auto">¡Cuidado!</h4>
                <x-button class="m-5 mx-auto w-5/6 flex md:w-8/12 justify-center  bg-yellow-500">Contactar al cliente</x-button>
                <x-button class="m-5 mx-auto w-5/6 flex md:w-8/12 justify-center eliminarClientes bg-red-700">Cancelar pedido</x-button>
            </div>
    </div>
    <div class="my-2 mx-2 w-4/6 sm:w-5/6 xl:10/12 sm:mx-7 sm:my-7 border-2 border-shadow-md rounded-lg border-teal-600  antialiased" >

        <h2 class="text-3xl mt-3 ml-10  mb-6 text-blue-600 ">Pedido #3</h2>
        <p class="ml-16 text-gray-600 text-xl"> Mercancia: 
                <ol class="ml-24 text-gray-600">
                    <li>20K - Short rib - $20,000</li>
                    <li>30k - Tomahawk - $28,000</li>
                    
                </ol>
        </p>
        <p class="ml-16 text-lg text-red-500">Costo total: $48,000 </p>
        <p class="ml-16 text-green-500 mt-6">Pago: 30,000 </p>
        <p class="ml-16 text-red-900 ">Deuda: $28,000</p>

        <hr class="text-gray-300 border-1 border-gray-400 my-4">
        <h2  class="text-xl mt-3 ml-10 text-blue-600">Detalles del cliente</h2>
        <p class="ml-16 my-2 text-gray-600">Nombre: Jenifer Guadalupe</p>
        <p class="ml-16 my-2 text-gray-600">Direccion:  Av. Juan palomar y arias #548</p>
        <p class="ml-16 my-2 text-gray-600">Pedido realizado el dia: miercoles 15 de noviembre del 2023</p>
        <p class="ml-16 my-2 text-gray-600">Fecha de entrega: Viernes 17 de noviembre del 2023 </p>
        <hr class="text-gray-300 border-1 border-gray-400 my-4">
        
        <h2  class="text-xl mt-3 ml-10 text-blue-600">Estado de la entrega</h2>
        <h3  class="text-md mt-3 ml-10 text-green-600">PASO 1/4 - PEDIDO TOMADO</h3>

        <div class="flex flex-col justify-end align-items-center w-full">

            <x-button class="m-5 mx-auto w-5/6 flex md:w-8/12 justify-center">Empacar el pedido</x-button>
        
        </div>
        <hr class="text-gray-300 border-1 border-gray-400 my-4">


        <div class="flex flex-col justify-center align-items-center w-full">

            <h4 class="text-red-500 text-xl mx-auto">¡Cuidado!</h4>
            <x-button class="m-5 mx-auto w-5/6 flex md:w-8/12 justify-center  bg-yellow-500">Contactar al cliente</x-button>
            <x-button class="m-5 mx-auto w-5/6 flex md:w-8/12 justify-center eliminarClientes bg-red-700">Cancelar pedido</x-button>
        </div>
</div><div class="my-2 mx-2 w-4/6 sm:w-5/6 xl:10/12 sm:mx-7 sm:my-7 border-2 border-shadow-md rounded-lg border-teal-600  antialiased" >

    <h2 class="text-3xl mt-3 ml-10  mb-6 text-blue-600 ">Pedido #4</h2>
    <p class="ml-16 text-gray-600 text-xl"> Mercancia: 
            <ol class="ml-24 text-gray-600">
                <li>20K - Short rib - $20,000</li>
                <li>30k - Tomahawk - $28,000</li>
                
            </ol>
    </p>
    <p class="ml-16 text-lg text-red-500">Costo total: $48,000 </p>
    <p class="ml-16 text-green-500 mt-6">Pago: 30,000 </p>
    <p class="ml-16 text-red-900 ">Deuda: $28,000</p>

    <hr class="text-gray-300 border-1 border-gray-400 my-4">
    <h2  class="text-xl mt-3 ml-10 text-blue-600">Detalles del cliente</h2>
    <p class="ml-16 my-2 text-gray-600">Nombre: Jenifer Guadalupe</p>
    <p class="ml-16 my-2 text-gray-600">Direccion:  Av. Juan palomar y arias #548</p>
    <p class="ml-16 my-2 text-gray-600">Pedido realizado el dia: miercoles 15 de noviembre del 2023</p>
    <p class="ml-16 my-2 text-gray-600">Fecha de entrega: Viernes 17 de noviembre del 2023 </p>
    <hr class="text-gray-300 border-1 border-gray-400 my-4">
    
    <h2  class="text-xl mt-3 ml-10 text-blue-600">Estado de la entrega</h2>
    <h3  class="text-md mt-3 ml-10 text-green-600">PASO 1/4 - PEDIDO TOMADO</h3>

    <div class="flex flex-col justify-end align-items-center w-full">

        <x-button class="m-5 mx-auto w-5/6 flex md:w-8/12 justify-center">Empacar el pedido</x-button>
    
    </div>
    <hr class="text-gray-300 border-1 border-gray-400 my-4">


    <div class="flex flex-col justify-center align-items-center w-full">

        <h4 class="text-red-500 text-xl mx-auto">¡Cuidado!</h4>
        <x-button class="m-5 mx-auto w-5/6 flex md:w-8/12 justify-center  bg-yellow-500">Contactar al cliente</x-button>
        <x-button class="m-5 mx-auto w-5/6 flex md:w-8/12 justify-center eliminarClientes bg-red-700">Cancelar pedido</x-button>
    </div>
</div>            







</div>  



<script src="{{asset('pedidos.js')}}"></script>
</x-app-layout>
