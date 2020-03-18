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
                    ->orderBy('RoomType.TypeName')
                    ->get();
        return view('admin.roomtype.index',compact('roomtype'));
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
            'TypeName'=>'required',
            'NemberPeople'=>'required',
            'Dormitory_ID'=>'required',

        ]);

        $Roomtype->TypeName = $request->TypeName;
        $Roomtype->NemberPeople = $request->NemberPeople;
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
        return view('admin/roomtype/show',
        ['roomtype' => RoomTypeModel::findOrFail($id)]);
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
                    ->join('Dormitory','Dormitory.id','=','RoomType.Dormitory_ID')
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
            'TypeName'=>'required',
            'NemberPeople'=>'required',
            'Dormitory_ID'=>'required',

        ]);
        DB::table('RoomType')
            ->where('id','=',$id)
            ->update([
            'TypeName' => $request->TypeName,
            'NemberPeople' => $request->NemberPeople,
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
