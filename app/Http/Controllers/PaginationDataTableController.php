<?php

namespace App\Http\Controllers;

use App\Models\PaginationDataTable;
use Illuminate\Http\Request;

class PaginationDataTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("pagination-datatable.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $pdt = new PaginationDataTable();

        for ($i = 1; $i <= 5000; $i++) {
            // $pdt->name = $faker->name;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PaginationDataTable  $paginationDataTable
     * @return \Illuminate\Http\Response
     */
    public function show(PaginationDataTable $paginationDataTable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PaginationDataTable  $paginationDataTable
     * @return \Illuminate\Http\Response
     */
    public function edit(PaginationDataTable $paginationDataTable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PaginationDataTable  $paginationDataTable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaginationDataTable $paginationDataTable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PaginationDataTable  $paginationDataTable
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaginationDataTable $paginationDataTable)
    {
        //
    }
}
