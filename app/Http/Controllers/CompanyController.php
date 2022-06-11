<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;

class CompanyController extends Controller
{

    public function index(){
        return view('pages.all-companies');
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
}
