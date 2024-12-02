<div class="mb-5">
    <label for="foto" class="block mb-2 text-sm font-medium text-white dark:text-white">Imágen de la producto: </label>
    @if(isset($producto->foto))
        <img src="{{ asset('storage'.'/'.$producto->foto) }}" width="200" alt="imagen del producto">
    @endif
    <input id="foto" name="foto" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400" type="file">
</div>
<div class="mb-5">
    <label for="nombre" class="block mb-2 text-sm font-medium text-white dark:text-white">Nombre del Producto: </label>
    <input type="text" id="nombre" name="nombre"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        value="{{isset($producto->nombre)?$producto->nombre:''}}" rerquired />
</div>
<div class="mb-5">
    <label for="cantidad" class="block mb-2 text-sm font-medium text-white dark:text-white">Cantidad: </label>
    <input type="number" id="cantidad" name="cantidad" min="1"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        value="{{isset($producto->cantidad)?$producto->cantidad:''}}" rerquired />
</div>
<div class="mb-5">
    <label for="precio" class="block mb-2 text-sm font-medium text-white dark:text-white">Precio: </label>
    <input type="number" id="precio" name="precio" min="1"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        value="{{isset($producto->precio)?$producto->precio:''}}" rerquired />
</div>
<div class="mb-5">
    <label for="descripcion" class="block mb-2 text-sm font-medium text-white dark:text-white">Descripcion del Producto: </label>
    <input type="text" id="descripcion" name="descripcion"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        value="{{isset($producto->descripcion)?$producto->descripcion:''}}" rerquired />
</div>
<div class="mb-5">
    <label class="block mb-2 text-sm font-medium text-white dark:text-white" for="categoria">Selecciona un categoría: </label>
    <select name="categoria_id" id="categoria" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        <option disabled selected>-- Selecciona un categoría --</option>
        @foreach($ctdb as $categoria)
            <option value="{{ $categoria->id }}" {{ (isset($producto->categoria_id) && $producto->categoria_id == $categoria->id) ? 'selected' : '' }}>
                {{ $categoria->nombre_categoria }}
            </option> 
        @endforeach
    </select>    
</div>
<a href="{{URL('/productos')}}" class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Regresar</a>
<button type="submit"
    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Guardar
</button>