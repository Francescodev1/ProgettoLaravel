{{-- resources/views/attivitas/index.blade.php --}}

@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-10">
    <h1 class="text-4xl font-semibold text-gray-800 mb-10 text-center">Lista Attività</h1>
    <div class="flex justify-center mb-8">
        <a href="{{ route('attivitas.create') }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded-lg shadow">
            Aggiungi Attività
        </a>
    </div>
    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <ul class="divide-y divide-gray-200">
            @foreach ($attivitas as $attivita)
            <li class="px-6 py-4 flex justify-between items-center hover:bg-gray-50">
                <div>
                    <p class="text-sm font-medium text-gray-500">Nome Attività:</p>
                    <p class="text-lg text-gray-900">{{ $attivita->nome }}</p>
                    <p class="text-sm font-medium text-gray-500">Descrizione:</p>
                    <p class="text-md text-gray-600">{{ $attivita->descrizione }}</p>
                    <p class="text-sm font-medium text-gray-500">Progetto:</p>
                    <p class="text-md text-gray-600">{{ $attivita->progetto->nome }}</p>
                </div>
                <div class="flex items-center gap-4">
                    <a href="{{ route('attivitas.show', $attivita->id) }}" class="px-4 py-1 text-sm text-blue-600 bg-blue-200 rounded hover:bg-blue-300">Visualizza</a>
                    <a href="{{ route('attivitas.edit', $attivita->id) }}" class="px-4 py-1 text-sm text-yellow-600 bg-yellow-200 rounded hover:bg-yellow-300">Modifica</a>
                    <form action="{{ route('attivitas.destroy', $attivita->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-4 py-1 text-sm text-red-600 bg-red-200 rounded hover:bg-red-300">Elimina</button>
                    </form>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
