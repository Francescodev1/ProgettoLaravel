{{-- resources/views/attivitas/create.blade.php --}}

@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto mt-10 bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-semibold mb-6">Crea Nuova Attività</h1>
    <form action="{{ route('attivitas.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="nome" class="block text-gray-700">Nome:</label>
            <input type="text" id="nome" name="nome" required
                class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-300">
        </div>

        <div class="mb-4">
            <label for="descrizione" class="block text-gray-700">Descrizione:</label>
            <textarea id="descrizione" name="descrizione" required
                class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-300"></textarea>
        </div>

        <div class="mb-4">
            <label for="progetto_id" class="block text-gray-700">Progetto:</label>
            <select id="progetto_id" name="progetto_id" required
                class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-300">
                @foreach ($progetti as $progetto)
                <option value="{{ $progetto->id }}">{{ $progetto->nome }}</option>
                @endforeach
            </select>
        </div>
            <a href="{{ url()->previous() }}"
                class="text-gray-600 hover:text-gray-900">
                Torna Indietro
            </a>

        <button type="submit"
            class="bg-blue-500 hover:bg-blue-600 text-dark font-semibold py-2 px-4 rounded focus:outline-none focus:ring focus:border-blue-300">Crea</button>
    </form>
</div>
@endsection
