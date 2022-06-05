<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Company;

class ContactController extends Controller
{

    public function index (){
        $Contact = Contact::all();
        return view('pages.index',['contacts'=>$Contact]);
    }

    public function create (){
        $companies = Company::all();
        return view('pages.form', ['companies'=>$companies]);
    }

    public function store(Request $request){
        Contact::create([
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'email'=>$request->email,
                'phone'=>$request->phone,
                'adresse'=>$request->address,
                'company_id'=>$request->company_id
            ]);
    }

    public function show (Contact $contact){

    }

    public function update (Contact $contact){

    }

    public function destroy (){

    }
}
