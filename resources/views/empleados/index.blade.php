@include('/recursos/navbar')

<div class="container mx-auto p-4 mt-20">
    <a class="bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-700 mb-4"
        href="{{ url('/empleados/create') }}" class="text-white text-sm px-5 py-2.5 text-center me-2 mb-2"
        style="background-color: #e50881;">
        Añadir nueva empleado
    </a>
</div>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table style="margin:2rem 0rem;" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-center text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">#</th>
                <th scope="col" class="px-6 py-3">Foto</th>
                <th scope="col" class="px-6 py-3">Nombre</th>
                <th scope="col" class="px-6 py-3">Apellido</th>
                <th scope="col" class="px-6 py-3">Correo electrónico</th>
                <th scope="col" class="px-6 py-3">Teléfono</th>
                <th scope="col" class="px-6 py-3">Dirección</th>
                <th scope="col" class="px-6 py-3">Salario</th>
                <th scope="col" class="px-6 py-3">Fecha de Contratación</th>
                <th scope="col" class="px-6 py-3">Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $empleado)
                <tr
                    class="text-center odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $empleado->id }}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <center>
                            <img src="{{ asset('storage/uploads') . '/' . $empleado->foto }}" width="100"
                                alt="imagen del empleado">
                        </center>
                    </th>
                    <td class="px-6 py-4">{{ $empleado->nombre }}</td>
                    <td class="px-6 py-4">{{ $empleado->apellido }}</td>
                    <td class="px-6 py-4">{{ $empleado->email }}</td>
                    <td class="px-6 py-4">{{ $empleado->telefono }}</td>
                    <td class="px-6 py-4">{{ $empleado->direccion }}</td>
                    <td class="px-6 py-4">${{ $empleado->salario }}</td>
                    <td class="px-6 py-4">{{ $empleado->fecha_contratacion }}</td>
                    <td class="px-6 py-4">
                        <a href="{{ URL('/empleados/' . $empleado->id . '/edit') }}">Editar</a>
                        <form action="{{ URL('/empleados/' . $empleado->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <input style="cursor: pointer; color: red" type="submit" value="Eliminar"
                                onclick="return confirm('¿Desas eliminar este Empleado?')" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $empleados->links() }}
</div>