{{-- resources/views/progetti/show.blade.php --}}

@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto sm:px-6 lg:px-8 py-12">
    <div class="bg-white shadow overflow-hidden sm:rounded-lg mb-4">
        <div class="px-4 py-5 sm:px-6 flex justify-between items-center">
            <h1 class="text-lg leading-6 font-medium text-gray-900">
                Dettagli Progetto: {{ $progetto->nome }}
            </h1>
            <a href="{{ url()->previous() }}" class="inline-flex items-center px-4 py-2 bg-gray-600 hover:bg-gray-800 text-dark text-base font-medium rounded-md">
                &larr; Torna Indietro
            </a>
        </div>
        <div class="border-t border-gray-200">
            <dl>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Nome
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $progetto->nome }}
                    </dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Descrizione
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $progetto->descrizione }}
                    </dd>
                </div>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Data Inizio
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ \Carbon\Carbon::parse($progetto->data_inizio)->toFormattedDateString() }}
                    </dd>
                </div>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        Data Fine
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $progetto->data_fine ? \Carbon\Carbon::parse($progetto->data_fine)->toFormattedDateString() : 'N/A' }}
                    </dd>
                </div>
            </dl>
        </div>
    </div>
</div>
@endsection
