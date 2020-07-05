<?php

namespace App\Http\Controllers;

use App\ClientTestday;
use App\Member;
use Illuminate\Http\Request;
use App\Http\Resources\Member as MemberResource;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $testDayId = 1; // Hardcodé pour le Proof Of Concept
        $badgeMapping = $this->buildBadgeMapping($testDayId);
        $request->merge([
            'badgeMapping' => $badgeMapping,
            'testDayId' => $testDayId
        ]);
        return MemberResource::collection($this->findClientMembers());
    }

    public function affiche()
    {
        return view('People');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only(['name', 'firstname', 'birthDay', 'phone1', 'phone2', 'email1', 'email2', 'comment', 'address_id', 'role']);
        // todo : validation
        $Member = Member::create($data);
        // cration des dépendance
        return new MemberResource($Member);
    }

    public function create()
    {
        return view('AddMember');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Member  $Member
     * @return \Illuminate\Http\Response
     */
    public function show(Member $Member)
    {
        return new MemberResource($Member);
    }

    public function submitBadge(Request $request) {
        $clientTestDay = $this->findClientTestDay($request->clientId, $request->testDayId);
        $clientTestDay->badgeNo = $request->badgeNo;
        $clientTestDay->save();
        return 'OK';
    }

    public function afficheproduit(Member $Member)
    {
        return view('Member');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Member  $Member
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Member $Member)
    {
        $data = $request->only(['name', 'firstname', 'birthDay', 'phone1', 'phone2', 'mail1', 'mail2', 'comment', 'address_id', 'role']);
        // todo : validation
        $Member->update($data);
        return new MemberResource($Member);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Member  $Member
     * @return \Illuminate\Http\Response
     */
    public function destroy(Member $Member)
    {
        $Member->delete();
    }

    protected function findClients($testDayId)
    {
        return ClientTestday::with('client')->where('testday_id', $testDayId)->get();
    }

    protected function findClientMembers() {
        return Member::where('role', 'client')->get();
    }

    protected function buildBadgeMapping($testDayId)
    {
        $allClientsTestDay = $this->findClients($testDayId);
        $badgeMapping = array();
        foreach ($allClientsTestDay as $clientTestDay) {
            $badgeMapping[$clientTestDay->client->member_id] = array();
            if (isset($clientTestDay->badgeNo)) {
                $badgeMapping[$clientTestDay->client->member_id]['badgeNo'] = $clientTestDay->badgeNo;
            }
            $badgeMapping[$clientTestDay->client->member_id]['clientId'] = $clientTestDay->client_id;
        }
        return $badgeMapping;
    }

    protected function findClientTestDay($clientId, $testDayId) {
        return ClientTestday::where('client_id', $clientId)->where('testday_id', $testDayId)->first();
    }
}
