<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;
use Inertia\Inertia;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::all();
        $categories = Category::all();

        return Inertia::render('Events/Index', [
            'events' => $events,
            'categories' => $categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Events/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $event = new Event;
        $event->attribute_name = $request->input('attribute_name');
        $event->save();

        return Inertia::render('Events/Index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        return Inertia::render('Events/Show', ['event' => $event]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        return Inertia::render('Events/Edit', ['event' => $event]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Event $event)
    {
        $event->attribute_name = $request->input('attribute_name');
        $event->save();

        return Inertia::render('Events/Index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        $event->delete();

        return Inertia::render('Events/Index');
    }
}
