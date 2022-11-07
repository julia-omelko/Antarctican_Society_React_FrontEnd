<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;
use DB;
use Illuminate\Pagination\Paginator;
use Inertia\Inertia;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Paginator::useBootstrap();
        //$stations = DB::select('SELECT * FROM posts');
        $events = Events::all();
        $events = Events::paginate(13);

        //dd($stations);
        return view('pages.events')->with('events', $events);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.createevents');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'Event_Name' => 'required',
            'Start_Date' => 'required',
            'End_Date' => 'required',
        ]);

        //Create post
        $event = new Events;
        $event->Event_ID;
        $event->Event_Name= $request->input('Event_Name');
        $event->Start_Date = $request->input('Start_Date');
        $event->End_Date = $request->input('End_Date');
        $event->save();

        return redirect('/events')->with('success', 'Event Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Event_ID)
    {
        $event = Events::find($Event_ID);
        return view('pages.showevents')->with('event', $event);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Event_ID)
    {
        $event = Events::find($Event_ID);
        return view('pages.editevents')->with('event', $event);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $Event_ID)
    {
            $this->validate($request, [
            'Event_Name' => 'required',
            'Start_Date' => 'required',
            'End_Date' => 'required',
        ]);

        //Update post
        $event = Events::find($Event_ID);
        //$station->Station_ID = $station->Station_ID;
        $event->Event_Name = $request->input('Event_Name');
        $event->Start_Date = $request->input('Start_Date');
        $event->End_Date = $request->input('End_Date');
        $event->save();

        return redirect('/events')->with('success', 'Event Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Event_ID)
    {
        $event = Events::find($Event_ID);
        $event->delete();
        return redirect('/events')->with('success', 'Event Deleted');
    }
}
