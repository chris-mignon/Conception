@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Upload Assignment</h2>
    <form method="POST" action="/assignments" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Title</label>
            <input name="title" class="form-control" required>
        </div>
        <div class="mb-3">
            <label>File</label>
            <input name="file" type="file" class="form-control" required>
        </div>
        <button class="btn btn-primary">Upload</button>
    </form>
</div>
@endsection
