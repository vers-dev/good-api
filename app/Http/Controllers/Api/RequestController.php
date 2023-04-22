<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\ResponseController;
use App\Http\Requests\Request\StoreRequest;
use App\Http\Resources\Request\RequestCollection;
use App\Http\Resources\Request\RequestResource;
use App\Models\Request as RequestAlias;
use Illuminate\Http\Request;

class RequestController extends ResponseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $requests = new RequestCollection(RequestAlias::query()->paginate(50));

        return $this->sendResponse($requests, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
