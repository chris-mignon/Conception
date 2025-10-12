@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dashboard</h1>
    <p>Welcome, {{ auth()->user()->name }}</p>
    <a href="/assignments" class="btn btn-outline-primary">View Assignments</a>
</div>
@endsection
