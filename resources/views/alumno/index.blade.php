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
                    <div class="flex justify-end">

                <a href="{{route('alumno.create')}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Crear</a>

                    </div>
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Codigo
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Apellido Paterno
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Apellido Materno
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nombres
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Direccion
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Fecha Nacimiento
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Edad
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Acciones
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($alumnos as $alumno)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                       {{$alumno->codigo}}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{$alumno->apellido_paterno}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$alumno->apellido_materno}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$alumno->nombres}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$alumno->direccion}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$alumno->fecha_nacimiento}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$alumno->edad}}
                                    </td>
                                    <td class="px-6 py-4 flex justify-center">

                                        <a href="{{route('alumno.edit',$alumno->id)}}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Editar</a>

                                        <form action="{{route('alumno.destroy',$alumno)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                    class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                                                Borrar
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
