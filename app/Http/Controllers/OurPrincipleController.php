<?php

namespace App\Http\Controllers;

use App\Models\OurPrinciple;
use Illuminate\Http\Request;

class OurPrincipleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.principles.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(OurPrinciple $ourPrinciple)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OurPrinciple $ourPrinciple)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OurPrinciple $ourPrinciple)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OurPrinciple $ourPrinciple)
    {
        //
    }
}
