{{-- resources/views/attivitas/create.blade.php --}}

@extends('layouts.app')

@section('content')
<h1>Crea Nuova Attività</h1>
<form action="{{ route('attivitas.store') }}" method="POST">
    @csrf
    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" required>

    <label for="descrizione">Descrizione:</label>
    <textarea id="descrizione" name="descrizione" required></textarea>

    <label for="progetto_id">Progetto:</label>
    <select id="progetto_id" name="progetto_id" required>
        @foreach ($progetti as $progetto)
            <option value="{{ $progetto->id }}">{{ $progetto->nome }}</option>
        @endforeach
    </select>

    <button type="submit">Crea</button>
</form>
@endsection
