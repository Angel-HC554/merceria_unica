<x-dashboardAdmin>
    <x-slot name="tituloPestaña"> Editar Producto</x-slot>
    <x-slot name="tituloSeccion">Productos</x-slot>
    <x-dashboardContenido>
        <x-slot name="titulo">Editar Producto</x-slot>
        <x-slot name="texto">Productos\Editar</x-slot>
        <x-slot name="botonLink">{{ route('productos.index') }}</x-slot>
        <x-slot name="botonTexto">Volver</x-slot>

        <div class="flow-root">
            <div class="mt-8 flex justify-center">
                <div class="max-w-xl py-2 w-full">
                    <form method="POST" action="{{ route('productos.update', $producto->id) }}" role="form"
                        enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        @csrf
                        @include('productos.form')
                    </form>
                </div>
            </div>
        </div>
    </x-dashboardContenido>
</x-dashboardAdmin>
