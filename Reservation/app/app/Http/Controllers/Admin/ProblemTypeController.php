<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ProblemTypeModel;
use DB;


class ProblemTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $problemtype = DB::table('ProblemType')
                        ->get();
        return view('admin.problemtype.index',compact('problemtype'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/problemtype/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $problemtype = new ProblemTypeModel;

        $request->validate([
            'ProblemName' => 'required',
        ]);

        $problemtype->ProblemName = $request->ProblemName;

        $problemtype->save();
        return redirect('admin/problemtype');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $problemtype = DB::table("ProblemType")
                        ->where('id','=',$id)->get();
        return view('admin/problemtype/edit',compact('problemtype'));
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
            'ProblemName' => 'required',
        ]);

        DB::table('ProblemType')
            ->where('id','=',$id)
            ->update([
            'ProblemName' => $request->ProblemName,
        ]);

        return redirect('admin/problemtype');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('ProblemType')->where('id','=',$id)->delete();
        return redirect('admin/problemtype');
    }
}
