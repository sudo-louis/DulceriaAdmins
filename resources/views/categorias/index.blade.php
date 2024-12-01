@include('/recursos/navbar')

<div class="container mx-auto p-4 mt-20">
    <a class="bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-blue-700 mb-4"
        href="{{ url('/categorias/create') }}"
        class="text-white text-sm px-5 py-2.5 text-center me-2 mb-2" style="background-color: #e50881;">
        Añadir nueva categoria
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
                    Nombre de la Categoría
                </th>
                <th scope="col" class="px-6 py-3">
                    Acción
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categorias as $categoria)
                <tr
                    class="text-center odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $categoria->id }}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <center>
                            <img src="{{ asset('storage/uploads') . '/' . $categoria->foto }}" width="100"
                                alt="imagen de la categoria">
                        </center>
                    </th>
                    <td class="px-6 py-4">
                        {{ $categoria->nombre_categoria }}
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{ URL('/categorias/' . $categoria->id . '/edit') }}">Editar</a>
                        <form action="{{ URL('/categorias/' . $categoria->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input style="cursor: pointer; color: red" type="submit" value="Eliminar"
                                onclick="return confirm('¿Desas eliminar este categoria?')" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $categorias->links() }}
</div>