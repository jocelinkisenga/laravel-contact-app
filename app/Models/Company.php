<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contact;
use App\Models\User;

class Company extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','name','email','adresse','website'];

    public function contacts (){
        return $this->hasMany(Contact::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
