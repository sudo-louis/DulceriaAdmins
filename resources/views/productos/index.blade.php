@include('/recursos/navbar')

<div class="container mx-auto p-4 mt-20">
    <a class="bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-700 mb-4"
        href="{{ url('/productos/create') }}"
        class="text-white text-sm px-5 py-2.5 text-center me-2 mb-2" style="background-color: #e50881;">
        Añadir nueva producto
    </a>
</div>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table style="margin:2rem 0rem;" class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-center text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    #
                </th>
                <th scope="col" class="px-6 py-3">
                    Foto
                </th>
                <th scope="col" class="px-6 py-3">
                    Nombre
                </th>
                <th scope="col" class="px-6 py-3">
                    Cantidad
                </th>
                <th scope="col" class="px-6 py-3">
                    Precio
                </th>
                <th scope="col" class="px-6 py-3">
                    Descripcion
                </th>
                <th scope="col" class="px-6 py-3">
                    Categoría
                </th>
                <th scope="col" class="px-6 py-3">
                    Acción
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr
                    class="text-center odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $producto->id }}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <center>
                            <img src="{{ asset('storage/uploads') . '/' . $producto->foto }}" width="100"
                                alt="imagen de la producto">
                        </center>
                    </th>
                    <td class="px-6 py-4">
                        {{ $producto->nombre }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $producto->cantidad }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $producto->precio }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $producto->descripcion }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $producto->categoria_id }}
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{ URL('/productos/' . $producto->id . '/edit') }}">Editar</a>
                        <form action="{{ URL('/productos/' . $producto->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input style="cursor: pointer; color: red" type="submit" value="Eliminar"
                                onclick="return confirm('¿Desas eliminar este producto?')" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $productos->links() }}
</div>