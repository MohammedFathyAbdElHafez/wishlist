<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\AppBaseController;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use App\Http\Resources\ItemResource;
use App\Models\Item;
use Exception;
use Illuminate\Http\Request;

class ItemController extends AppBaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $item = ItemResource::collection(Item::all());
        return $this->sendResponse($item, trans('item.index'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreItemRequest $request)
    {
        //
        $validatedData = $request->validated();

        $item = Item::create($validatedData);
        $itemSource =  new ItemResource($item);
        return $this->sendResponse($itemSource, trans('item.created'));

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $item =  new ItemResource(Item::find($id));
        return $this->sendResponse($item, trans('item.show'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateItemRequest $request, string $id)
    {
        //
        $validatedData = $request->validated();

        $item = Item::find($id);
        $item->update($validatedData);
        $itemSource = new ItemResource($item);
        return $this->sendResponse($itemSource, trans('item.updated'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Item::destroy($id);
        return $this->sendSuccess(trans('item.deleted'));

    }
}
