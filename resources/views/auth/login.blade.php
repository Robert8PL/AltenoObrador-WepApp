<x-guest-layout  styles="p-4 flex justify-center align-items-center h-screen bg-gray">
  
   

        <x-validation-errors class="mb-4 " />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        

        <div class="w-full h-4/6 m-8 flex justify-between sm:max-w-xl bg-white shadow-lg overflow-hidden sm:rounded-lg">
            <form method="POST" action="{{ route('login') }}" class="w-fit p-6">
                <h1 class="m-4 mb-6 text-2xl">Ingresar al sistema</h1>
             @csrf
                <div>
                    <label class="block font-medium text-sm text-gray-700" for="email">
        Correo electroníco
    </label>
                    <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" id="email" type="email" name="email" required="required" autofocus="autofocus" :value="old('email')">
                </div>
    
                <div class="mt-4">
                    <label class="block font-medium text-sm text-gray-700" for="password">
        Contraseña
    </label>
                    <input class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm block mt-1 w-full" id="password" type="password" name="password" required="required" autocomplete="current-password">
                </div>
    
                <div class="block mt-4">
                    <label for="remember_me" class="flex items-center">
                        <input type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" id="remember_me" name="remember">
                        <span class="ml-2 text-sm text-gray-600">¿Recordar datos?</span>
                    </label>
                </div>
    
                <div class="flex items-center justify-end mt-4">
                    
    
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150 mx-auto">
        Acceder
    </button>
                </div>
                
            </form>
            <div class="ml-auto">
             
                <img src="{{asset('img/loginImg.jpg')}}"  class="ms-4 h-full w-64">
            </div>
        </div> 



       {{--  <form method="POST"  action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Correo electroníco') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Contraseña') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('¿Recordar datos?') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
              

                <x-button class="ml-4">
                    {{ __('Ingresar') }}
                </x-button>
            </div>
            
        </form>
        <div class="ml-auto">
            <!-- Contenido del nuevo div -->
            <!-- Puedes colocar aquí cualquier contenido que desees mostrar en el lado derecho -->
            <img src="{{ asset('img/loginImg.jpg') }}" alt="">
        </div> --}}
    
 
</x-guest-layout>
