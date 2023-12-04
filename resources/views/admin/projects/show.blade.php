@extends('layouts.admin')

@section('content')
    <h1><strong>Titolo Progetto: </strong>{{ $project->name }}</h1>
    <p><strong>Status: </strong>{{ $project->status }}</p>

    <div class="d-flex">
        <p><strong>Tecnologia: </strong></p>

        @forelse ($project->tecnologies as $tecnology)
            {{ $tecnology->name }}
        @empty
            -
        @endforelse
    </div>



    <p><strong>Tipo: </strong>{{ $project->type?->name }}</p>
    <p><strong>Descrizione: </strong>{{ $project->description }}</p>
@endsection
