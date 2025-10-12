<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AiController extends Controller
{
    // Simple stub endpoints for AI features (to be wired to actual model/API)
    public function summarize(Request $request) {
        $text = $request->input('text', '');
        // Stub: in production call an LLM or local model
        $summary = substr($text, 0, 300) . (strlen($text) > 300 ? '...' : '');
        return response()->json(['summary' => $summary]);
    }

    public function recommend(Resource $request) {
        // placeholder
        return response()->json(['recommendations' => []]);
    }
}
