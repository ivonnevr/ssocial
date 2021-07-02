@extends('layouts.windmill')
@section('contenido')
<h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
    Detalle del programa
</h4>

<div class="grid gap-6 mb-8 md:grid-cols-2">
    <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
        <h4 class="mb-4 font-semibold text-gray-600 dark:text-gray-300">
            {{ $programa->nombre }}
        </h4>
        <p class="text-gray-600 dark:text-gray-400">
            <ul>
                <li>Calendario: {{ $programa->calendario }}</li>
                <li>Dependencia: {{ $programa->dependencia }}</li>
                <li>Titular: {{ $programa->titular }}</li>
                <li>Folio: {{ $programa->folio }}</li><br>
                <li>
                    <form action="{{ route('programa.destroy', $programa) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                            type="submit">
                            Eliminar programa
                        </button>
                    </form>
                </li>
            </ul>
        </p>
    </div>
</div>

<div class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
    <a class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
        href="{{ route('programa.index') }}">
        Volver al listado
    </a>
</div>

@endsection