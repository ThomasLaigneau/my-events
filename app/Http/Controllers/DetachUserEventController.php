<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;

class DetachUserEventController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $event_id, $user_id)
    {
        $user = User::find($request->user_id);
        $event = Event::find($request->event_id);

        $user->events()->detach($event->id);
    }
}
