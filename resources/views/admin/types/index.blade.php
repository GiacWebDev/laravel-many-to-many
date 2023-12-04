@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-6">


            @if (@session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            @endif

            @if (@session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif


            <form action="{{ route('admin.types.store') }}" method="POST">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Nuovo Type" name="name">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Crea</button>
                </div>
            </form>


            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th scope="col">#ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($types as $type)
                        <tr>
                            <td>{{ $type->id }}</td>
                            <td>
                                <form action="{{ route('admin.types.update', $type) }}" method="POST" id="form-edit">
                                    @csrf
                                    @method('PUT')
                                    <input type="text" class="form-hidden" value="{{ $type->name }}" name="name" />
                                </form>
                            </td>
                            <td>

                                @include('admin.partials.form-delete', [
                                    'route' => route('admin.types.destroy', $type),
                                    'message' => 'Sei sicuro di voler eliminare questo tipo?',
                                ])



                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
