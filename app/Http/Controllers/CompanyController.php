<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use Auth;

class CompanyController extends Controller
{

    public function index(){
        $companies = Company::whereUser_id(Auth::user()->id)->get();
        return view('pages.allCompanies', ['companies'=>$companies]);
    }

    public function create (){
        return view('pages.company');
    }


    public function store(Request $request){

            Company::create([
                    'user_id'=>$request->user_id,
                    'name'=>$request->name,
                    'email'=>$request->email,                   
                    'adresse'=>$request->address,
                    'website'=>$request->website,
                ]);
           return  redirect('/');

           
    }

    public function show(string $slug, int $id){
        $company= Company::findOrFail($id);
        return view('pages.companyShow',['company'=>$company]);
    }
}
