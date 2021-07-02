@extends('layouts.windmill')
@section('contenido')
    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
        Formulario de programas
    </h4>
    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">

        @if(isset($programa))
            <form action="{{ route('programa.update', $programa) }}" method="POST">
                @method('PATCH')
        @else
            <form action="{{ route('programa.store') }}" method="POST">
        @endif

        @csrf
        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Nombre del programa:</span>
            <input
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                type="text" name="nombre" value="{{ $programa->nombre ?? '' }}"
            />
        </label>

        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Dependencia:</span>
            <input
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                type="text" name="dependencia" value="{{ $programa->dependencia ?? '' }}"
            />
        </label>

        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Calendario:</span>
            <input
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                type="text" name="calendario" value="{{ $programa->calendario ?? '' }}"
            />
        </label>

        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Titular:</span>
            <input
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                type="text" name="titular" value="{{ $programa->titular ?? '' }}"
            />
        </label>

        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Folio:</span>
            <input
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                type="text" name="folio" value="{{ $programa->folio ?? '' }}"
            />
        </label>

        <div class="mt-4">
            <button class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                type="submit">
                Guardar
            </button>
        </div>

        </form>
    </div>
@endsection