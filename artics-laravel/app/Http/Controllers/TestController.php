<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;
use App\Http\Resources\Test as TestResource;
class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return TestResource::collection(Test::all());
    }

public function affiche() {
     return view('Test');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only(['review','client_id','testday_id', 'bike_id', 'endTime', 'startTime']) ;
        // todo : validation
        $Test = Test::create($data);
        // cration des dépendance
        return new TestResource($Test);
    }

    public function create() {
        return view('AddTest');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Test  $Test
     * @return \Illuminate\Http\Response
     */
    public function show(Test $Test)
    {
        return new TestResource($Test);
    }

    public function afficheproduit(Test $Test) {

        return view('Test');
}
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Test  $Test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Test $Test)
    {
        $data = $request->only(['review','client_id','testday_id', 'bike_id', 'endTime', 'startTime']) ;
        // todo : validation
        $Test->update($data);
        return new TestResource($Test);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Test  $Test
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $Test)
    {
        $Test->delete();
    }


}

