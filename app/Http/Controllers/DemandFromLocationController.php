<?php

namespace App\Http\Controllers;

use App\DataTables\DemandFromLocationDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDemandFromLocationRequest;
use App\Http\Requests\UpdateDemandFromLocationRequest;
use App\Models\DemandFromLocation;
use App\Models\master\Item;
use App\Models\master\Location;
use App\Models\master\LocationType;
use App\Models\master\Supplier;
use Illuminate\Http\Request;

class DemandFromLocationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(DemandFromLocationDataTable $dataTable)
    {
        return $dataTable->render('demand_from_locations.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $locations = Location::get();
        $items = Item::get();
        $suppliers = Supplier::get();
        return view('demand_from_locations.create', compact('locations','items','suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDemandFromLocationRequest $request)
    {
        DemandFromLocation::create($request->all());
        return redirect()->route('demand_from_locations.index')->with('success','Demand From Location Created');
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
    public function edit($id)
    {
        $locations = Location::get();
        $items = Item::get();
        $suppliers = Supplier::get();

        $demandFromLocation = DemandFromLocation::with(['item','location','supplier'])
            ->where('id',$id)
            ->first();

        $dateObject = new \DateTime($demandFromLocation->request_date);
        $demandFromLocation->request_date = ($dateObject->format('Y-m-d'));

        return view('demand_from_locations.edit',compact('locations','items','suppliers','demandFromLocation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDemandFromLocationRequest $request, DemandFromLocation $demandFromLocation)
    {
        $demandFromLocation->update($request->toArray());
        return redirect()->route('demand_from_locations.index')->with('success', 'demand From Location Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $demandFromLocation = DemandFromLocation::find($id);
        $demandFromLocation->delete();
        return redirect()->route('demand_from_locations.index')
            ->with('danger', 'Demand from location Deleted successfully');
    }
}
