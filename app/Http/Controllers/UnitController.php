<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Unit;
use Illuminate\Support\Facades\Log;
use Exception;
use App\Http\Requests\Unit\CreateRequest;
use App\Http\Requests\Unit\UpdateRequest;


class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formType="create";
        $units = Unit::orderBy('id','DESC')->paginate();
        return view('unit.index',compact('units','formType'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRequest $request)
    {
        try{
            $userRole = Unit::create($request->all());
            return redirect()->route('unit.index')->with('success', 'Unit is created successfully');
        }catch(Exception $err){

        }
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
    public function edit(Unit $unit)
    {
        $formType="edit";
        $units = Unit::orderBy('id','DESC')->paginate();
        return view('unit.index',compact('units','formType','unit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Unit $unit)
    {
        try{
            $unit->update($request->all());
            return redirect()->route('unit.index')->with('success', 'Unit is updated successfully');
        }catch(Exception $err){
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Unit $unit)
    {
        try{
            $unit->delete();
            return redirect()->route('unit.index')->with('success', 'unit is deleted successfully');
        }catch(QueryException $e){
            return redirect()->back()->withErrors($e->getMessage());
        }
    }
}
