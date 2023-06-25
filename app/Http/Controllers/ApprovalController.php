<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class ApprovalController extends Controller
{
    public function index()
    {
        $events = Event::all();
        $moreposts = Event::all();
        return view('dashboard', compact('events', 'moreposts'));
    }
    public function changeStatus(Request $request, Event $event)
    {
        $event->update([
            'status' => $request->status,
        ]);
        return redirect()->route('events.approval.index');
    }
}
