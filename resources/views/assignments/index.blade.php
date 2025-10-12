@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Assignments</h2>
    <a href="/assignments/create" class="btn btn-primary mb-3">Upload Assignment</a>

    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="list-group">
    @foreach($assignments as $a)
      <div class="list-group-item d-flex justify-content-between align-items-center">
        <div>{{ $a->title }} <small class="text-muted">uploaded {{ $a->created_at->diffForHumans() }}</small></div>
        <a class="btn btn-sm btn-outline-secondary" href="/assignments/{{ $a->id }}/download">Download</a>
      </div>
    @endforeach
    </div>

    <div class="mt-3">{{ $assignments->links() }}</div>
</div>
@endsection
