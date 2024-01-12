<?php

namespace App\Http\Controllers;

use App\Models\master\Item;
use Illuminate\Http\Request;
use App\Models\master\Location;
use App\Models\master\Supplier;
use App\Models\DemandFromLocation;
use App\Models\master\ReceiptType;
use App\Http\Controllers\Controller;

class ReceiptFromLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(DemandFromLocation $demand_from_location)
    {
        $locations = Location::all();
        $items = Item::all();
        $suppliers = Supplier::all();
        $receiptTypes = ReceiptType::all();

        return view('receipt_from_locations.create', compact('demand_from_location','locations', 'items', 'suppliers','receiptTypes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
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
