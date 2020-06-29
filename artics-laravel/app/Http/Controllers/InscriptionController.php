<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InscriptionController extends Controller
{
    public function rendFormulaire() {
	return view('Inscriptions');
}

 public function valideEtTraiteFormulaire(ContactRequest $request) {

    // Envoi d'un mail
    Mail::send('Email', $request->all(), function($message){
		$message->to('Email')->subject('Confirmation de Reservation');
    });

    // Confirmation de réception
    return view('Creation', $request);
}

}
