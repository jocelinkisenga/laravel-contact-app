<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;
use App\Models\User;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','first_name', 'last_name', 'email', 'phone', 'adresse', 'company_id'];

    public function company(){
        return $this->belongsTo(Company::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
