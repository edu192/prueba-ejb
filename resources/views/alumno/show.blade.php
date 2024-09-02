<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div>
                        Nombre: {{$alumno->nombres}}
                    </div>
                    <div>
                        Apellido Paterno: {{$alumno->apellido_paterno}}
                    </div>
                    <div>
                        Apellido Materno: {{$alumno->apellido_materno}}
                    </div>
                    <div>
                        Direccion: {{$alumno->direccion}}
                    </div>
                    <div>
                        Fecha Nacimiento: {{($alumno->fecha_nacimiento)}}
                    </div>
                    <div>
                        Edad: {{$alumno->edad}}
                    </div>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
