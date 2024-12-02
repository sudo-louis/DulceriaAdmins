@include('/recursos/navbar')

<h1 style="color: #e50881;" class="text-center m-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">Bienvenido Administrador</h1>
<div class="grid grid-cols-2 md:grid-cols-3 gap-4" style="margin: 4rem 7rem;">
    <div>
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <img class="rounded-t-lg" src="{{url('storage/productos.jpg')}}" alt="" />
            <div class="p-5">
                <h5 style="color: #e50881;" class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    CRUD Productos
                </h5>
                <ul class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    <li>Listar</li>
                    <li>Crear</li>
                    <li>Editar</li>
                    <li>Eliminar</li>
                </ul>
                <a href="{{route('producto')}}"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Ir
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div>
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <img class="rounded-t-lg" src="{{url('storage/categorias.webp')}}" alt="" />
            <div class="p-5">
                <h5 style="color: #e50881;" class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    CRUD Categorías
                </h5>
                </a>
                <ul class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    <li>Listar</li>
                    <li>Crear</li>
                    <li>Editar</li>
                    <li>Eliminar</li>
                </ul>
                <a href="{{route('categoria')}}"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Ir
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div>
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <img class="rounded-t-lg" src="{{url('storage/empleados.webp')}}" alt="" />
            <div class="p-5">
                <h5 style="color: #e50881;" class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                    CRUD Empleados
                </h5>
                </a>
                <ul class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                    <li>Listar</li>
                    <li>Crear</li>
                    <li>Editar</li>
                    <li>Eliminar</li>
                </ul>
                <a href="#"
                    class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Ir
                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>
