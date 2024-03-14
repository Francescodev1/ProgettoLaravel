{{-- resources/views/progetti/edit.blade.php --}}

@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto sm:px-6 lg:px-8 py-12">
    <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
            <h1 class="text-lg leading-6 font-medium text-gray-900">
                Modifica Progetto: {{ $progetto->nome }}
            </h1>
        </div>
        <div class="border-t border-gray-200">
            <form action="{{ route('progetti.update', $progetto->id) }}" method="POST" class="p-6">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="nome" class="block text-sm font-medium text-gray-700">Nome:</label>
                    <input type="text" id="nome" name="nome" value="{{ $progetto->nome }}" required
                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="mb-4">
                    <label for="descrizione" class="block text-sm font-medium text-gray-700">Descrizione:</label>
                    <textarea id="descrizione" name="descrizione" required
                              class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{ $progetto->descrizione }}</textarea>
                </div>

                <div class="mb-4">
                    <label for="data_inizio" class="block text-sm font-medium text-gray-700">Data Inizio:</label>
                    <input type="date" id="data_inizio" name="data_inizio" value="{{ $progetto->data_inizio->format('Y-m-d') }}" required
                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="mb-4">
                    <label for="data_fine" class="block text-sm font-medium text-gray-700">Data Fine:</label>
                    <input type="date" id="data_fine" name="data_fine" value="{{ $progetto->data_fine ? $progetto->data_fine->format('Y-m-d') : '' }}"
                           class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <button type="submit"
                        class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-dark bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Aggiorna
                </button>
            </form>
        </div>
        <a href="{{ url()->previous() }}" class="inline-flex items-center px-4 py-2 bg-gray-600 hover:bg-gray-800 text-dark text-base font-medium rounded-md">
                &larr; Torna Indietro
        </a>
    </div>
</div>
@endsection
