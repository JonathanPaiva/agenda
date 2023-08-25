<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
Use App\Services\ImageTreatment;

const pathImageStorage = "contacts";

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

    public static function createRegister($contactRequest):void {

        $contact = Contact::create($contactRequest);

        $imageForTreatment = $contact->image;

        if (file_exists($imageForTreatment) ) {
            $id = $contact->id;

            $fileName = ImageTreatment::getImageTreatment($imageForTreatment, pathImageStorage, $id);

            $contact->image = $fileName;

            $contact->save();
        }
    }
}
