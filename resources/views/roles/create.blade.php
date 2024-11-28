@extends('layouts.default')

@section('contenu')
<div class="container mt-5">
    <h1>Create New Role</h1>
    <form action="{{ route('roles.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="id">ID:</label>
        <input type="number" name="id" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="label">Label:</label>
        <input type="text" name="label" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>
@endsection
