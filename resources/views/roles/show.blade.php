@extends('layouts.default')

@section('contenu')
<div class="container mt-5">
    <h1>Détails du Rôle</h1>
    <div class="card">
        <div class="card-header">
            <h5 class="card-title">ID du Rôle : {{ $role->id }}</h5>
        </div>
        <div class="card-body">
            <p class="card-text"><strong>Label :</strong> {{ $role->label }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('roles.index') }}" class="btn btn-secondary">Retour à la liste</a>
            <a href="{{ route('roles.edit', $role->id) }}" class="btn btn-primary">Modifier</a>
            <form action="{{ route('roles.destroy', $role->id) }}" method="POST" style="display: inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce rôle ?')">Supprimer</button>
            </form>
        </div>
    </div>
</div>
@endsection
