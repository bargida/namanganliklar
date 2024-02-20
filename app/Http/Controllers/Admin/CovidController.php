<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\covidInfo;
use Illuminate\Http\Request;

class CovidController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $covidInfos = covidInfo::all();
        return view('admin.covidInfos.index', compact('covidInfos')) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.covidInfos.create') ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->all() ;
        covidInfo::create($requestData) ;
        return redirect()->route('admin.covidInfos.store') ;
    }

    /**
     * Display the specified resource.
     */
    public function show(covidInfo $covidInfo)
    {
        return view('admin.covidInfos.show', compact('covidInfo')) ;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(covidInfo $covidInfo)
    {
        return view('admin.covidInfos.edit',compact('covidInfo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, covidInfo $covidInfo)
    {
        $requestData = $request->all() ;
        $covidInfo->update($requestData) ;
        return redirect()->route('admin.covidInfos.index') ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(covidInfo $covidInfo)
    {
        $covidInfo->delete();
        return redirect()->route('admin.covidInfos.index') ;
    }
}
