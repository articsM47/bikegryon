<?php

namespace App\Http\Controllers;

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
    public function index()
    {
        return MemberResource::collection(Member::all());
    }

public function affiche() {
     return view('Pepole');


}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->only(['name','firstname','birthDay', 'phone1', 'phone2', 'mail1', 'mail2','comment','address_id','role']) ;
        // todo : validation
        $Member = Member::create($data);
        // cration des dépendance
        return new MemberResource($Member);
    }

    public function create() {
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

    public function afficheproduit(Member $Member) {
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
        $data = $request->only(['name','firstname','birthDay', 'phone1', 'phone2', 'mail1', 'mail2','comment','address_id','role']) ;
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


}

