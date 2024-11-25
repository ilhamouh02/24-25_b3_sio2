@extends('layouts.default')

@section('contenu')
    <div class="container">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <h1>Détails du Rôle</h1>
        <p><strong>ID :</strong> {{ $role->id }}</p>
        <p><strong>Nom :</strong> {{ $role->name }}</p>
        <p><strong>Description :</strong> {{ $role->description }}</p>
        <a href="{{ route('roles.index') }}" class="btn btn-primary">Retour à la Liste</a>
    </div>
@stop
