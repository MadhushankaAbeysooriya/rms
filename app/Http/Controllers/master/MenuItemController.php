<?php

namespace App\Http\Controllers\master;

use App\Models\master\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\master\MenuItemDataTable;

class MenuItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(MenuItemDataTable $dataTable)
    {
        return $dataTable->render('master.menu_items.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $menu = Menu::all();
        
        return view('master.menu_items.create', compact('menu'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
