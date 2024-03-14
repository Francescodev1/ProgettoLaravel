{{-- resources/views/attivitas/index.blade.php --}}

@extends('layouts.app')

@section('content')
<h1>Lista Attività</h1>
<ul>
    @foreach ($attivitas as $attivita)
        <li>
            {{ $attivita->nome }} - {{ $attivita->descrizione }}
            <a href="{{ route('attivitas.show', $attivita->id) }}">Visualizza</a>
            <a href="{{ route('attivitas.edit', $attivita->id) }}">Modifica</a>
            <form action="{{ route('attivitas.destroy', $attivita->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Elimina</button>
            </form>
        </li>
    @endforeach
</ul>
@endsection
