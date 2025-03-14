<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    /**
     * Menampilkan semua notifikasi berdasarkan user.
     */
    public function index(Request $request)
    {
        $notifications = Notification::where('user_id', $request->user()->id)
            ->orderBy('created_at', 'desc')
            ->get();

        return response()->json($notifications);
    }

    /**
     * Membuat notifikasi baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'transaction_id' => 'nullable|exists:transactions,id',
            'message' => 'required|string',
            'status' => 'required|in:unread,read',
        ]);

        $notification = Notification::create($request->all());

        return response()->json(['message' => 'Notification created successfully!', 'data' => $notification], 201);
    }

    /**
     * Menampilkan detail notifikasi berdasarkan ID.
     */
    public function show($id)
    {
        $notification = Notification::findOrFail($id);
        return response()->json($notification);
    }

    /**
     * Mengupdate status notifikasi menjadi 'read'.
     */
    public function markAsRead($id)
    {
        $notification = Notification::findOrFail($id);
        $notification->update(['status' => 'read']);

        return response()->json(['message' => 'Notification marked as read!', 'data' => $notification]);
    }

    /**
     * Menghapus notifikasi.
     */
    public function destroy($id)
    {
        $notification = Notification::findOrFail($id);
        $notification->delete();

        return response()->json(['message' => 'Notification deleted successfully!']);
    }
}
