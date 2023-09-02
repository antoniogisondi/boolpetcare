<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Illness;
use App\Http\Requests\StoreIllnessRequest;
use App\Http\Requests\UpdateIllnessRequest;

class IllnessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $illnesses = Illness::all();
        return view('admin.illness.index', compact('illnesses'));
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
     * @param  \App\Http\Requests\StoreIllnessRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreIllnessRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Illness  $illness
     * @return \Illuminate\Http\Response
     */
    public function show(Illness $illness)
    {
        return view('admin.illnesses.show', compact('illness'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Illness  $illness
     * @return \Illuminate\Http\Response
     */
    public function edit(Illness $illness)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateIllnessRequest  $request
     * @param  \App\Models\Illness  $illness
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateIllnessRequest $request, Illness $illness)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Illness  $illness
     * @return \Illuminate\Http\Response
     */
    public function destroy(Illness $illness)
    {
        //
    }
}
