<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BaseController extends Controller
{

    protected $service;

    public function index()
    {
        $results = $this->service->getAll();

        return response()->json([
            'items' => $results->toArray()
        ]);
    }

    /**
     * Show the profile for the given user.
     *
     * @param  int  $id
     * @return View
     */
    public function show($id)
    {
        $result = $this->service->find($id);

        return response()->json($result->toArray());
    }

    public function create(Request $request) {
        $result = $this->service->create($request->toArray());
        
        return response()->json($result ? $result->toArray() : []);
    }

    public function edit(Request $request, $id)
    {
        $data = $request->toArray();
        $result = $this->service->edit($id, $data);

        return response()->json($result ? $result->toArray() : []);
    }

    public function delete($id) {
        $result = $this->service->delete($id);

        return response()->json(['success' => $result]);
    }
}
