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
        $room = DB::table('Dormitory')
            ->join('Rooms','Dormitory.id','=','Rooms.Dormitory_ID')
            ->join('RoomType','RoomType.Type','=','Rooms.Roomtype_ID')
                // ->orderBy('Dormitory.id')
                // ->orderBy('RoomType.id')
                // ->groupBy('Rooms.RoomCode_ID')
                ->select('*')
                ->whereColumn('RoomType.Dormitory_ID','=','Rooms.Dormitory_ID')
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
        // $room = DB::table('Rooms')->get();
        // $roomtype = RoomTypeModel::orderBy('id')->get();
        // $dormitory = DormitoryModel::orderBy('id')->get();
        // return view('admin.room.create',compact('rooms','roomtype','dormitory'));

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
        // $dormitoryData =DB::table('Dormitory')
        //             ->where('Dormitory.id','=',$id)
        //             ->get();
        $RoomData =DB::table('Dormitory')
                    ->where('Dormitory.id','=',$id)
                    ->get();
        $RoomTypeData = DB::table('RoomType')
                    ->where('RoomType.id','=',$id)
                    ->get();
        $roomtype = DB::table('RoomType')
                    ->join('RoomType','RoomType.id','=','Rooms.Roomtype_ID')
                    ->where('RoomType.id','=',$id)
                    ->get();

        return view('admin/roomtype/show',
                compact('roomtype','RoomTypeData','DormitoryData'));
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
