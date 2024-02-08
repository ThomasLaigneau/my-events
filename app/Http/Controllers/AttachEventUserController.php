<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AttachEventUserController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($event_id, $user_id)
    {
        $user = User::find($user_id);
        $event = Event::find($event_id);

        $user->events()->attach($event);
        return redirect()->route('events.show', ['event' => $event]);
    }
}
