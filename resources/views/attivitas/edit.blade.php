{{-- resources/views/attivitas/edit.blade.php --}}

@extends('layouts.app')

@section('content')
<div class="max-w-2xl mx-auto py-6">
    <h1 class="text-3xl font-bold mb-8">Modifica Attività</h1>
    <form action="{{ route('attivitas.update', $attivita->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label for="nome" class="block font-medium text-gray-700">Nome:</label>
            <input type="text" id="nome" name="nome" value="{{ $attivita->nome }}" required
                class="mt-1 p-2 block w-full rounded-md border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
        </div>

        <div>
            <label for="descrizione" class="block font-medium text-gray-700">Descrizione:</label>
            <textarea id="descrizione" name="descrizione" required
                class="mt-1 p-2 block w-full rounded-md border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{ $attivita->descrizione }}</textarea>
        </div>

        <div>
            <label for="progetto_id" class="block font-medium text-gray-700">Progetto:</label>
            <select id="progetto_id" name="progetto_id" required
                class="mt-1 p-2 block w-full rounded-md border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                @foreach ($progetti as $progetto)
                <option value="{{ $progetto->id }}" {{ $attivita->progetto_id == $progetto->id ? 'selected' : '' }}>
                    {{ $progetto->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="flex justify-between items-center">
            
            <a href="{{ url()->previous() }}"
                class="text-gray-600 hover:text-gray-900">Torna Indietro</a>
                <button type="submit"
                class="bg-indigo-500 text-dark py-2 px-4 rounded hover:bg-indigo-600 focus:outline-none focus:bg-indigo-600">
                Aggiorna
            </button>
        </div>
    </form>
</div>
@endsection
