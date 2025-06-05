<x-dashboardAdmin>
    <x-slot name="tituloPestaña">Ver producto</x-slot>
    <x-slot name="tituloSeccion">Productos</x-slot>
    <x-dashboardContenido>
        <x-slot name="titulo">Ver Producto</x-slot>
        <x-slot name="texto">Productos\Ver</x-slot>
        <x-slot name="botonLink">{{ route('productos.index') }}</x-slot>
        <x-slot name="botonTexto">Volver</x-slot>

        <div class="flow-root">
            <div class="mt-8 overflow-x-auto">
                <div class="inline-block min-w-full py-2 align-middle">
                    <div class="mt-6 border-t border-gray-100">
                        <dl class="divide-y divide-gray-100">

                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900">Nombre:</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    {{ $producto->nombre }}</dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900">Descripcion:</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    {{ $producto->descripcion }}</dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900">Precio:</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    {{ $producto->precio }}</dd>
                            </div>
                            <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                                <dt class="text-sm font-medium leading-6 text-gray-900">Stock:</dt>
                                <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                                    {{ $producto->stock }}</dd>
                            </div>

                        </dl>
                    </div>
                </div>
            </div>
        </div>
    </x-dashboardContenido>
</x-dashboardAdmin>
