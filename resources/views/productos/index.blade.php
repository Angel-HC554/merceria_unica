<x-dashboardAdmin>
    <x-slot name="tituloPestaña">
        {{ __('Productos') }}
    </x-slot>
    <x-slot name="tituloSeccion">Productos</x-slot>
    <x-dashboardContenido>
        <x-slot name="titulo">Todos los productos</x-slot>
        <x-slot name="texto"></x-slot>
        <x-slot name="botonLink">{{ route('productos.create') }}</x-slot>
        <x-slot name="botonTexto">Agregar nuevo</x-slot>

        <div class="mb-4">
            <form method="GET" action="{{ route('productos.index') }}">
                <input type="text" name="search" placeholder="Buscar producto..." value="{{ request('search') }}"
                    class="px-4 py-2 border rounded-md w-1/3">
                <button type="submit"
                    class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">Buscar</button>
                <a href="{{ route('productos.index') }}" class="ml-4 text-blue-600 hover:underline">Limpiar búsqueda</a>

            </form>
            @if ($productos->isEmpty())
                <p class="mt-4 text-gray-500">No se encontraron productos con ese nombre.</p>
            @endif

        </div>


        <div class="flow-root">
            <div class="mt-8 overflow-x-auto">
                <div class="inline-block min-w-full py-2 align-middle">
                    <table class="w-full divide-y divide-gray-300">
                        <thead>
                            <tr>
                                <th scope="col"
                                    class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">
                                    No</th>

                                <th scope="col"
                                    class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">
                                    Nombre</th>
                                <th scope="col"
                                    class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">
                                    Precio</th>
                                <th scope="col"
                                    class="py-3 pl-4 pr-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">
                                    Stock</th>

                                <th scope="col"
                                    class="px-3 py-3 text-left text-xs font-semibold uppercase tracking-wide text-gray-500">
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                            @php
                                $i = 0;
                            @endphp
                            @foreach ($productos as $producto)
                                <tr class="even:bg-gray-50">
                                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-semibold text-gray-900">
                                        {{ ++$i }}</td>

                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        {{ $producto->nombre }}</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        {{ $producto->precio }}</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        {{ $producto->stock }}</td>

                                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900">
                                        <form action="{{ route('productos.destroy', $producto->id) }}" method="POST">
                                            <a href="{{ route('productos.show', $producto->id) }}"
                                                class="text-gray-600 font-bold hover:text-gray-900 mr-2">{{ __('Ver') }}</a>
                                            <a href="{{ route('productos.edit', $producto->id) }}"
                                                class="text-indigo-600 font-bold hover:text-indigo-900  mr-2">{{ __('Editar') }}</a>
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{ route('productos.destroy', $producto->id) }}"
                                                class="text-red-600 font-bold hover:text-red-900"
                                                onclick="event.preventDefault(); confirm('Are you sure to delete?') ? this.closest('form').submit() : false;">{{ __('Eliminar') }}</a>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="mt-4 px-4">
                        {!! $productos->withQueryString()->links() !!}
                    </div>
                </div>
            </div>
        </div>
    </x-dashboardContenido>
</x-dashboardAdmin>
