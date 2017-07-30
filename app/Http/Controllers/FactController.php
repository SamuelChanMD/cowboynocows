<?php

namespace App\Http\Controllers;

use App\Fact;
use Illuminate\Http\Request;
use Session;

class FactController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('auth:admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $facts = Fact::all();
        return view('facts.index')->with('facts', $facts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('facts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validate
        $this->validate($request, [
            'fact' => 'required|min:3|max:250'
            ]);

        $fact = new Fact;
        $fact->fact = $request->fact;
        $fact->save();

        Session::flash('success', 'Fact successfully added!');
        return redirect()->route('facts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fact  $fact
     * @return \Illuminate\Http\Response
     */
    public function show(Fact $fact)
    {
        //So far, no need to show only one fact
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fact  $fact
     * @return \Illuminate\Http\Response
     */
    public function edit(Fact $fact)
    {
        return view('facts.edit')->with('fact', $fact);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Facts  $facts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fact $fact)
    {
        //Validate
        $this->validate($request, [
            'fact' => 'required|min:3|max:200'
            ]);

        $fact->fact = $request->fact;
        $fact->save();

        Session::flash('success', 'This fact was successfully saved!');

        return redirect()->route('facts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fact  $fact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fact $fact)
    {
        $fact->delete();

        Session::flash('success', 'This fact has been successfully destroyed');

        return redirect()->route('facts.index');
    }
}
