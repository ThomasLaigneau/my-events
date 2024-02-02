<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;

class AttachEventUserController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $event_id, $user_id)
    {
        $user = User::find($user_id);
        $event = Event::find($event_id);

        $user->events()->attach($event->id);
    }
}
