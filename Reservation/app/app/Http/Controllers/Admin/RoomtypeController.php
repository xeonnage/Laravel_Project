<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DormitoryModel;
use App\RoomTypeModel;
use DB;


class RoomTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roomtype = DB::table('RoomType')
                    ->join('Dormitory','Dormitory.id','=','RoomType.Dormitory_ID')
                    ->orderBy('Dormitory.id')
                    ->orderBy('RoomType.Type')
                    ->select("*","RoomType.id as roomTypeId")
                    ->get();
        return view('admin.roomtype.index',compact('roomtype'));
        // return view('admin.dormitory.show',compact('roomtype','dormitory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roomtype = DB::table('RoomType')->get();
        $dormitory = DormitoryModel::orderBy('id')->get();
        return view('admin.roomtype.create',compact('roomtype','dormitory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Roomtype = new RoomTypeModel;

        $request->validate([
            'Type'=>'required',
            'NumberPeople'=>'required',
            'Dormitory_ID'=>'required',

        ]);

        $Roomtype->Type = $request->Type;
        $Roomtype->NumberPeople = $request->NumberPeople;
        $Roomtype->Dormitory_ID = $request->Dormitory_ID;

        $Roomtype->save();
        return redirect('admin/roomtype');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $DormitoryData =DB::table('Dormitory')
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

        // return view('admin/roomtype/show',
        // ['roomtype' => RoomTypeModel::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $roomtype = DB::table('Roomtype')->get();
        // $dormitory = DormitoryModel::orderBy('id')->get();
        // return view('admin.roomtype.edit',compact('roomtype','dormitory'));

        $dormitory = DormitoryModel::orderBy('id')->get();
        $roomtype = DB::table("RoomType")
                    ->where('id','=',$id)
                    ->get();
        return view('admin/roomtype/edit',compact('roomtype','dormitory'));
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
        $request->validate([
            'Type'=>'required',
            'NumberPeople'=>'required',
            'Dormitory_ID'=>'required',

        ]);
        DB::table('RoomType')
            ->where('id','=',$id)
            ->update([
            'Type' => $request->Type,
            'NumberPeople' => $request->NumberPeople,
            'Dormitory_ID' => $request->Dormitory_ID,
        ]);
        return redirect('admin/roomtype');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('RoomType')->where('id','=',$id)->delete();
        return redirect('admin/roomtype');
    }
}
