<?php

namespace App\Http\Controllers;

use App\Models\Doc;
use Illuminate\Http\Request;

class DocController extends Controller
{
    public function index()
    {
        return Doc::all();
    }

    public function show($id)
    {
        return Doc::findOrFail($id);
    }

    public function store(Request $request)
    {
        $doc = Doc::create($request->all());
        return response()->json($doc, 201);
    }

    public function update(Request $request, $id)
    {
        $doc = Doc::findOrFail($id);
        $doc->update($request->all());
        return response()->json($doc);
    }

    public function destroy($id)
    {
        Doc::destroy($id);
        return response()->json(null, 204);
    }
}
