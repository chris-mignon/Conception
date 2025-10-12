<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Assignment;

class AssignmentController extends Controller
{
    public function index() {
        $assignments = Assignment::latest()->paginate(12);
        return view('assignments.index', compact('assignments'));
    }

    public function create() {
        return view('assignments.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'file' => 'required|file|max:10240', // max 10MB
        ]);

        $path = $request->file('file')->store('assignments', 'public');

        $assignment = Assignment::create([
            'title' => $data['title'],
            'file_path' => $path,
            'uploaded_by' => $request->user()->id,
        ]);

        return redirect()->route('assignments.index')->with('success', 'Assignment uploaded.');
    }

    public function download(Assignment $assignment) {
        if (!Storage::disk('public')->exists($assignment->file_path)) {
            abort(404);
        }
        return Storage::disk('public')->download($assignment->file_path, $assignment->title);
    }
}
