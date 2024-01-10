<?php

namespace App\Http\Controllers\master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\DataTables\master\QuarterDataTable;
use App\Models\master\Quarter;
use App\Http\Requests\master\StoreQuarterRequest;
use App\Http\Requests\master\UpdateQuarterRequest;

class QuarterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(QuarterDataTable $dataTable)
    {
        return $dataTable->render('master.quarters.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('master.quarters.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreQuarterRequest $request)
    {
        Quarter::create($request->all());
        return redirect()->route('quarters.index')->with('success','Quarter Created');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $quarter = Quarter::find($id);
        return view('master.quarters.show',compact('quarter'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $quarter = Quarter::find($id);
        return view('master.quarters.edit',compact('quarter'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateQuarterRequest $request, Quarter $quarter)
    {
        $quarter->update($request->toArray());
        return redirect()->route('quarters.index')->with('message', 'Quarter Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $quarter = Quarter::find($id);
        $quarter->delete();
        return redirect()->route('quarters.index')
            ->with('danger', 'Quarter Deleted successfully');
    }
}
