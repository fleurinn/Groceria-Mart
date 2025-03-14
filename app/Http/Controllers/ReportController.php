<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    // Tampilkan semua laporan
    public function index()
    {
        $reports = Report::with('user')->latest()->get();
        return response()->json($reports);
    }

    // Simpan laporan baru
    public function store(Request $request)
    {
        $request->validate([
            'report_type' => 'required|in:daily,weekly,monthly,yearly',
            'generated_at' => 'nullable|date'
        ]);

        $report = Report::create([
            'user_id' => Auth::id(),
            'report_type' => $request->report_type,
            'generated_at' => $request->generated_at ?? now()
        ]);

        return response()->json(['message' => 'Report generated successfully!', 'data' => $report]);
    }

    // Tampilkan laporan tertentu
    public function show($id)
    {
        $report = Report::with('user')->findOrFail($id);
        return response()->json($report);
    }

    // Hapus laporan
    public function destroy($id)
    {
        $report = Report::findOrFail($id);

        if ($report->user_id !== Auth::id()) {
            return response()->json(['error' => 'Unauthorized'], 403);
        }

        $report->delete();

        return response()->json(['message' => 'Report deleted successfully!']);
    }
}
