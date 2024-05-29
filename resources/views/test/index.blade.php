<!-- resources/views/test/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Test</h1>
    <ul>
        @foreach($tests as $test)
            <li>{{ $test->name }}</li>
        @endforeach
    </ul>
</div>
@endsection
