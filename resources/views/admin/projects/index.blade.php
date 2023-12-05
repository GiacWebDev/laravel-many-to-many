@extends('layouts.admin')

@section('content')
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">Tecnology</th>
                <th scope="col">Tipo</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->name }}</td>
                    <td>

                        @forelse ($project->tecnologies as $tecnology)
                            <span class="badge text-bg-info">{{ $tecnology->name }}</span>
                        @empty
                            -
                        @endforelse

                    </td>
                    <td>{{ $project->type?->name }}</td>

                    <td><a href="{{ route('admin.projects.show', $project) }}" class="btn btn-success"><i
                                class="fa-solid fa-eye" style="color: #ffffff;"></i></a>
                    </td>
                    <td><a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-warning"><i
                                class="fa-solid fa-pen" style="color: #ffffff;"></i></a>
                    </td>
                    <td>
                        @include('admin.partials.form-delete', [
                            'route' => route('admin.projects.destroy', $project),
                            'message' => 'Sei sicuro di voler eliminare questa tecnologia?',
                        ])
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $projects->links() }}
@endsection
