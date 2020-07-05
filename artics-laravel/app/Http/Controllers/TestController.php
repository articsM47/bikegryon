<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;
use App\Http\Resources\Test as TestResource;
use App\Bike;
use App\ClientTestday;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TestResource::collection(Test::with('bike', 'testday')->get());
    }
 /**
     * Run the migrations.
     *
     * @return void
     */
    public function affiche()
    {
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
        $data = $request->only(['review', 'client_id', 'testday_id', 'bike_id', 'endTime', 'startTime']);
        // todo : validation
        $Test = Test::create($data);
        // cration des dépendance
        return new TestResource($Test);
    }
 /**
     * Run the migrations.
     *
     * @return void
     */
    public function create(Request $request)
    {
        $bike = $this->findBike($request->distinctiveSign);
        $clientTestDay = $this->findClient($request->badgeNo);
        $this->createTest($bike, $clientTestDay);

        return 'OK';
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
 /**
     * Run the migrations.
     *
     * @return void
     */
    public function afficheproduit(Test $Test)
    {
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
        $data = $request->only(['review', 'client_id', 'testday_id', 'bike_id', 'endTime', 'startTime']);
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
 /**
     * Run the migrations.
     *
     * @return void
     */
    protected function findBike($distinctiveSign)
    {
        return Bike::where('distinctiveSign', $distinctiveSign)
            // Pour retourner le premier bike
            ->first();
    }
 /**
     * Run the migrations.
     *
     * @return void
     */
    protected function findClient($badgeNumber)
    {
        return ClientTestday::where('badgeNo', $badgeNumber)
            // Pour retourner le premier clienttestday
            ->first();
    }
 /**
     * Run the migrations.
     *
     * @return void
     */
    protected function createTest($bike, $clientTestDay)
    {
        $test = new Test();
        $test->bike_id = $bike->id;
        $test->client_id = $clientTestDay->client_id;
        $test->testday_id = $clientTestDay->testday_id;
        $test->badgeNo = $clientTestDay->badgeNo;
        $test->save();
    }
}
