{{-- resources/views/progetti/create.blade.php --}}

@extends('layouts.app')

@section('content')
<div class="max-w-lg mx-auto mt-10 bg-white p-6 rounded-lg shadow-md">
    <h1 class="text-2xl font-semibold mb-6">Crea Progetto</h1>
    <form action="{{ route('progetti.store') }}" method="POST">
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
            <label for="data_inizio" class="block text-gray-700">Data di inizio:</label>
            <input type="date" id="data_inizio" name="data_inizio"
                class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-300"
                value="{{ old('data_inizio', isset($progetto) ? $progetto->data_inizio->format('Y-m-d') : '') }}"
                required>
        </div>

        <div class="mb-4">
            <label for="data_fine" class="block text-gray-700">Data Fine:</label>
            <input type="date" id="data_fine" name="data_fine"
                class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:ring focus:border-blue-300">
        </div>

        <div class="flex justify-between items-center">
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-600 text-dark font-semibold py-2 px-4 rounded focus:outline-none focus:ring focus:border-blue-300">Crea</button>
            <a href="{{ route('progetti.index') }}"
                class="text-gray-600 hover:text-gray-800 focus:outline-none focus:underline">Torna
                Indietro</a>
        </div>
    </form>
</div>
@endsection
