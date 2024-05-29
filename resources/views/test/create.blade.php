<!-- resources/views/test/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Crear Test</h1>
    <form method="POST" action="{{ route('test.store') }}">
        @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" name="name" class="form-control" id="name" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection
