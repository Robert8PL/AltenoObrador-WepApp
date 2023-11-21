<x-app-layout>
    <h1 class="text-3xl mt-8 ml-10 text-teal-600">Hay pedidos pendientes</h1>
<div class=" my-12 mx-12 border-2 border-shadow-md rounded-lg border-teal-600 antialiased" >

   

   <h2 class="text-3xl mt-3 ml-10  mb-6 text-blue-600 ">Pedido #1</h2>
   <p class="ml-16"> Mercancia: 
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

       <x-button class="m-5 ml-12 w-3/6 flex  justify-center">Empacar el pedido</x-button>
       <x-button class="m-5 ml-12 w-3/6 flex  justify-center">Listo para entrgar al carro de reparto</x-button>
       <x-button class="m-5 ml-12 w-3/6 flex  justify-center">Pedido en camino</x-button>
       <x-button class="m-5 ml-12 w-3/6 flex  justify-center">Pedido finalizado</x-button>
    </div>


 


</div>
    
</x-app-layout>
