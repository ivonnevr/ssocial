@extends('layouts.windmill')
@section('contenido')
    <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
        Formulario de programas
    </h4>
    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">

        <!-- @if($errors->any())
            <div class="min-w-0 p-4 text-white bg-purple-600 rounded-lg shadow-xs">
                <h4 class="mb-4 font-semibold">
                Verifique los campos del formulario
                </h4>
                <p>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </p>
            </div>
        @endif -->

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
                type="text" name="nombre" value="{{ old('nombre') ?? $programa->nombre ?? '' }}"
            />
            @error('nombre')
                <span class="text-xs text-red-600 dark:text-red-400">{{ $message }}</span>
            @enderror
        </label>

        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Dependencia:</span>
            <input
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                type="text" name="dependencia" value="{{ old('dependencia') ?? $programa->dependencia ?? '' }}"
            />
            @error('dependencia')
                <span class="text-xs text-red-600 dark:text-red-400">{{ $message }}</span>
            @enderror
        </label>

        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Calendario:</span>
            <input
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                type="text" name="calendario" value="{{ old('calendario') ?? $programa->calendario ?? '' }}"
            />
            @error('calendario')
                <span class="text-xs text-red-600 dark:text-red-400">{{ $message }}</span>
            @enderror
        </label>

        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Titular:</span>
            <input
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                type="text" name="titular" value="{{ old('titular') ?? $programa->titular ?? '' }}"
            />
            @error('titular')
                <span class="text-xs text-red-600 dark:text-red-400">{{ $message }}</span>
            @enderror
        </label>

        <label class="block text-sm">
            <span class="text-gray-700 dark:text-gray-400">Folio:</span>
            <input
                class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                type="text" name="folio" value="{{ old('folio') ?? $programa->folio ?? '' }}"
            />
            @error('folio')
                <span class="text-xs text-red-600 dark:text-red-400">{{ $message }}</span>
            @enderror
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