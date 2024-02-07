<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Category;
use Illuminate\Http\Request;
use Inertia\Inertia;

class AttachEventCategoryController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke($event_id, $category_id)
    {
        $category = Category::find($category_id);
        $event = Event::find($event_id);
    
        $event->categories()->attach($category_id); 
        return redirect()->route('events.show', ['event' => $event]);
    }
    
}
