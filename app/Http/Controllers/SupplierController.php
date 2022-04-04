<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\supplier;
use App\Http\Requests\Supplier\CreateRequest;
use App\Http\Requests\Supplier\UpdateRequest;
use Illuminate\Support\Facades\Log;
use Exception;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supplier = supplier::orderBy('id','DESC')->paginate();
        return view('supplier.index',compact('supplier'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $formType = "create";
        return view('supplier.create',compact('formType'));
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
            $userRole = supplier::create($request->all());
            return redirect()->route('supplier.index')->with('success', 'Supplier is created successfully');
        }catch(Exception $err){
            return redirect()->back()->withInput()->withErrors($e->getMessage());
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
    public function edit(supplier $supplier)
    {
        $formType = "edit";
        return view('supplier.create', compact('formType', 'supplier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, supplier $supplier)
    {
        try{
            $supplier->update($request->all());
            return redirect()->route('supplier.index')->with('success', 'Supplier is updated successfully');
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
    public function destroy(supplier $supplier)
    {
        try{
            $supplier->delete();
            return redirect()->route('supplier.index')->with('message', 'Supplier is deleted successfully');
        }catch(QueryException $e){
            return redirect()->back()->withErrors($e->getMessage());
        }
    }
}
