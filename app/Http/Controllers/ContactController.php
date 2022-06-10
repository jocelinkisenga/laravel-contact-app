<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Company;
use Auth;

class ContactController extends Controller
{
    private int $user_id;

    public function index (){

    if(Auth::check()){
        $this->user_id = auth()->user()->id;
        $companies = Company::whereUser_id($this->user_id)
                              ->orderBy('name')->pluck('name','id')
                              ->prepend('All companies','');
    
        $Contact = Contact::where('user_id',$this->user_id)
                            ->orderBy('first_name','asc')
                            ->where(function($query){
                                            if ($companyId = request('company_id')) {
                                                    $query->where('company_id', $companyId);
                                    }
                            })->paginate(5);
                                
                            return view('pages.index',['contacts'=>$Contact, 'companies'=>$companies]);
            }else{
                return view('pages.index');
            }
    }

    public function create (){
        $this->user_id = auth()->user()->id;
        $companies = Company::whereUser_id($this->user_id)->get();
        return view('pages.form', ['companies'=>$companies]);
    }

    public function store(Request $request){
        Contact::create([
                'user_id'=>$request->user_id,
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
