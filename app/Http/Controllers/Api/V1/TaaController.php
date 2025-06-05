<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoretaaRequest;
use App\Http\Requests\UpdatetaaRequest;
use App\Http\Resources\TaaResource;
use App\Models\taa;
use Illuminate\Http\Request;

class TaaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return TaaResource::collection(taa::all());
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(StoretaaRequest $request)
    {
        $taa = taa::create($request->validated());

        return TaaResource::make($taa);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //$tas = taa::find($id);
        return TaaResource::make(taa::find($id));


        //return TaaResource::make($taa);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatetaaRequest $request, $id)
    {
        $taa = taa::find($id);
        $taa->update($request->validated());

        return TaaResource::make($taa);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)//taa $taa
    {
        $taa = taa::find($id);
        $taa ->delete();
        return response()->noContent();
    }

    public function complete(Request $request, $id)//Taa $taa
    {
        //
        $taa = taa::find($id);
        $taa->is_complited = $request->is_complited;//??? done
        $taa->save();

        return TaaResource::make($taa);
    }
}
