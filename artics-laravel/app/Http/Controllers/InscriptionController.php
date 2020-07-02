<?php

namespace App\Http\Controllers;
use App\Http\Requests\InscriptionRequest;
use Illuminate\Http\Request;
use Mail;
class InscriptionController extends Controller
{
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

    return view('Creation', $request->all());
}
public function validetoConfirmation(Request $request) {

    return view('Confirmation', $request->all());
}
}
