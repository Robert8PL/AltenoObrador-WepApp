<x-app-layout>
    <div class="container mx-auto w-full p-4 ">
       

        <table class="min-w-full mx-auto bg-white border border-gray-300">
            <thead>
                <tr colspan="4" class=" flex  align-items-start w-full"> 
                    <h1 class="text-2xl font-bold mb-4 mt-5 ml-4 text-teal-500">Pagos registrados este mes</h1>
                    
                </tr>
                <tr>
                    <th class="py-2 px-4 border-b">Cliente</th>
                    <th class="py-2 px-4 border-b">Fecha</th>
                    <th class="py-2 px-4 border-b">Monto</th>
                    <th class="py-2 px-4 border-b">Deuda pendiente</th>
                    
                </tr>
            </thead>
            <tbody>
              {{--   @foreach($clientes as $cliente) --}}
              <tr class="text-center">
                  <td class="py-2 px-4 border-b text-gray-600">{{-- {{ $cliente->nombre }} --}} Jenifer Guadalupe Torres lopez </td>
                  <td class="py-2 px-4 border-b text-gray-600">{{-- {{ $cliente->direccion }} --}}  12 de noviembre del 2023</td>
                <td class="py-2 px-4 border-b  text-blue-500">{{-- {{ $cliente->deuda }} --}} $8,000</td>
                <td class="py-2 px-4 border-b  text-green-500"> $2,000
                </td>
               
            </tr>
                    
               {{--  @endforeach --}}
            </tbody>
        </table>
    </div>

    
</x-app-layout>
