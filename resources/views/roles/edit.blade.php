@extends('layouts.default')

@section('contenu')
<div class="container mt-5">
    <h1>Edit Role</h1>
    <form action="{{ route('roles.update', $role->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="label">Role Label</label>
        <input type="text" class="form-control" id="label" name="label" value="{{ $role->label }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Update Role</button>
</form>

</div>
@endsection
























































































































































