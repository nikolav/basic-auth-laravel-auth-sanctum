<?php

namespace App\Http\Controllers;

use App\Models\AppData;
use Illuminate\Http\Request;

class AppDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return [
            "data" => AppData::all()
        ];
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            "name" => "required|unique:app_data,name",
        ]);
        //
        $data = AppData::create([
            "name" =>  $input["name"],
            "value" => $request->input("value", null),
        ]);
        return [
            "data" => $data,
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AppData  $appData
     * @return \Illuminate\Http\Response
     */
    public function show(AppData $appData)
    {
        //
        return [
            "data" => $appData,
        ];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AppData  $appData
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AppData $appData)
    {
        //
        $name  = $request->input("name", null);
        $value = $request->input("value", null);
        if (null != $name)  $appData->name  = $name;
        if (null != $value) $appData->value = $value;

        $appData->save();

        return [
            "data" => $appData,
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AppData  $appData
     * @return \Illuminate\Http\Response
     */
    public function destroy(AppData $appData)
    {
        //
        $appData->delete();
        return [
            "data" => $appData,
        ];
    }
    public function byName ($name) {
        $data = AppData::where("name", $name)->first();
        return [
            "data" => $data,
        ];
    }
}
