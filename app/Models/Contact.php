<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Contact extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'phone',
        'birthDate',
        'email',
        'observations',
        'image'
    ];

    public static function create($contactRequest):void {

        //dd($contactRequest);
        //dd(Arr::get($contactRequest,'name'));
        $contact = new Contact;
        $contact->name = Arr::get($contactRequest,'name');
        $contact->phone = Arr::get($contactRequest,'phone');
        $contact->birthDate = Arr::get($contactRequest,'birthDate');
        $contact->email = Arr::get($contactRequest,'email');
        $contact->observations = Arr::get($contactRequest,'observations');
        $contact->image = Arr::get($contactRequest,'image');

        $contact->save();
    }
}
