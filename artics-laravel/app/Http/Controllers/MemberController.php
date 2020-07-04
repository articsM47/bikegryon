<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;
use App\Http\Requests\InscriptionRequest;
use App\Http\Requests\mdpRequest;
use App\Http\Resources\Member as MemberResource;
use Mail;
use Session;


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
     return view('People');


}

 public function rendFormulaire() {
	return view('Inscriptions');
}

 public function valideEtTraiteFormulaire(InscriptionRequest $request) {

/*     // Envoi d'un mail
    Mail::send('Email', $request->all(), function($message){

		$message->to('stephane.bondabelo@heig-vd.ch')->subject('Confirmation de Reservation');
    }); */

    // Confirmation de réception

/*     $name = $request->input('name');
    $email1 = $request->input('email1');
    $firstname = $request->input('firstname');
    $birthDay = $request->input('birthDay');
    session(['$name' => 'name']);
    session(['$email1' => 'email1']);
    session(['$firstname' => 'firstname']);
    session(['$birthDay' => 'birthDay']);
    echo("$request");
 */
/* POST::route('member.store', $request->all()); */
        $data = $request->only(['nom','prenom','birthday', 'phone1', 'phone2', 'email1', 'email2','comment','address_id','role']) ;

        $data['name']= $data['nom'];

        $data['firstname']= $data['nom'] ;

        $data['birthDay']= $data['birthday'] ;

        $data['address_id']= 1 ;

        // todo : validation
        Session::put('nom', $request->input('nom') );
        Session::put('prenom', $request->input('prenom') );
        Session::put('birthday', $request->input('birthday') );
        Session::put('email1', $request->input('email1') );

        $Member = Member::create($data);


    return view('Creation', $request->all(), );
}


public function validetoConfirmation(mdpRequest $request) {

    $nom = $request->only(['nom']);
    $data = $request->only(['password']) ;
    $data['psw'] = $data['password'];


    $Member = $request->only(['Member']) ;



/* ->update($request->all()); */

    return view('Confirmation', $request->all());
}
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->only(['name','firstname','birthDay', 'phone1', 'phone2', 'email1', 'email2','comment','address_id','role']) ;
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

