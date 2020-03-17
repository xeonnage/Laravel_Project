<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DormitoryModel;
use App\RoomtypeModel;
use DB;

class RoomtypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roomtype = DB::table('Roomtype')
                    ->join('Dormitory','Dormitory.Name_Thai','=','Roomtype.Dormitory_Name')
                    ->orderBy('Dormitory.id')
                    ->orderBy('Roomtype.TypeName')
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
        $roomtype = DB::table('Roomtype')->get();
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
        $Roomtype = new RoomtypeModel;

        $request->validate([
            'TypeName'=>'required',
            'NemberPeople'=>'required',
            'Dormitory_Name'=>'required',

        ]);

        $Roomtype->TypeName = $request->TypeName;
        $Roomtype->NemberPeople = $request->NemberPeople;
        $Roomtype->Dormitory_Name = $request->Dormitory_Name;

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
