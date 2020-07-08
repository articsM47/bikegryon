<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;
use App\Http\Resources\Test as TestResource;
use App\Bike;
use App\ClientTestday;
use Carbon\Carbon;

class TestController extends Controller
{   
    
    /**
     * return a collection where endtime of test is null
     *
     * @return void
     */
    public function index()
    {
        return TestResource::collection(Test::where('endTime', null)->get());
    }

    /**
     * return the view of test page
     *
     * @return void
     */
    public function affiche()
    {
        return view('Test');
    }
   
    /**
     * store the new test of the client
     *
     * @param  mixed $request
     * @return void
     */
    public function store(Request $request)
    {
        $data = $request->only(['review', 'client_id', 'testday_id', 'bike_id', 'endTime', 'startTime']);
        // todo : validation
        $Test = Test::create($data);
        // création des dépendance
        return new TestResource($Test);
    }
       
    /**
     * create a new test
     *
     * @param  mixed $request
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
     * submitReview of a test
     *
     * @param  mixed $request
     * @return void
     */
    public function submitReview(Request $request) {
        error_log(print_r($request->all(), true));
        $test = $this->findTest($request->testId);
        $test->review = Test::buildReview($request->question1, $request->question2, $request->question3, $request->question4);
        $test->endTime = Carbon::now();
        $test->save();
        return 'OK';
    }
  
    /**
     * show a test
     *
     * @param  mixed $Test
     * @return void
     */
    public function show(Test $Test)
    {
        return new TestResource($Test);
    }

    /**
     * Return the view of all the tests
     *
     * @return void
     */
    public function afficheproduit(Test $Test)
    {
        return view('Test');
    }
        
    /**
     * update the specified resource in storage.
     *
     * @param  mixed $request
     * @param  mixed $Test
     * @return void
     */
    public function update(Request $request, Test $Test)
    {
        $data = $request->only(['review', 'client_id', 'testday_id', 'bike_id', 'endTime', 'startTime']);
        // todo : validation
        $Test->update($data);
        return new TestResource($Test);
    }
 
    /**
     * destroy the specified test
     *
     * @param  mixed $Test
     * @return void
     */
    public function destroy(Test $Test)
    {
        $Test->delete();
    }
   
    /**
     * findBike from distinctiveSign
     *
     * @param  mixed $distinctiveSign
     * @return void
     */
    protected function findBike($distinctiveSign)
    {
        return Bike::where('distinctiveSign', $distinctiveSign)
           //just the first
            ->first();
    }
   
    /**
     * findClient from badgenumber
     *
     * @param  mixed $badgeNumber
     * @return void
     */
    protected function findClient($badgeNumber)
    {
        return ClientTestday::where('badgeNo', $badgeNumber)
            // Pour retourner le premier clienttestday
            ->first();
    }
  
    /**
     * createTest create a test for a specified client for a specified testday
     *
     * @param  mixed $bike
     * @param  mixed $clientTestDay
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
  
    /**
     * findTest find a test with the id of input
     *
     * @param  mixed $testId
     * @return void
     */
    protected function findTest($testId)
    {
        return Test::where('id', $testId)
            ->first();
    }
}
