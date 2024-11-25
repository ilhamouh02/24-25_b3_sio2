@extends('layouts.default')

@section('contenu')
    <div class="container">
        <h1>Éditer le Rôle</h1>
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <form action="{{ route('roles.update', $role->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nom du Rôle</label>
                <input type="text" name="name" value="{{ $role->name }}" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control">{{ $role->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-success">Mettre à Jour</button>
        </form>
    </div>
@stop
