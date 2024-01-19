<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;
use Inertia\Inertia;

class EventController extends Controller
{
    public function __invoke(Request $request)
    {
        $events = Event::all();
        $categories = Category::all();

        return Inertia::render('Events/Index', [
            'events' => $events,
            'categories' => $categories,
        ]);
    }
}
