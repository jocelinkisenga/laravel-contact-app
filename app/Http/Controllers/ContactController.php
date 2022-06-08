<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Company;

class ContactController extends Controller
{

    public function index (){

        $companies = Company::orderBy('name')->pluck('name','id')->prepend('All companies','');
        $Contact = Contact::orderBy('first_name','asc')->where(function($query){
            if ($companyId = request('company_id')) {
                $query->where('company_id', $companyId);
            }
        })->paginate(5);
        return view('pages.index',['contacts'=>$Contact, 'companies'=>$companies]);
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

    public function show (string $slug, int $id){
        $Contact = Contact::findOrFail($id);
        
        return view('pages.show', ['contact'=>$Contact]);

    }

    public function update (Contact $contact){

    }

    public function destroy (){

    }
}
