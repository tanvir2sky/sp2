<?php

namespace App\Http\Controllers;

use App\Room_type;
use Illuminate\Http\Request;

class RoomTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $page_data = [
            'header' => 'Showing all room types',
            'sub-header' => 'Aiub Hotel',
        ];
        $room_types = Room_type::all();
        return view('admin.room_type.index', compact('page_data', 'room_types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $page_data = [
            'header' => 'Add new room type',
            'sub-header' => 'Aiub Hotel',
        ];
        return view('admin.room_type.create', compact('page_data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getimageName = time() . '.' . $request->images->getClientOriginalExtension();
        $request->images->move(public_path('images'), $getimageName);

        $room_type = new Room_type();
        $room_type->name = $request->name;
        $room_type->description = $request->description;
        $room_type->room_size = $request->room_size;
        $room_type->allocation = $request->allocation;
        $room_type->price = $request->price;
        $room_type->images = $getimageName;

        $room_type->save();

        return redirect()->route('room_type.index')->with('success', 'Successfully added new room type');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Room_type $room_type
     * @return \Illuminate\Http\Response
     */
    public function show(Room_type $room_type)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Room_type $room_type
     * @return \Illuminate\Http\Response
     */
    public function edit(Room_type $room_type)
    {
        $page_data = [
            'header' => 'Edit room type',
            'sub-header' => 'Aiub Hotel',
        ];

        $room_type = Room_type::findOrFail($room_type)->first();
        return view('admin.room_type.edit', compact('page_data', 'room_type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Room_type $room_type
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Room_type $room_type)
    {
        if (isset($request->images) && $request->hasFile('images')) {
            $getimageName = time() . '.' . $request->images->getClientOriginalExtension();
            $request->images->move(public_path('images'), $getimageName);
        }

        $room_type = Room_type::findOrFail($room_type)->first();
        $room_type->name = $request->name;
        $room_type->description = $request->description;
        $room_type->room_size = $request->room_size;
        $room_type->allocation = $request->allocation;
        $room_type->price = $request->price;
        if (isset($getimageName)) {
            $room_type->images = $getimageName;
        }


        $room_type->save();

        return redirect()->route('room_type.index')->with('success', 'Successfully Updated  room type');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Room_type $room_type
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room_type $room_type)
    {
        //
        $delete_item = Room_type::find($room_type)->first();
        $delete_item->rooms()->delete();
        $file = $delete_item->images;
        $filename = public_path() . '/images/' . $file;
        \File::delete($filename);
        $delete_item->delete();
        return redirect()->route('room_type.index')->with('success', 'Successfully deleted room type item');
    }
}
