<?php

namespace App\Http\Controllers;

use App\client;
use Illuminate\Http\Request;
use DB;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $client = client::latest()->get();
        return view('client.index',compact('client'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $formType = 'create';
        return view('client.create',compact('formType'));
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
    public function edit(client $client)
    {
        $formType = 'edit';
        return view('client.create',compact('formType','client'));
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
    public function ajaxReceive(Request $request)
    {
        try{

            $name = $request->only('name');
                $name['user_id'] = auth()->user()->id;
                $data = [];
                foreach($request->address as $key => $value){
                    $data[] = [
                        'address' => $request->address[$key],
                        'contact'  => $request->contact[$key]
                    ];
                }
            if(isset($request->draft_id) && $request->draft_id != null){
                info('lloogg');
                $client = client::findOrFail($request->draft_id);
                DB::transaction( function() use ($data, $name,$client ){
                $client->update($name);
                $client->clientdetails()->delete();
                $client->clientdetails()->createMany($data);
                });
            }else{
                info('lloogg2');
                DB::transaction( function() use ($data, $name){
                    $client = client::create($name);
                    $client->clientdetails()->createMany($data);
                });
            }
            
            info('done');
            return 'data has been saved';
        }catch(\Exception $err){
return $err;
info($err);
        }
    }
}
