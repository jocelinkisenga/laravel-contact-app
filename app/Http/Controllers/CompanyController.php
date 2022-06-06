<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{
    public function create (){
        return view('pages.company');
    }

    public function store(Request $request){

            Company::create([
                    'name'=>$request->name,
                    'email'=>$request->email,                   
                    'adresse'=>$request->address,
                    'website'=>$request->website,
                ]);

           
    }
}
