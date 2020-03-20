<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\RoomModel;
use App\RoomTypeModel;
use App\DormitoryModel;
use DB;
class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $room = DB::table('Rooms')
                ->join('RoomType','RoomType.id','=','Rooms.Roomtype_ID')
                ->join('Dormitory','Dormitory.id','=','RoomType.Dormitory_ID')                ->select('*')
                ->get();
        return view('admin.rooms.index',compact('room'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $room = DB::table('Rooms')->get();
        $roomtype = RoomTypeModel::orderBy('id')->get();
        $dormitory = DormitoryModel::orderBy('id')->get();
        return view('admin.room.create',compact('rooms','roomtype','dormitory'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $room = new RoomTypeModel;

        $request->validate([
            'RoomCode_ID'=>'request',
            'Floor'=>'request',
            'StatusRoom'=>'request',
            'Roomtype_ID'=>'request',

        ]);

        $room->RoomCode_ID = $request->RoomCode_ID;
        $room->Floor = $request->Floor;
        $room->StatusRoom = $request->StatusRoom;
        $room->Roomtype_ID = $request->Roomtype_ID;

        $room->save();
        return redirect('admin/rooms');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
