<?php

namespace App\Http\Controllers;

use App\Contestants;
use Illuminate\Http\Request;

class ContestantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contestants = Contestants::All();
        return view('be/contestants/list', ['contestants'=>$contestants]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('be/contestants/add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contestants  $contestants
     * @return \Illuminate\Http\Response
     */
    public function show(Contestants $contestants)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contestants  $contestants
     * @return \Illuminate\Http\Response
     */
    public function edit(Contestants $contestants)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contestants  $contestants
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contestants $contestants)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contestants  $contestants
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contestants $contestants)
    {
        //
    }
}
