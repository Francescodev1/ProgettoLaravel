{{-- resources/views/attivitas/show.blade.php --}}

@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 bg-white border-b border-gray-200">
        <h1 class="text-lg leading-6 font-medium text-gray-900">Dettagli Attività</h1>
        
        <p class="mt-1 text-sm text-gray-600">
            Nome: {{ $attivita->nome }}
        </p>

        <p class="mt-1 text-sm text-gray-600">
            Descrizione: {{ $attivita->descrizione }}
        </p>

        <p class="mt-1 text-sm text-gray-600">
            Progetto: {{ $attivita->progetto ? $attivita->progetto->nome : 'Nessun progetto associato' }}
        </p>

        <!-- Pulsante Torna Indietro -->
        <a href="{{ url()->previous() }}" class=" mt-4 inline-flex items-center px-4 py-2 bg-blue-500 hover:bg-blue-700 border border-cyan-500 text-dark text-sm font-medium rounded-md">
            Torna Indietro
        </a>
    </div>
</div>
@endsection
