<?php

namespace App\Http\Controllers\master;

use App\DataTables\master\ItemDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use App\Models\master\Item;
use App\Models\master\ItemCategory;
use App\Models\master\Measurement;
use App\Models\master\RationCategory;
use App\Models\master\RationType;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ItemDataTable $dataTable)
    {
        return $dataTable->render('master.items.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $measurements = Measurement::get();
        $rationCategories = RationCategory::get();
        $itemCategorys = ItemCategory::get();
        return view('master.items.create', compact('measurements','rationCategories','itemCategorys'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreItemRequest $request)
    {
        Item::create($request->all());
        return redirect()->route('items.index')->with('success','Item Created');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $measurements = Measurement::get();
        $rationCategories = RationCategory::get();
        $itemCategorys = ItemCategory::get();

        $item =  Item::with(['itemCategory', 'measurement', 'rationCategory'])
            ->where('id', $id)
            ->select('id', 'name', 'item_category_id', 'measurement_id', 'ration_category_id')
            ->first();

        return view('master.items.show',compact('item','measurements','rationCategories','itemCategorys'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $measurements = Measurement::get();
        $rationCategories = RationCategory::get();
        $itemCategorys = ItemCategory::get();

        $item =  Item::with(['itemCategory', 'measurement', 'rationCategory'])
            ->where('id', $id)
            ->select('id', 'name', 'item_category_id', 'measurement_id', 'ration_category_id')
            ->first();

        return view('master.items.edit',compact('item','measurements','rationCategories','itemCategorys'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateItemRequest $request, Item $item)
    {
        $item->update($request->toArray());
        return redirect()->route('items.index')->with('message', 'Item Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $items = Item::find($id);
        $items->delete();
        return redirect()->route('items.index')
            ->with('danger', 'Item Deleted successfully');
    }
}
