<x-dashboardAdmin>
    <x-slot name="tituloPestaña">Crear Producto</x-slot>
    <x-slot name="tituloSeccion">Productos</x-slot>
    <x-dashboardContenido>
        <x-slot name="titulo">Crear Producto</x-slot>
        <x-slot name="texto">Productos\Crear</x-slot>
        <x-slot name="botonLink">{{ route('productos.index') }}</x-slot>
        <x-slot name="botonTexto">Volver</x-slot>

        <div class="flow-root">
            <div class="mt-8 flex justify-center">
            <div class="max-w-xl py-2 w-full">
                <form method="POST" action="{{ route('productos.store') }}" role="form"
                enctype="multipart/form-data">
                @csrf

                @include('productos.form')
                </form>
            </div>
            </div>
        </div>
    </x-dashboardContenido>
</x-dashboardAdmin>
