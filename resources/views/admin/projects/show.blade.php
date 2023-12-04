@extends('layouts.admin')

@section('content')
    <h1><strong>Titolo Progetto: </strong>{{ $project->name }}</h1>
    <p><strong>Status: </strong>{{ $project->status }}</p>
    <p><strong>Tipo: </strong>{{ $project->type->name }}</p>
    <p><strong>Descrizione: </strong>{{ $project->description }}</p>
@endsection
