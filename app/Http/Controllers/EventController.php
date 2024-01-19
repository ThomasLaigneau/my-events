<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Inertia\Inertia;

class EventController extends Controller
{
    public function __invoke(Request $request)
    {
        $events = Event::all();
        return Inertia::render('Events/Index', ['events' => $events]);
    }
}
