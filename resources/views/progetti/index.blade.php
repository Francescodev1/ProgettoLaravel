{{-- resources/views/progetti/index.blade.php --}}

@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
            <h1 class="text-2xl font-semibold text-gray-800 leading-tight">
                Elenco Progetti
            </h1>

            <a href="{{ route('progetti.create') }}"
               class="mt-4 inline-flex items-center px-4 py-2 bg-green-600 hover:bg-green-800 text-dark text-base font-medium rounded-md">
                Crea Nuovo Progetto +
            </a>

            <ul class="mt-6 space-y-4">
                @foreach ($progetti as $progetto)
                    <li class="border-gray-400 flex flex-row mb-2">
                        <div class="shadow-lg select-none cursor-pointer bg-white rounded-md flex flex-1 items-center p-4 transition duration-500 ease-in-out transform hover:-translate-y-1 hover:shadow-2xl">
                            <div class="flex-1 pl-1 mr-16">
                                <div class="font-medium">
                                    {{ $progetto->nome }}
                                </div>
                                <div class="text-gray-600 text-sm">
                                    {{ $progetto->descrizione }}
                                </div>
                            </div>
                            <div class="text-lg text-right flex items-center">
                                <a href="{{ route('progetti.show', $progetto->id) }}"
                                   class="inline-flex items-center px-3 py-2 border border-yellow-600 text-dark text-sm font-medium rounded-md mr-2">
                                    Visualizza
                                </a>
                                <a href="{{ route('progetti.edit', $progetto->id) }}"
                                   class="inline-flex items-center px-3 py-2  hover:bg-yellow-600 text-dark text-sm font-medium rounded-md mr-2 border border-yellow">
                                    Modifica
                                </a>
                                <form action="{{ route('progetti.destroy', $progetto->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="inline-flex items-center px-3 py-2 bg-red-500 hover:bg-red-700 text-white text-sm font-medium rounded-md"
                                            onclick="return confirm('Sei sicuro di voler eliminare questo progetto?')">
                                        Elimina
                                    </button>
                                </form>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
