<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CalendarEvents;

class CalendarEventsController extends Controller
{

    public function index()
    {
        $events = CalendarEvents::select('title', 'call AS start', 'close AS end')->get();
        return json_encode( compact('events')['events'] );
    }


    public function create()
    {
        return view('calendarevents.create');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
             'title' => 'required',
             'call' => 'required',
             'close' => 'required',
        ]);

        $calendarevents = CalendarEvents::create([ 
             'title' => $request->title, 
             'call' => date($request->call),
             'close' => date($request->close)
        ]);

        return redirect('/calendarevents');
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
