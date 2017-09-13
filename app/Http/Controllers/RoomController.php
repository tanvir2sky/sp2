<?php

namespace App\Http\Controllers;

use App\Room;
use App\Room_type;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_data = [
            'header' => 'Showing all room ',
            'sub-header' => 'Aiub Hotel',
        ];
        $rooms = Room::all();
        return view('admin.room.index', compact('page_data','rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $page_data = [
            'header' => 'Add new room',
            'sub-header' => 'Aiub Hotel',
        ];

        $room_types = Room_type::all();
        return view('admin.room.create', compact('page_data','room_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $room = new Room();
        $room->room_type_id = $request->room_type_id;
        $room->status = $request->status;
        $room->save();

        return redirect()->route('room.index')->with('success','Successfully added new room');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {

        $page_data = [
            'header' => 'Edit Room',
            'sub-header' => 'Aiub Hotel',
        ];
        $room = Room::find($room)->first();
        $room_types = Room_type::all();
        return view('admin.room.edit', compact('page_data','room','room_types'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room $room)
    {
        $room = Room::findOrFail($room)->first();
        $room->room_type_id = $request->room_type_id;
        $room->status = $request->status;
        $room->save();

        return redirect()->route('room.index')->with('success','Successfully Updated room');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        //
    }
}
