@extends('layouts.admin')

@section('content')
    <h1><strong>Titolo Progetto: </strong>{{ $project->name }}</h1>
    <p><strong>Status: </strong>{{ $project->status }}</p>

    <div class="badge-tec d-flex">
        <p><strong>Tecnologia: </strong></p>

        @forelse ($project->tecnologies as $tecnology)
            <span class="badge text-bg-info">{{ $tecnology->name }}</span>
        @empty
            -
        @endforelse
    </div>



    <p><strong>Tipo: </strong>{{ $project->type?->name }}</p>
    <div>
        <img src="{{ asset('storage/uploads/' . $project->image) }}" alt="{{ $project->name }}">
        <p>{{ $project->image_original_name }}</p>
    </div>
    <p><strong>Descrizione: </strong>{{ $project->description }}</p>
@endsection
