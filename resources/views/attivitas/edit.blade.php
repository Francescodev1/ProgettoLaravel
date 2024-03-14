{{-- resources/views/attivitas/edit.blade.php --}}

@extends('layouts.app')

@section('content')
<h1>Modifica Attività</h1>
<form action="{{ route('attivitas.update', $attivita->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" value="{{ $attivita->nome }}" required>

    <label for="descrizione">Descrizione:</label>
    <textarea id="descrizione" name="descrizione" required>{{ $attivita->descrizione }}</textarea>

    <label for="progetto_id">Progetto:</label>
    <select id="progetto_id" name="progetto_id" required>
        @foreach ($progetti as $progetto)
            <option value="{{ $progetto->id }}" {{ $attivita->progetto_id == $progetto->id ? 'selected' : '' }}>{{ $progetto->nome }}</option>
        @endforeach
    </select>

    <button type="submit">Aggiorna</button>
</form>
@endsection
